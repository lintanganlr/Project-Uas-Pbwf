@extends('layout-home')
@section('content')
    <div class="container py-4">

        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                            src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">Kategori : BST-498</div>
                        <h1 class="display-5 fw-bolder">Nama Barang</h1>
                        <div class="fs-5 mb-5">
                            <span>Rp.40.000</span>
                        </div>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem
                            quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis
                            delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            <form action="{{ route('pembayaran') }}" method="get">
                                @csrf
                                <input type="hidden" name="id_barang" value="{{ $barang->id ?? 1 }}">
                                <input class="form-control text-center me-3" id="inputQuantity" type="num"
                                    value="1" style="max-width: 3rem" />
                                <button class="btn btn-block btn-outline-dark flex-shrink-0 mt-4" type="submit">
                                    Add to cart
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
