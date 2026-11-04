<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container d-flex mt-5 justify-content-center align-items-center gap-5">
        <form action="{{ route('postlogin') }}" method="POST" class="form-group">
            @csrf
            <label>Email :</label>
            <input type="email" name="email" class="form-control">

            <label>Password :</label>
            <input type="password" name="password" class="form-control">

            <button class="btn btn-primary">Login</button>
            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
        </form>
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</html>