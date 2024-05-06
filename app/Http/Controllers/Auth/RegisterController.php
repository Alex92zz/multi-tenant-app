<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{

    use HasRoles;
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {


        // Check if the secret code is "alex"
        if ($request->secret_code !== env('REGISTER_SECRET_CODE')) {
            // If secret code is not "alex", redirect back with an error message
            return redirect()->back()->withInput()->withErrors(['secret_code' => 'Invalid secret code.']);
        }

        // Check if there is no user with the same email
        if (User::where('email', $request->email)->exists()) {
            // If a user with the same email already exists, redirect back with an error message
            return redirect()->back()->withInput()->withErrors(['email' => 'Email already exists.']);
        }

        // Check if the secret code is "alex"
        if ($request->password !== $request->confirm_password) {
            // If secret code is not "alex", redirect back with an error message
            return redirect()->back()->withInput()->withErrors(['confirm_password' => 'Confirmed password has to be the same as password']);
        }

        $this->validate($request, [
            'name' => 'required|string|min:4|max:255',
            'email' => 'required|string|email|min:4|max:255',
            'password' => 'required|string|min:4|max:40',
            'confirm_password' => 'required|string|min:4|max:40|same:password', // Ensure confirm_password matches password
            'secret_code' => 'required|string|max:255',
        ]);

        // Create the user if secret code is "alex" and no user with the same email exists
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Assign the role of "unassigned" to the user
    $unassignedRole = Role::where('name', 'unassigned')->first();

    $user->assignRole($unassignedRole);

        // Redirect to home if registration is successful
        return redirect('/admin/login');
    }
}
