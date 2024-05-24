<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lala-lether.com</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $enquiry['name'] }}</p>
    <p><strong>Phone:</strong> {{ $enquiry['phone'] }}</p>
    <p><strong>Email:</strong> {{ $enquiry['email'] }}</p>
    <p><strong>Message:</strong><br>{!! nl2br($enquiry['message']) !!}</p>
    <p><strong>Enquiry From:</strong> {{ $enquiry['enquiry_from'] }}</p>
    @isset ($enquiry['enquiry_for'])
        <p><strong>Enquiry For:</strong> Product Id ({{ $enquiry['enquiry_for'] }})</p>
    @endisset
</body>
</html>