@extends('layout-home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://down-id.img.susercontent.com/file/id-11134207-23010-55e2qyey1kmve9" alt="Product 1"
                    class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>SWEATER Oversize 199X</h3>
                <div class="form-group mb-2">
                    <label for="full_name">Ukuran :</label>
                    <input type="text" id="full_name" name="ukuran_barang" class="form-control" value="M" readonly>
                </div>
                <div class="form-group mb-2">
                    <label for="full_name">Total :</label>
                    <input type="text" id="full_name" name="harga_barang" class="form-control" value="120000" readonly>
                </div>

                <hr>
                <!-- Add payment form here -->
                <form action="" method="post">
                    {{-- Nah bagian ini, route nya arahin ke pay , ID nya nyesuain sama id pemesanan --}}
                    @csrf
                    <input type="hidden" name="product_id" value="1"> <!-- Assuming product 1 has ID = 1 -->
                    <div class="form-group mb-2">
                        <label for="full_name">Nama Lengkap:</label>
                        <input type="text" id="full_name" name="full_name" class="form-control" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="phone">Nomor Telepon:</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>

                    <div class="form-group mb-2">
                        <label for="payment_method">Metode Pembayaran:</label>
                        <select id="payment_method" name="payment_method" class="form-control" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="credit_card">Kartu Kredit</option>
                            <option value="bank_transfer">Transfer Bank</option>
                            <option value="e-wallet">Dompet Elektronik</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-outline-warning text-dark shadow mt-4">Bayar Sekarang</button>
                </form>
            </div>
        </div>
    </div>
@endsection
