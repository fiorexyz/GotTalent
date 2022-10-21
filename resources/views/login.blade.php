<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOT TALENT!</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">


</head>
<body>
<div class="formulario">
    <h1>Log in</h1>
    <form method="post">
        @csrf
        <div class="username">
            <input type="email" name="email" required>
            <label>Email</label>
        </div>
        <div class="username">
            <input type="password" name="password" required>
            <label>Password</label>

        </div>
        <div class="recordar">¿Forgot your password?</div>
        <input type="submit" value="Submit">
        <div class="registrarse">
            I want to <a href="{{ url('register') }}">register</a>

        </div>


    </form>
</div>

</body>
</html>
