<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to Laravel 12</h1>
    <a href="{{ route('guestprofile', ['name' => 'samit']) }}">Call samit</a><br>
    <a href="{{ route('guestprofile', ['name' => 'wichai']) }}">Call wichai</a>
    <h2>Hello {{ $myname }}</h2>
</body>
</html>