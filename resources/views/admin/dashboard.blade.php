@extends('admin.layout.app')

@section('main')
@include('alert.sweetalert')
  <div class="content">
    <div class="pb-5">
      <div class="row g-4">
        <div class="col-12 col-xxl-6">
          <div class="mb-8">
            <h2 class="mb-2">Rumah Kinasih Dashboard</h2>
            <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
          </div>
          <div class="row align-items-center g-4">
            <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x text-success-300" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-success-100" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-star text-success " data-fa-transform="shrink-2 up-8 right-6"></span></span>
                <div class="ms-3">
                  <h4 class="mb-0">{{ $batik->count() }} available batik</h4>
                  @if($batik->count() > 0)
                      <p class="text-800 fs--1 mb-0">Awaiting processing</p>
                  @else
                      <p class="text-800 fs--1 mb-0">No batik available</p>
                  @endif
                </div>
              </div>
            </div>
            <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x text-warning-300" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-warning-100" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-pause text-warning " data-fa-transform="shrink-2 up-8 right-6"></span></span>
                <div class="ms-3">
                <h4 class="mb-0">{{ $adminlist->count() }} available admins</h4>
                @if($adminlist->count() > 0)
                    <p class="text-800 fs--1 mb-0">On hold</p>
                @else
                    <p class="text-800 fs--1 mb-0">No admins available</p>
                @endif
                </div>
              </div>
            </div>
            <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x text-danger-300" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-danger-100" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-xmark text-danger " data-fa-transform="shrink-2 up-8 right-6"></span></span>
                <div class="ms-3">
                  <h4 class="mb-0">{{ $approval->count() }}</h4>
                @if($approval->count() > 0)
                    <p class="text-800 fs--1 mb-0">There are requests</p>
                @else
                    <p class="text-800 fs--1 mb-0">No requests</p>
                @endif
                </div>
              </div>
            </div>
          </div>
          <hr class="bg-200 mb-6 mt-4" />
        </div>
      </div>
    </div>
    <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 border-y border-300">
      <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
        <div class="row align-items-end justify-content-between pb-5 g-3">
          <div class="col-auto">
            <h3>Latest reviews</h3>
            <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
          </div>
          <div class="col-12 col-md-auto">
            <div class="row g-2 gy-3">
              <div class="col-auto flex-1">
                <div class="search-box">
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
              </div>
              <div class="col-auto">
                <button class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100 me-2" type="button">All products</button>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive mx-n1 px-1 scrollbar">
          <table class="table fs--1 mb-0 border-top border-200">
            <thead>
              <tr>
                <th class="white-space-nowrap fs--1 ps-0 align-middle">
                  <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-reviews-select" type="checkbox" data-bulk-select='{"body":"table-latest-review-body"}' /></div>
                </th>
                <th class="sort white-space-nowrap align-middle" scope="col"></th>
                <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">PRODUCT</th>
                <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:200px;">CUSTOMER</th>
                <th class="sort align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                <th class="sort align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                <th class="sort text-start ps-5 align-middle" scope="col" data-sort="status">STATUS</th>
                <th class="sort text-end align-middle" scope="col" data-sort="time">TIME</th>
                <th class="sort text-end pe-0 align-middle" scope="col"></th>
              </tr>
            </thead>
            <tbody class="list" id="table-latest-review-body">
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                <td class="fs--1 align-middle ps-0">
                  <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands)","productImage":"/products/60x60/1.png","customer":{"name":"Richard Dawkins","avatar":""},"rating":5,"review":"This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.","status":{"title":"Approved","badge":"success","icon":"check"},"time":"Just now"}' /></div>
                </td>
                <td class="align-middle product white-space-nowrap py-0"><a class="d-block rounded-2 border" href="apps/e-commerce/landing/product-details.html"><img src="assets/img/products/60x60/1.png" alt="" width="53" /></a></td>
                <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools fo...</a></td>
                <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center text-900" href="apps/e-commerce/landing/profile.html">
                    <div class="avatar avatar-l">
                      <div class="avatar-name rounded-circle"><span>R</span></div>
                    </div>
                    <h6 class="mb-0 ms-3 text-900">Richard Dawkins</h6>
                  </a></td>
                <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                <td class="align-middle review" style="min-width:350px;">
                  <p class="fs--1 fw-semi-bold text-1000 mb-0">This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.</p>
                </td>
                <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                <td class="align-middle text-end time white-space-nowrap">
                  <div class="hover-hide">
                    <h6 class="text-1000 mb-0">Just now</h6>
                  </div>
                </td>
                <td class="align-middle white-space-nowrap text-end pe-0">
                  <div class="position-relative">
                    <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row align-items-center py-1">
          <div class="pagination d-none"></div>
          <div class="col d-flex fs--1">
            <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less</a>
          </div>
          <div class="col-auto d-flex">
            <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button><button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v1.13.0</p>
        </div>
      </div>
    </footer>
  </div>
@endsection
