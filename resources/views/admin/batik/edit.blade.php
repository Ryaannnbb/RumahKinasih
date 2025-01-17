@extends('admin.layout.app')

@section('main')
    <div class="content">
        <form class="mb-9" action="{{ route('batik.update', $batik->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Edit Produk</h2>
                    <h5 class="text-700 fw-semi-bold">Isi semua untuk mengedit Produk.</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('batik.index') }}">Batalkan</a>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Simpan</button>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-8">
                    <div class="mb-3">
                        <label for="productName">
                            <h4 class="mb-3">Nama Produk</h4>
                        </label>
                        <input class="form-control @error('nama_produk') is-invalid @enderror" id="productName"
                            type="text" placeholder="Enter Product Name" name="nama_produk"
                            value="{{ old('nama_produk', $batik->nama_produk) }}" />
                        @error('nama_produk')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="productDescription">
                            <h4 class="mb-3">Deskripsi Produk</h4>
                        </label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="productDescription" name="deskripsi"
                            rows="5" placeholder="Enter Product Description">{{ old('deskripsi', $batik->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="productImage">
                            <h4 class="mb-3">Foto Produk (Recommended: 1:1 Ratio)</h4>
                        </label>
                        <input class="form-control @error('gambar_produk') is-invalid @enderror" id="productImage"
                            type="file" name="gambar_produk">
                        <img class="mt-2" id="image-preview" src="#" alt="Preview"
                            style="display: none; width: 100%; height: auto; border-radius: 5px">
                        <strong class="invalid-feedback" id="image-error" style="display: none;">Hanya bisa mengirim gambar</strong>
                        @if ($batik->gambar_produk)
                            <img class="mt-2" id="current-image"
                                src="{{ asset('storage/batik/' . $batik->gambar_produk) }}" alt="Current Image"
                                style="width: 100%; height: auto; border-radius: 5px">
                        @endif
                        @error('gambar_produk')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                        <script>
                            document.getElementById('productImage').addEventListener('change', function(e) {
                                const file = e.target.files[0];
                                const reader = new FileReader();
                                const imagePreview = document.getElementById('image-preview');
                                const imageError = document.getElementById('image-error');
                                const currentImage = document.getElementById('current-image');
                                const inputField = document.getElementById('productImage');

                                if (file && file.type.startsWith('image/')) {
                                    reader.onload = function(e) {
                                        imagePreview.src = e.target.result;
                                        imagePreview.style.display = 'block';
                                        imageError.style.display = 'none';
                                        inputField.classList.remove('is-invalid');
                                        if (currentImage) {
                                            currentImage.style.display = 'none';
                                        }
                                    }
                                    reader.readAsDataURL(file);
                                } else {
                                    imagePreview.style.display = 'none';
                                    imageError.style.display = 'block';
                                    inputField.classList.add('is-invalid');
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="row g-2">
                        <div class="col-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Lainnya</h4>
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <label for="bahanBatik" class="mb-0 text-1000 me-2">
                                                        <h5>Bahan</h5>
                                                    </label>
                                                    <a class="fw-bold fs--1" href="{{ route('bahan.create') }}">Tambahkan Kategori baru</a>
                                                </div>
                                                <select class="form-select mb-3 @error('bahan') is-invalid @enderror"
                                                    id="bahanBatik" name="bahan_id">
                                                    @if ($bahan->isEmpty())
                                                        <option value="">Tidak ada kategori yang tersedia</option>
                                                    @else
                                                        @foreach ($bahan as $bahans)
                                                            <option value="{{ $bahans->id }}"
                                                                {{ old('bahan_id', $batik->bahan_id) == $bahans->id ? 'selected' : '' }}>
                                                                {{ $bahans->nama_bahan }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('bahan_id')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="productPrice" class="mb-2 text-1000">
                                                    <h5>harga</h5>
                                                </label>
                                                <input class="form-control @error('harga') is-invalid @enderror"
                                                    id="productPrice" type="number" placeholder="Enter Price"
                                                    name="harga" value="{{ old('harga', $batik->harga) }}" />
                                                @error('harga')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="stockBatik" class="mb-2 text-1000">
                                                    <h5>Stok</h5>
                                                </label>
                                                <input class="form-control @error('stok') is-invalid @enderror"
                                                    id="stockBatik" type="number" placeholder="Enter Weight"
                                                    name="stok" value="{{ old('stok', $batik->stok) }}" />
                                                @error('stok')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="SeriProduct" class="mb-2 text-1000">
                                                    <h5>Seri Produk</h5>
                                                </label>
                                                <input class="form-control @error('seri_produk') is-invalid @enderror"
                                                    id="SeriProduct" type="text" placeholder="Enter Weight"
                                                    name="seri_produk" value="{{ old('seri_produk', $batik->seri_produk) }}" />
                                                @error('seri_produk')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
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
