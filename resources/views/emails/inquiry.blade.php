<!DOCTYPE html>
<html>
<head>
    <title>New Inquiry</title>
</head>
<body>
    <h2>New Inquiry Received</h2>
    <p><strong>Name:</strong> {{ $inquiry->fname }} {{ $inquiry->lname }}</p>
    <p><strong>Email:</strong> {{ $inquiry->email }}</p>
    <p><strong>Phone:</strong> {{ $inquiry->phone }}</p>
    <p><strong>Message:</strong> {{ $inquiry->notes }}</p>
</body>
</html>
