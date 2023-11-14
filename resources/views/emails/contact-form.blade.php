<!-- resources/views/emails/contact-form.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Submission</title>
</head>

<body>
    <h2>Contact Form Submission</h2>
    @if (!empty($formData['name']))
        <p>First name: {{ $formData['name'] }}</p>
    @endif
    @if (!empty($formData['email']))
        <p>Email: {{ $formData['email'] }}</p>
    @endif
    
    @if (!empty($formData['phone_number']))
        <p>Phone number: {{ $formData['phone_number'] }}</p>
    @endif
    
    @if (!empty($formData['service']))
        <p>Category: {{ $formData['service'] }}</p>
    @endif

    @if (!empty($formData['address']))
        <p>Subject: {{ $formData['address'] }}</p>
    @endif

    @if (!empty($formData['message']))
        <p>Message: {{ $formData['message'] }}</p>
    @endif
</body>

</html>
