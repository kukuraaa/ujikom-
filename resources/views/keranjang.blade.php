<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    @include('template.navbar')

    <div class="container mt-4">
        <h5>Keranjang</h5>
        
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

        @foreach ($produk as $p)
        <div class="card mb-1">
            <div class="row no-gutters align-items-center">
                <div class="col-md-3 text-center">
                    <img src="{{ asset('storage/' . $p->foto) }}"
                         class="img-thumbnail" 
                         style="width: 130px; height: 130px; object-fit: cover;">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <hr style="margin-top: 5px; margin-bottom: 10px;"> 

                        <p class="card-text">Harga Rp. {{ number_format($p->harga, 0, ',', '.') }}</p>
                        <input type="number" name="banyak" class="form-control w-25" 
                               value="{{ $p->qty }}" min="1">

                        <hr style="margin-top: 10px; margin-bottom: 10px;"> 

                        <p class="card-text mt-2">
                            Total Rp. {{ number_format($p->totalharga, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <a href="" class="btn btn-info">Bayar</a>
                </div>
            </div>
        </div>
        @endforeach

        @if ($produk->isEmpty())
            <div class="alert alert-warning mt-3">Keranjang kamu masih kosong!</div>
        @endif
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>