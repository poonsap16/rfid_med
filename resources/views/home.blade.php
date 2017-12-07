<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RFID Medicine</title>
</head>
<body>

    <!--Auth::user() => App\User::find($x);-->
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h1>Hello {{ Auth::user()->email }}</h1>

    <h1>{{ csrf_token() }}</h1>

    
</body>
</html>