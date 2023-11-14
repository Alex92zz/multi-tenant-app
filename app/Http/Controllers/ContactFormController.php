<?php

// app/Http/Controllers/ContactFormController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    
    public function submit(Request $request)
    {
        
         // Verify reCAPTCHA
        $recaptchaSecretKey = env('RECAPTCHA_SECRET_KEY');
        $recaptchaResponse = $request->input('g-recaptcha-response');

        // Initialize cURL session
        $ch = curl_init();
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $data = [
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaResponse,
        ];

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute cURL session and get the response
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Decode the JSON response
        $responseKeys = json_decode($response, true);

       if (intval($responseKeys["success"]) !== 1) {
    // Handle the case where reCAPTCHA verification fails.
    return response()->json(['error' => 'reCAPTCHA verification failed. Please prove that you are not a robot.'], 400);
}


        
        // Get the form data as an array
    $formData = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
        'service' => $request->input('service'),
        'address' => $request->input('address'),
        // Add other form fields here
    ];
    

    // Log the form data to the console (error log)
    error_log('Form Data Received: ' . json_encode($formData));

        // Send the email
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactFormMail($formData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your request has been submitted successfully.');
    }

}
