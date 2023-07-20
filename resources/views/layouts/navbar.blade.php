<nav class="navbar navbar-expand-lg" style="baskground-color: #F9FBE7">
    <div class="container-fluid">
        <div class="perusahaan">
            <img src="image/logo-brand2.png" alt="Logo Brand" style="width: 85px; height: 85px; float: left;">
        </div>

        <div class="collapse navbar-collapse justify-content-center gap-3" id="navbarSupportedContent">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                            <a class="nav-link " href="{{ url('/') }}">Home</a>
                        </li>
            </ul>
            <!-- Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/about') }}">About</a>
                </li>
                <!-- Tambahkan menu lainnya di sini -->
            </ul>
            
            <ul class="navbar-nav">
                <li class="product">
                    <a class="nav-link " href="{{ url('/barang') }}">Product</a>
                </li>

            </ul>
        </div>

        <ul class="navbar-nav">
            <li class="search">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="fa-solid icon-nav fa-magnifying-glass"></i>
                    </button>
                </form>
            </li>
        </ul>
        <ul class="nav">
            <li class="cart">
                <a class="nav-link" href="{{ url('cart') }}"><i class="fas icon-nav fa-shopping-cart"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    </li>
                @else
                    <li class="login">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="register">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>
</nav>
