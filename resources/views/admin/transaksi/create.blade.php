@extends('admin.layout.app')

@section('main')
    <div class="content">
        <form class="mb-9" action="{{ route('transaksi.store') }}" method="POST">
            @csrf
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Tambah Transaksi</h2>
                    <h5 class="text-700 fw-semi-bold">Silakan lengkapi formulir di bawah ini untuk menambahkan transaksi baru.</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('transaksi.index') }}">Batalkan</a>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Tambah</button>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-8">
                    <div class="mb-3">
                        <label for="namaPelanggan"><h4 class="mb-3">Nama Bahan</h4></label>
                        <input class="form-control @error('nama_pelanggan') is-invalid @enderror" id="namaPelanggan" type="text" placeholder="Masukkan Nama Pelanggan" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}"/>
                        @error('nama_pelanggan')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="namaProduk"><h4 class="mb-3">Produk Tersedia</h4></label>
                        <select class="form-select @error('batik_id') is-invalid @enderror" id="namaProduk" name="batik_id[]" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Pilih Produk</option>
                            @foreach($batik as $produk)
                            <option value="{{ $produk->id }}"
                                    data-image="{{ asset('storage/batik/' . $produk->gambar_produk) }}"
                                    data-price="{{ $produk->harga }}"
                                    {{ old('batik_id') == $produk->id ? 'selected' : '' }}>
                                {{ $produk->nama_produk }}
                            </option>
                            @endforeach
                        </select>
                        @error('batik_id')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div id="selected-products" class="mt-4">
                        <h4 class="mb-3">Selected Products</h4>
                        <div id="product-images" class="d-flex flex-wrap"></div>
                    </div>
                    <script>
                        // Fungsi untuk menampilkan gambar produk yang dipilih
                        function displaySelectedProducts() {
                            const selectedOptions = Array.from(document.getElementById('namaProduk').selectedOptions);
                            const productImagesContainer = document.getElementById('product-images');
                            productImagesContainer.innerHTML = ''; // Clear previous images

                            selectedOptions.forEach(option => {
                                if (option.value) {
                                    const productName = option.text;
                                    const productImage = option.dataset.image; // Ambil URL gambar produk

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
                        }

                        // Event listener untuk menampilkan produk yang dipilih
                        document.getElementById('namaProduk').addEventListener('change', displaySelectedProducts);
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
                                                <label for="jumlahProduk" class="mb-2 text-1000"><h5>Jumlah Produk</h5></label>
                                                <input class="form-control @error('jumlah') is-invalid @enderror" id="jumlahProduk" type="number" placeholder="Masukkan Jumlah" name="jumlah" value="{{ old('jumlah') }}" min="1" />
                                                @error('jumlah')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label for="totalHarga" class="mb-2 text-1000"><h5>Total Harga</h5></label>
                                                <input class="form-control" id="totalHarga" type="text" placeholder="Masukkan Jumlah Produk" readonly />
                                            </div>

                                            <script>
                                                // Fungsi untuk memperbarui harga total
                                                function updateTotalHarga() {
                                                    const selectedOptions = Array.from(document.getElementById('namaProduk').selectedOptions);
                                                    const jumlahProduk = parseInt(document.getElementById('jumlahProduk').value) || 0;

                                                    let totalHarga = 0;

                                                    selectedOptions.forEach(option => {
                                                        if (option.value) {
                                                            const productPrice = parseFloat(option.dataset.price); // Ambil harga dari atribut data-price
                                                            totalHarga += productPrice;
                                                        }
                                                    });

                                                    // Menghitung total harga berdasarkan jumlah produk
                                                    totalHarga *= jumlahProduk;

                                                    // Menampilkan hasil dalam format currency IDR
                                                    document.getElementById('totalHarga').value = totalHarga.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                                                }

                                                // Event listener untuk mengubah harga total ketika produk dipilih atau jumlah diubah
                                                document.getElementById('namaProduk').addEventListener('change', updateTotalHarga);
                                                document.getElementById('jumlahProduk').addEventListener('input', updateTotalHarga);
                                            </script>
                                            <div class="mb-4">
                                                <label for="tanggalTransaksi"><h4 class="mb-3">Tanggal Transaksi</h4></label>
                                                <input class="form-control datetimepicker" name="tanggal_transaksi" id="tanggalTransaksi" type="text" placeholder="dd/mm/yyyy hour : minute" data-options='{"enableTime":true,"dateFormat":"y-m-d H:i","disableMobile":true}' />
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
