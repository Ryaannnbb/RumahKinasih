@extends('admin.layout.app')

@section('main')
<div class="content">
    <form class="form-horizontal" action="{{ route('bahan.store') }}" method="POST">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Tambah Produk</h2>
                <h5 class="text-700 fw-semi-bold">Wajib diisi semua sebelum menambahkan produk baru</h5>
            </div>
            <div class="col-auto">
                <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('bahan.store') }}">Cancel</a>
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Add</button>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12 col-xl-12">
                <div class="mb-3">
                    <label for="nama_bahan"><h4 class="mb-3">nama_bahan</h4></label>
                    <input class="form-control @error('nama_bahan') is-invalid @enderror" id="namabatik" type="text" placeholder="masukkan nama bahan" name="nama_bahan" value="{{ old('nama_bahan') }}"/>
                    @error('nama_bahan')
                        <strong class="invalid-feedback">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="harga"><h4 class="mb-3">harga</h4></label>
                    <input class="form-control @error('harga') is-invalid @enderror" id="harga" type="number" name="harga" placeholder="masukkan harga bahan" value="{{ old('harga') }}"/>
                    @error('harga')
                        <strong class="invalid-feedback">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
