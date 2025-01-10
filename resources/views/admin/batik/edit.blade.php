@extends('admin.layout.app')

@section('main')
    <div class="content">
        <form class="form-horizontal" action="/batik/{{ $batik->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Tambah Produk</h2>
                    <h5 class="text-700 fw-semi-bold">Wajib diisi semua sebelum menambahkan produk baru</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('batik.store') }}">Cancel</a>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Add</button>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-8">
                    <div class="mb-3">
                        <label for="bahan_id"><h4 class="mb-3">bahan batik</h4></label>
                        <select class="form-control" id="bahan_id" name="bahan_id" required>
                            <option value="" selected disabled>Pilih</option>
                            @foreach ($bahan as $b)
                                <option value="{{ $b->id }}">{{ $b->bahan }}</option>
                            @endforeach
                        </select>
                        @error('bahan_id')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="nama_produk"><h4 class="mb-3">nama_produk</h4></label>
                        <textarea class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" rows="5" value="{{ $batik->nama_produk }}" placeholder="Enter Product Description">{{ old('nama_produk', $batik->nama_produk) }}</textarea>
                        @error('nama_produk')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="deskripsi"><h4 class="mb-3">deskripsi</h4></label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5" value="{{ $batik->deskripsi }}" placeholder="Enter Product Description">{{ old('deskripsi', $batik->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <h4 class="mb-3">Gambar Produk</h4>
                    <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                      <div class="fallback"><input name="Gambar_Produk" type="file" multiple="multiple" /></div>
                      <div class="dz-preview d-flex flex-wrap">
                        <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;"><img class="dz-image" src="../../../assets/img/products/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /><a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a></div>
                      </div>
                      <div class="dz-message text-600" data-dz-message="data-dz-message">Drag your photo here<span class="text-800 px-1">or</span><button class="btn btn-link p-0" type="button">Browse from device</button><br /><img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="40" alt="" /></div>
                    </div>

                </div>
                <div class="col-12 col-xl-4">
                    <div class="row g-2">
                        <div class="col-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Others</h4>
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <label for="seri_produk" class="mb-0 text-1000 me-2"><h5>seri produk</h5></label>
                                                    <input class="form-control @error('seri_produk') is-invalid @enderror" id="seri_produk" type="text" placeholder="Masukkan Seri" name="seri_produk" value="{{ old('seri_produk') }}" />
                                                @error('seri_produk')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                                </div>
                                                {{-- <select class="form-select mb-3 @error('kategori') is-invalid @enderror" id="kategoribatik" name="kategori_id">
                                                    {{-- @if($kategori->isEmpty())
                                                        <option value="">No category data available</option>
                                                    @else
                                                        @foreach($kategori as $kategoris)
                                                            <option value="{{ $kategoris->id }}" {{ old('kategori_id') == $kategoris->id ? 'selected' : '' }}>{{ $kategoris->nama_kategori }}</option>
                                                        @endforeach
                                                    @endif --}}
                                                </select>
                                                @error('kategori_id')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="harga" class="mb-2 text-1000"><h5>harga</h5></label>
                                                <input class="form-control @error('harga') is-invalid @enderror" id="harga" type="number" placeholder="Masukkan     harga" name="harga" value="{{ old('harga') }}" />
                                                @error('harga')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="stok" class="mb-2 text-1000"><h5>stok</h5></label>
                                                <input class="form-control @error('stok') is-invalid @enderror" id="stok" type="number" placeholder="Masukkan     Stok" name="stok" value="{{ old('stok') }}" />
                                                @error('stok')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
