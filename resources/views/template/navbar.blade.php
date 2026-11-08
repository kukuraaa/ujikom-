<nav class="nav bg-secondary">
    <a href="" class="nav-link active text-white text-bold" aria-current="page">Shop</a>
    <a href="{{ route('menu') }}" class="nav-link text-white" href="">Menu</a>
    
    <a href="{{ route('keranjang') }}" class="nav-link text-white">Keranjang</a>
    <a href="" class="nav-link text-white" href="">CheckOut</a>

    <form action="{{ route('logout') }}" method="POST" class="ms-auto d-inline">
        @csrf

        <button type="submit" class="btn nav-link text-white">Logout</button>
    </form>
</nav>