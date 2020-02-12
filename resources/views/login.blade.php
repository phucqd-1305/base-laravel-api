<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Sun* mail marketing | Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="card">
        <div class="logo">
            <img src="{{ asset('images/sm-logo.png') }}" alt="logo">
        </div>
        <h1 class="title">
            <img src="{{ asset('images/logo.svg') }}" alt="logo">
        </h1>
        <div class="button">
            <a href="{{ url('/login/gsuit') }}">
                    Đăng nhập với G-Suit
            </a>
        </div>
        @if (session('message'))
            <div class="alert">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
</body>
</html>
