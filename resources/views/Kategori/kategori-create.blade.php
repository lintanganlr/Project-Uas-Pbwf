<!-- resources/views/Kategori/kategori-create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'KategoriBarang.store', 'method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::label('nama_kategori', 'Nama Kategori') !!}
                        {!! Form::text('nama_kategori', null, ['class' => 'form-control', 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('KategoriBarang.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
