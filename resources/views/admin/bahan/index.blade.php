@extends('admin.layout.app')

@section('main')

@include('alert.sweetalert')
  <div class="content">
    <div class="mb-9">
      <div class="row g-3 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Products</h2>
        </div>
      </div>

      <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
        <div class="mb-4">
          <div class="d-flex flex-wrap gap-3">
            <div class="search-box">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <div class="ms-xxl-auto">
              <a href="{{ route('bahan.create') }}" class="btn btn-primary" id="addBtn">
                <span class="fas fa-plus me-2"></span>Add product
              </a>
            </div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
          <div class="table-responsive scrollbar mx-n1 px-1">
            <table class="table fs--1 mb-0">
              <thead>
                <tr>
                    <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">NO</th>
                    <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;">
                    </th>
                    <th class="text-center ps-4" scope="col" style="width:150px;">
                        MATERIAL NAME</th>
                    <th class="sort white-space-nowrap text-center ps-4" scope="col" style="width:50px;">PRICE</th>
                    <th class="sort white-space-nowrap text-center ps-4" scope="col" style="width:50px;">CREATED AT</th>
                    <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                </tr>
              </thead>
              <tbody class="list" id="products-table-body">
                @if ($bahan->isEmpty())
                <tr>
                    <td colspan="8" class="text-center py-4">
                        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px; height: auto;">
                            <img src="{{ asset('images/no-data-amico.svg') }}" alt="No data" style="width: 300px; height: auto; max-width: 100%;">
                            <h3 class="mt-3 mb-0">No material data available</h3>
                        </div>
                    </td>
                </tr>
                @endif
                @foreach ($bahan as $bahans)
                <tr class="position-static">
                    {{-- <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"
                                data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands...","productImage":"/products/1.png","price":"$39","category":"Plants","tags":["Health","Exercise","Discipline","Lifestyle","Fitness"],"star":false,"vendor":"Blue Olive Plant sellers. Inc","publishedOn":"Nov 12, 10:45 PM"}' />
                        </div>
                    </td> --}}
                    <td class="fs--1 align-middle fw-bold">{{ $loop->iteration }}</td>
                    <td class="align-middle white-space-nowrap py-0">
                        {{-- <a class="d-block border rounded-2"
                            href="../landing/product-details.html"><img src="../../../assets/img/products/1.png"
                                alt="" width="53" /></a> --}}
                    </td>
                    <td class="vendor align-middle white-space-nowrap fw-bold ps-4">{{ $bahans->nama_bahan }}</td>
                    <td class="price align-middle white-space-nowrap fw-bold ps-4">Rp {{ number_format($bahans->harga, 0, ',', '.') }}</td>
                    <td class="time align-middle white-space-nowrap text-600 ps-4">
                        {{ $bahans->created_at->format('d M Y') }}
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                        <div class="font-sans-serif btn-reveal-trigger position-static">
                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                <span class="fas fa-ellipsis-h fs--2"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end py-2">
                                <a class="dropdown-item" href="{{ route('bahan.edit', $bahans->id) }}">Edit</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('bahan.destroy', $bahans->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger hapus">Remove</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @if (!$bahan->isEmpty())
            <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p>
                    <a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    <a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex">
                    <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="mb-0 pagination"></ul>
                    <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
            </div>
        @endif
        </div>
      </div>
    </div>
    <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for trusting us, Rumah Kinasih!<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy; FryPen</p>
          </div>
        </div>
      </footer>
  </div>
@endsection
