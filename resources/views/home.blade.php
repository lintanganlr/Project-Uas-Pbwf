@extends('layout-home')

@section('content')
    <div class="container">
        <div class="slider-container">
            <div class="slider">
                <img src="image/tumbnail1.png" alt="Image 1" width="1000" height="450">
            </div>
            <div class="slider">
                <img src="image/tumbnail2.png" alt="Image 2" width="1000" height="450">
            </div>
            <div class="slider">
                <img src="image/tumbnail3.png" alt="Image 3" width="1000" height="450">
            </div>
            <div class="slider">
                <img src="image/tumbnail4.png" alt="Image 4" width="1000" height="450">
            </div>
            <div class="slider">
                <img src="image/tumbnail5.png" alt="Image 4" width="1000" height="450">
            </div>
            <div class="slider">
                <img src="image/tumbnail6.png" alt="Image 4" width="1000" height="450">
            </div>
            <div class="slider">
                <img src="image/tumbnail7.png" alt="Image 4" width="1000" height="450">
            </div>
            <!-- Tambahkan gambar-gambar lain di sini -->
        </div>
        <div class="slider-controls">
            <button class="prev-btn">&lt;</button>
            <button class="next-btn">&gt;</button>
        </div>
    </div>
    <div class="container">
        <div class="centered-text">
            <h3>New Launching</h3>
        </div>
        <div class="container">


            {{-- Untuk setiap produk ini belum dinamis, jadi harus di foreach in nge get dari barang di db biar bisa ngakses id nya --}}



            <!-- Product 1 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 1]) }}">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-23010-55e2qyey1kmve9" alt="Product 1">
                </a>
                <h3>SWEATER Oversize 199X</h3>
                <p>Price: $10.99</p>
            </div>

            <!-- Product 2 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 2]) }}">
                    <img src="https://down-id.img.susercontent.com/file/sg-11134201-22110-v0qyo6l86jjv1b" alt="Product 2">
                </a>
                <h3>Cardigan Rajut Premium Argyle</h3>
                <p>Price: $14.99</p>
            </div>

            <!-- Product 3 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 3]) }}">
                    <img src="https://down-id.img.susercontent.com/file/sg-11134201-22100-hdfjmwgkduivc3" alt="Product 3">
                </a>
                <h3>Outer Blouse Korean Vintage Jennie</h3>
                <p>Price: $14.99</p>
            </div>

            <!-- Product 4 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 4]) }}">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7qul9-ljdqewd2fca508" alt="Product 4">
                </a>
                <h3>Blouse Shirt Vest Longsleeve Sunny</h3>
                <p>Price: $14.99</p>
            </div>

            <!-- Product 5 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 5]) }}">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-23010-mv8zxznj1kmv73" alt="Product 5">
                </a>
                <h3>Cardigan Crop SOS X NST</h3>
                <p>Price: $14.99</p>
            </div>

            <!-- Product 6 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 6]) }}">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-23020-vg0n5my7avnv51" alt="Product 6">
                </a>
                <h3>Jaket Shirt Corduroy Danielle</h3>
                <p>Price: Rp195.000</p>
            </div>

            <!-- Product 7 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 7]) }}">
                    <img src="https://down-id.img.susercontent.com/file/sg-11134201-23010-yvj32pnsuulve0" alt="Product 7">
                </a>
                <h3>Jaket Polos Varsity Hanni</h3>
                <p>Price: Rp125.000</p>
            </div>

            <!-- Product 8 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 8]) }}">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7quky-li9gaqqz0ay25b" alt="Product 8">
                </a>
                <h3>Celana Cargo Pants Kayfe</h3>
                <p>Price: Rp175.500</p>
            </div>

            <!-- Product 9 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 9]) }}">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7qula-lje60q56g0ke54" alt="Product 9">
                </a>
                <h3>Sweatshirt Crop Stripes Gamora</h3>
                <p>Price: Rp145.000</p>
            </div>

            <!-- Product 10 -->
            <div class="product">
                <a href="{{ route('detail-barang', ['id' => 10]) }}">
                    <img src="https://down-id.img.susercontent.com/file/sg-11134201-22120-zxdgwokn0ukv32" alt="Product 10">
                </a>
                <h3>Jaket Varsity Baseball Blue Sky</h3>
                <p>Price: Rp135.000</p>
            </div>

        </div>
    @endsection
