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
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x text-primary-300" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-primary-100" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-user text-primary " data-fa-transform="shrink-2 up-8 right-6"></span></span>
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
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x text-success-300" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-success-100" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-check text-success " data-fa-transform="shrink-2 up-8 right-6"></span></span>
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
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><span class="fa-solid fa-square fa-stack-2x text-warning-300" data-fa-transform="down-4 rotate--10 left-4"></span><span class="fa-solid fa-circle fa-stack-2x stack-circle text-warning-100" data-fa-transform="up-4 right-3 grow-2"></span><span class="fa-stack-1x fa-solid fa-pause text-warning " data-fa-transform="shrink-2 up-8 right-6"></span></span>
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
            <h3>List Login</h3>
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
                <a href="{{ route('adminlist') }}" class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100 me-2" type="button">Admin List</a>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive mx-n1 px-1 scrollbar">
          <table class="table fs--1 mb-0 border-top border-200">
            <thead>
              <tr>
                <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">NO</th>
                <th class="white-space-nowrap align-middle" scope="col">EMAIL ADDRESS</th>
                <th class="white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">NAME</th>
                <th class="align-middle" scope="col" data-sort="rating" style="min-width:110px;">ROLE</th>
                <th class="align-middle" scope="col" data-sort="customer" style="min-width:200px;">CREATED AT</th>
                <th class="text-end pe-0 align-middle" scope="col"></th>
              </tr>
            </thead>
            <tbody class="list" id="table-latest-review-body">
                @foreach ($userlist as $item)
                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="price align-middle fw-bold text-1000">
                        {{ $loop->iteration }}
                    </td>
                    <td class="align-middle product white-space-nowrap">{{ $item->email }}</td>
                    <td class="align-middle product white-space-nowrap">{{ $item->name }}</td>
                    <td class="align-middle text-start ps-5 status">
                        @if($item->role == 'admin')
                            <span class="badge badge-phoenix fs--2 badge-phoenix-success">
                                <span class="badge-label">{{ $item->role }}</span>
                                <span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span>
                            </span>
                        @elseif($item->role == 'waiting')
                            <span class="badge badge-phoenix fs--2 badge-phoenix-warning">
                                <span class="badge-label">{{ $item->role }}</span>
                                <span class="ms-1" data-feather="pause" style="height:12.8px;width:12.8px;"></span>
                            </span>
                        @elseif($item->role == 'user')
                            <span class="badge badge-phoenix fs--2 badge-phoenix-primary">
                                <span class="badge-label">{{ $item->role }}</span>
                                <span class="ms-1" data-feather="user" style="height:12.8px;width:12.8px;"></span>
                            </span>
                        @endif
                    </td>
                    <td class="time align-middle white-space-nowrap text-600 ps-4">
                        {{ $item->created_at->format('d M Y') }}
                    </td>
                </tr>
                @endforeach
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
          <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for trusting us, Rumah Kinasih!<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy; FryPen</p>
        </div>
      </div>
    </footer>
  </div>
@endsection
