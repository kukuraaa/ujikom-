<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Menu</title>
</head>
<body>
    @include('template.navbar')
    <h1></h1>
    <div class="row">
            @foreach ($produk as $p)
                <div class="col-3 mt-20">
                    <div class="card justify-content-center m-5">
                        <img src="{{ asset('storage/' .$p->foto) }}" alt="" class="card-img-top" style="height: 200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->name }}</h5>
                            <p class="card-text">Rp. {{ number_format($p->harga, 0, ',', '.') }}</p>
                            <a href="" class="btn btn-secondary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</html>