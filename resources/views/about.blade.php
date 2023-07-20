<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Website title -->
    <title>Nuna Nanu | {{$title}}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg" style="baskground-color: #F9FBE7">
    <div class="container-fluid">
        <div class="perusahaan">
            <img src="image/logo-brand2.png" alt="Logo Brand" style="width: 85px; height: 85px; float: left;">
        </div>

        <div class="collapse navbar-collapse justify-content-center gap-3" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="home">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
            </ul>
            <!-- Navbar -->
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <!-- Tambahkan menu lainnya di sini -->
            </ul>
            <ul class="navbar-nav">
                <li class="product">
                    <a class="nav-link" href="{{ url('/barang') }}">Product</a>
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
                <a class="nav-link" href="#"><i class="fas icon-nav fa-shopping-cart"></i></a>
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

    </header>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Nuna Nanu</h1>
                        <p>Welcome to Nuna Nanu, your one-stop-shop for all your favorite products!</p>
                        <p>At Nuna Nanu, we are committed to providing our customers with the best shopping experience. We offer a wide range of high-quality products, including fashion, electronics, home goods, and much more. With our user-friendly website and secure payment options, you can shop with confidence and convenience.</p>
                        <p>Our team is dedicated to delivering excellent customer service and ensuring that you find exactly what you're looking for. Whether you need a trendy outfit for a special occasion or the latest gadgets, we've got you covered.</p>
                        <p>Join our community of satisfied customers and discover the joy of online shopping with Nuna Nanu. Stay tuned for exciting deals, discounts, and new arrivals!</p>
                        <p>Thank you for choosing Nuna Nanu. Happy shopping!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

</body>
            <!-- Scripts -->
            <script>
        // Tambahkan kode JavaScript untuk mengatur tautan aktif pada navbar
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if (window.location.href.includes(link.getAttribute('href'))) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>
