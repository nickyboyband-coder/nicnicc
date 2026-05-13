<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="login-page">

    <div class="login-box">

        

        <div class="login-content">

            <img src="{{ asset('assets/images/ll.png') }}" class="logo">

            <h1 class="title">LOGIN</h1>

            <form action="/home">

                <input type="text" placeholder="Email" class="input">
                <input type="password" placeholder="Password" class="input">

                <button class="btn">Login</button>

            </form>

        </div>

    </div>

</div>

</body>
</html>