<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>Hi {{$userData['name']}} </h1>
    <p>your e-mail:<br> {{$userData['email']}}</p>
    <p>your phone number:<br> {{$userData['phone']}}</p>
    <p>{{$userData['message']}}</p>

</body>
</html>