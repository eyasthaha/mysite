<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/adminlogin.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="admin-login-container">
        <h2>Admin login</h2>
        <form action="{{route('adminLogin.post')}}" method="post">
            @csrf
            <input type="email" name="email" placeholder="Email" autocomplete="off"><br>
            <input type="password" name="password" placeholder="Password" autocomplete="off"><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>