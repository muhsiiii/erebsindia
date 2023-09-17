<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>
<body>
    <h1>Get in touch !</h1>
    
    <h2>Name : {{$user->name}}</h2>
    <h2>Email : {{$user->email}}</h2>
    <h2>Subject : {{$user->subject}}</h2>
    <h2>Message : {{$user->message}}</h2>
</body>
</html>