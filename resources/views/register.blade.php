<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="container d-flex mt-5 justify-content-center align-items-center">
        <form action="{{ route('postregister') }}" method="POST" class="form-group">
            @csrf
            <label>Nama :</label>
            <input type="text" name="name" class="form-control">

            <label>Email :</label>
            <input type="email" name="email" class="form-control">

            <label>Password :</label>
            <input type="password" name="password" class="form-control">

            <button class="btn btn-success">Register</button>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </form>
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</html>