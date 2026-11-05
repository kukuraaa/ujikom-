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
        <form action="{{ route('posttambah') }}" method="POST" class="form-group" enctype="multipart/form-data">
            @csrf

            <label for="">Kategori :</label>
            <select name="kategori_id" id="" class="form-control">
                @foreach ($kategori as $k)
                    <option value="{{ $k->id }}">{{ $k->name }}</option>
                @endforeach
            </select>

            <div class="mb-3">
                <label>Nama :</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Harga :</label>
                <input type="number" name="harga" class="form-control">
            </div>

             <div class="mb-3">
                <label>Deskripsi :</label>
                <input type="text" name="deskripsi" class="form-control">
            </div>

             <div class="mb-3">
                <label>Foto :</label>
                <input type="file" name="foto" accept="image/*" class="form-control">
            </div>

            <div class="mb-3">
                <label>Quantity :</label>
                <input type="number" name="qty" class="form-control">
            </div>

            <button class="btn btn-success">Tambah</button>
            <a href="{{ route('admin') }}" class="btn btn-danger">Batalkan</a>
        </form>
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</html>