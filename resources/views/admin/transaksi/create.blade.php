@extends('admin.layout.app')

@section('main')
    <div class="content">
        <form class="mb-9" action="{{ route('batik.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Tambah Transaksi</h2>
                    <h5 class="text-700 fw-semi-bold">Silakan lengkapi formulir di bawah ini untuk menambahkan transaksi baru.</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('batik.index') }}">Batalkan</a>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Tambah</button>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-8">
                    <div class="mb-3">
                        <label for="namaProduk"><h4 class="mb-3">Produk Tersedia</h4></label>
                        <select class="form-select @error('batik_id') is-invalid @enderror" id="namaProduk" name="batik_id" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Pilih Produk</option>
                            @foreach($batik as $produk)
                                <option value="{{ $produk->id }}" {{ old('batik_id') == $produk->id ? 'selected' : '' }}>{{ $produk->nama_produk }}</option>
                            @endforeach
                        </select>
                        @error('batik_id')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="fotoProduk"><h4 class="mb-3">Product Image (Recommended: 1:1 Ratio)</h4></label>
                        <input class="form-control @error('gambar_produk') is-invalid @enderror" id="fotoProduk" type="file" name="gambar_produk">
                        <img class="mt-2" id="image-preview" src="#" alt="Preview" style="display: none; width: 100%; height: auto; border-radius: 5px">
                        <strong class="invalid-feedback" id="image-error" style="display: none;">This input must be an image</strong>
                        @error('gambar_produk')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                        <script>
                            document.getElementById('fotoProduk').addEventListener('change', function(e) {
                                const file = e.target.files[0];
                                const reader = new FileReader();
                                const imagePreview = document.getElementById('image-preview');
                                const imageError = document.getElementById('image-error');
                                const inputField = document.getElementById('fotoProduk');

                                if (file && file.type.startsWith('image/')) {
                                    reader.onload = function(e) {
                                        imagePreview.src = e.target.result;
                                        imagePreview.style.display = 'block';
                                        imageError.style.display = 'none';
                                        inputField.classList.remove('is-invalid');
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
                    <div id="selected-products" class="mt-4">
                        <h4 class="mb-3">Selected Products</h4>
                        <div id="product-images" class="d-flex flex-wrap"></div>
                    </div>
                    <script>
                        document.getElementById('namaProduk').addEventListener('change', function(e) {
                            const selectedOptions = Array.from(e.target.selectedOptions);
                            const productImagesContainer = document.getElementById('product-images');
                            productImagesContainer.innerHTML = '';

                            selectedOptions.forEach(option => {
                                if (option.value) {
                                    const productId = option.value;
                                    const productName = option.text;
                                    const productImage = `{{ asset('storage/batik') }}/${productId}.jpg`; // Assuming image path

                                    const productDiv = document.createElement('div');
                                    productDiv.classList.add('product-item', 'me-3', 'mb-3');
                                    productDiv.style.width = '150px';

                                    const imgElement = document.createElement('img');
                                    imgElement.src = productImage;
                                    imgElement.alt = productName;
                                    imgElement.style.width = '100%';
                                    imgElement.style.borderRadius = '5px';

                                    const nameElement = document.createElement('p');
                                    nameElement.textContent = productName;
                                    nameElement.style.textAlign = 'center';
                                    nameElement.style.marginTop = '5px';

                                    productDiv.appendChild(imgElement);
                                    productDiv.appendChild(nameElement);
                                    productImagesContainer.appendChild(productDiv);
                                }
                            });
                        });
                    </script>
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
                                                    <label for="bahanBatik" class="mb-0 text-1000 me-2"><h5>Category</h5></label>
                                                    <a class="fw-bold fs--1" href="{{ route('bahan.create') }}">Add a New Material?</a>
                                                </div>
                                                {{-- <select class="form-select mb-3 @error('bahan_id') is-invalid @enderror" id="bahanBatik" name="bahan_id">
                                                    @if($bahan->isEmpty())
                                                        <option value="">No bahan data available</option>
                                                    @else
                                                        @foreach($bahan as $bahans)
                                                            <option value="{{ $bahans->id }}" {{ old('bahan_id') == $bahans->id ? 'selected' : '' }}>{{ $bahans->nama_bahan }}</option>
                                                        @endforeach
                                                    @endif
                                                </select> --}}
                                                @error('bahan_id')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="hargaProduk" class="mb-2 text-1000"><h5>Price</h5></label>
                                                <input class="form-control @error('harga') is-invalid @enderror" id="hargaProduk" type="number" placeholder="Enter Price" name="harga" value="{{ old('harga') }}" />
                                                @error('harga')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="stokBatik" class="mb-2 text-1000"><h5>Stok</h5></label>
                                                <input class="form-control @error('stok') is-invalid @enderror" id="stokBatik" type="number" placeholder="Enter Weight" name="stok" value="{{ old('stok') }}" />
                                                @error('stok')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="seriProduct" class="mb-2 text-1000"><h5>Seri Product</h5></label>
                                                <input class="form-control @error('seri_produk') is-invalid @enderror" id="seriProduct" type="text" placeholder="Enter Seri Product" name="seri_produk" value="{{ old('seri_produk') }}" />
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
