<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p>You have received a new message from your website contact form.</p>
    <ul>
        <li><strong>Name:</strong> {{ $formData['name'] }}</li>
        <li><strong>Email:</strong> {{ $formData['email'] }}</li>
        <li><strong>Message:</strong> {{ $formData['message'] }}</li>
    </ul>
</body>
</html>
