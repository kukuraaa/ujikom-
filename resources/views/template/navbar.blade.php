<nav class="nav bg-secondary">
    <a href="" class="nav-link active text-white text-bold" aria-current="page">Shop</a>
    <a href="" class="nav-link text-white" href="">menu</a>
    <a href="" class="nav-link text-white" href="">Keranjang</a>
    <a href="" class="nav-link text-white" href="">CheckOut</a>

    <form action="{{ route('logout') }}" method="POST" class="ms-auto d-inline">
        @csrf

        <button type="submit" class="btn nav-link text-white">Logout</button>
    </form>
</nav>