@extends('admin.layout.app')

@section('main')
<div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
    <div class="modal-dialog">
      <div class="modal-content mt-15 rounded-pill">
        <div class="modal-body p-0">
          <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
            <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched </h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
                      <div class="avatar avatar-l status-online  me-2 text-900">
                        <img class="rounded-circle " src="../../../assets/img/team/40x40/10.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                        <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
                      <div class="avatar avatar-l  me-2 text-900">
                        <img class="rounded-circle " src="../../../assets/img/team/40x40/12.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">John Smith</h6>
                        <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="text-center">
                  <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
    var navbarPosition = window.config.config.phoenixNavbarPosition;
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTop = document.querySelector('#navbarTop');
    var topNavSlim = document.querySelector('#topNavSlim');
    var navbarTopSlim = document.querySelector('#navbarTopSlim');
    var navbarCombo = document.querySelector('#navbarCombo');
    var navbarComboSlim = document.querySelector('#navbarComboSlim');
    var dualNav = document.querySelector('#dualNav');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');

    if (navbarPosition === 'dual-nav') {
      topNavSlim.remove();
      navbarTop.remove();
      navbarVertical.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarDefault.remove();
      dualNav.removeAttribute('style');
      documentElement.classList.add('dual-nav');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
      navbarDefault.remove();
      navbarTop.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      topNavSlim.style.display = 'block';
      navbarVertical.style.display = 'inline-block';
      body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
      navbarDefault.remove();
      navbarVertical.remove();
      navbarTop.remove();
      topNavSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarTopSlim.removeAttribute('style');
      body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
      navbarDefault.remove();
      //- navbarVertical.remove();
      navbarTop.remove();
      topNavSlim.remove();
      navbarCombo.remove();
      navbarTopSlim.remove();
      navbarComboSlim.removeAttribute('style');
      navbarVertical.removeAttribute('style');
      body.classList.add('nav-slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
      navbarDefault.remove();
      topNavSlim.remove();
      navbarVertical.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarTop.removeAttribute('style');
      documentElement.classList.add('navbar-horizontal');
    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
      topNavSlim.remove();
      navbarTop.remove();
      navbarTopSlim.remove();
      navbarDefault.remove();
      navbarComboSlim.remove();
      navbarCombo.removeAttribute('style');
      navbarVertical.removeAttribute('style');
      documentElement.classList.add('navbar-combo')

    } else {
      topNavSlim.remove();
      navbarTop.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarDefault.removeAttribute('style');
      navbarVertical.removeAttribute('style');
    }

    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
      navbarTop.classList.add('navbar-darker');
    }

    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
      navbarVertical.classList.add('navbar-darker');
    }
  </script>
  <div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
        <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
        <li class="breadcrumb-item active">Default</li>
      </ol>
    </nav>
    <div class="mb-9">
      <div class="row g-3 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Products</h2>
        </div>
      </div>
      <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>All </span><span class="text-700 fw-semi-bold">(68817)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Published </span><span class="text-700 fw-semi-bold">(70348)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Drafts </span><span class="text-700 fw-semi-bold">(17)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>On discount </span><span class="text-700 fw-semi-bold">(810)</span></a></li>
      </ul>
      <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
        <div class="mb-4">
          <div class="d-flex flex-wrap gap-3">
            <div class="search-box">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
            <div class="scrollbar overflow-hidden-y">
              <div class="btn-group position-static" role="group">
                <div class="btn-group position-static text-nowrap"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Category<span class="fas fa-angle-down ms-2"></span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group position-static text-nowrap"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Vendor<span class="fas fa-angle-down ms-2"></span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
              </div>
            </div>
            <a href="{{ route('batik.create') }}" class="btn btn-primary float-end">Add Product</a>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
          <div class="table-responsive scrollbar mx-n1 px-1">
            <table class="table fs--1 mb-0">
              <thead>
                <tr>
                  <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-products-select" type="checkbox" data-bulk-select='{"body":"products-table-body"}' /></div>
                  </th>
                  <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;"></th>
                  <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;" data-sort="product">PRODUCT NAME</th>
                  <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">PRICE</th>
                  <th class="sort align-middle ps-4" scope="col" data-sort="category" style="width:150px;">CATEGORY</th>
                  <th class="sort align-middle ps-3" scope="col" data-sort="tags" style="width:250px;">TAGS</th>
                  <th class="sort align-middle fs-0 text-center ps-4" scope="col" style="width:125px;"></th>
                  <th class="sort align-middle ps-4" scope="col" data-sort="vendor" style="width:200px;">VENDOR</th>
                  <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">PUBLISHED ON</th>
                  <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                </tr>
              </thead>
              <tbody class="list" id="products-table-body">
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands...","productImage":"/products/1.png","price":"$39","category":"Plants","tags":["Health","Exercise","Discipline","Lifestyle","Fitness"],"star":false,"vendor":"Blue Olive Plant sellers. Inc","publishedOn":"Nov 12, 10:45 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/1.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; ...</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$39</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Plants</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Health</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Exercise</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Discipline</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Lifestyle</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Fitness</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Blue Olive Plant sellers. Inc</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 12, 10:45 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"iPhone 13 pro max-Pacific Blue-128GB storage","productImage":"/products/2.png","price":"$87","category":"Furniture","tags":["Class","Camera","Discipline","invincible","Pro","Swag"],"star":true,"vendor":"Beatrice Furnitures","publishedOn":"Nov 11, 7:36 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/2.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$87</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Furniture</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Class</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Camera</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Discipline</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">invincible</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Pro</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Swag</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4"><span class="fas fa-star text-warning"></span></td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Beatrice Furnitures</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 11, 7:36 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple MacBook Pro 13 inch-M1-8/256GB-space","productImage":"/products/3.png","price":"$9","category":"Plants","tags":["Efficiency","Handy","Apple","Creativity","Gray"],"star":false,"vendor":"PlantPlanet","publishedOn":"Nov 11, 8:16 AM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/3.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$9</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Plants</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Efficiency</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Handy</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apple</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Creativity</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gray</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">PlantPlanet</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 11, 8:16 AM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple iMac 24\" 4K Retina Display M1 8 Core CPU...","productImage":"/products/4.png","price":"$8 - $58","category":"Toys","tags":["Color","Stunning","Retina","Green","PC killer"],"star":false,"vendor":"Kizzstore","publishedOn":"Nov 8, 6:39 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/4.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$8 - $58</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Toys</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Color</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Stunning</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Retina</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Green</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">PC killer</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Kizzstore</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 8, 6:39 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset","productImage":"/products/5.png","price":"$120","category":"Fashion","tags":["Music","Audio","Meeting","Record","Sound"],"star":false,"vendor":"Inertia Fashion","publishedOn":"Nov 8, 5:32 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/5.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$120</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Music</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Audio</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Meeting</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Record</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Sound</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Inertia Fashion</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 8, 5:32 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"PlayStation 5 DualSense Wireless Controller","productImage":"/products/6.png","price":"$239","category":"Gadgets","tags":["Game","Control","Nav","Playstation","Wireless"],"star":false,"vendor":"FutureTech Inc","publishedOn":"Nov 6, 11:34 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/6.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$239</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Gadgets</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Game</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Control</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Nav</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Playstation</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Wireless</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">FutureTech Inc</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 6, 11:34 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray","productImage":"/products/7.png","price":"$4","category":"Food","tags":["Ipad","Pro","Creativity","Thunderbolt","Space"],"star":false,"vendor":"Maimuna’s Bakery","publishedOn":"Nov 1, 7:45 AM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/7.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$4</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Food</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Ipad</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Pro</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Creativity</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Thunderbolt</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Space</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Maimuna’s Bakery</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 1, 7:45 AM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)","productImage":"/products/8.png","price":"$98","category":"Fashion","tags":["Keyboard","Smooth","Butter","RGB","Black"],"star":false,"vendor":"Green fashion","publishedOn":"Nov 3, 12:27 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/8.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$98</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Keyboard</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Smooth</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Butter</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">RGB</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Black</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Green fashion</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 3, 12:27 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple Magic Mouse (Wireless, Rechargable) - Silver","productImage":"/products/10.png","price":"$568","category":"Fashion","tags":["Apple","Wireless","Battery","Magic","Performance"],"star":false,"vendor":"Eastacy","publishedOn":"Nov 1, 9:39 AM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/10.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Silver</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$568</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apple</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Wireless</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Battery</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Magic</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Eastacy</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 1, 9:39 AM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"HORI Racing Wheel Apex for PlayStation 4_3, and PC","productImage":"/products/12.png","price":"$17","category":"Drinks","tags":["Steering","Gaming","PS4/3","Racing","Apex"],"star":false,"vendor":"BrewerBro","publishedOn":"Oct 30, 3:49 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/12.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$17</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Drinks</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Steering</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">PS4/3</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Racing</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">BrewerBro</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Oct 30, 3:49 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple Pencil (2nd Generation)","productImage":"/products/21.png","price":"$28","category":"Fashion","tags":["Apple","Creativity","Color","Stunning","Apex"],"star":false,"vendor":"Eastacy","publishedOn":"Nov 25, 5:00 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/21.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Apple Pencil (2nd Generation)</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$28</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apple</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Creativity</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Color</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Stunning</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Eastacy</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 25, 5:00 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Apple AirPods (2nd Generation)","productImage":"/products/16.png","price":"$20","category":"Fashion","tags":["Music","Audio","Meeting","Record","Sound"],"star":true,"vendor":"FutureTech Inc","publishedOn":"Sep 20, 1:00 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/16.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Apple AirPods (2nd Generation)</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$20</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Music</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Audio</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Meeting</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Record</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Sound</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4"><span class="fas fa-star text-warning"></span></td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">FutureTech Inc</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Sep 20, 1:00 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Xbox Series S","productImage":"/products/17.png","price":"$30","category":"Gadget","tags":["Lifestyle","Audio","Magic","Performance","Apex"],"star":false,"vendor":"FutureTech Inc","publishedOn":"Oct 18, 3:40 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/17.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Xbox Series S</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$30</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Gadget</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Lifestyle</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Audio</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Magic</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">FutureTech Inc</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Oct 18, 3:40 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Seagate Portable 2TB External Hard Drive Portable HDD","productImage":"/products/18.png","price":"$50","category":"Accessories","tags":["Portable","Gaming","Magic","Performance","Black"],"star":false,"vendor":"Kizzstore","publishedOn":"Sep 20, 1:00 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/18.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Seagate Portable 2TB External Hard Drive Portable HDD</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$50</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Accessories</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Portable</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Magic</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Black</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Kizzstore</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Sep 20, 1:00 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Intel Core i9-11900K Desktop Processor 8 Cores up to 5.3 GHz Unlocked","productImage":"/products/19.png","price":"$80","category":"Accessories","tags":["Intel","Gaming","Apex","Performance","Lifestyle"],"star":true,"vendor":"BrewerBro","publishedOn":"Dec 01, 12:00 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/19.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">Intel Core i9-11900K Desktop Processor 8 Cores up to 5.3 GHz Unlocked</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$80</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Accessories</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Intel</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Lifestyle</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4"><span class="fas fa-star text-warning"></span></td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">BrewerBro</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Dec 01, 12:00 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                    <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="position-static">
                  <td class="fs--1 align-middle">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"ASUS TUF Gaming F15 Gaming Laptop","productImage":"/products/20.png","price":"$150","category":"Computer","tags":["Gaming","Battery","Performance","Wireless"],"star":false,"vendor":"Kizzstore","publishedOn":"Dec 01, 12:00 PM"}' /></div>
                  </td>
                  <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="../../../assets/img/products/20.png" alt="" width="53" /></a></td>
                  <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html">ASUS TUF Gaming F15 Gaming Laptop</a></td>
                  <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$150</td>
                  <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Computer</td>
                  <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Battery</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Wireless</span></a></td>
                  <td class="align-middle review fs-0 text-center ps-4">
                    <div class="d-toggle-container">
                      <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                      <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                    </div>
                  </td>
                  <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Kizzstore</a></td>
                  <td class="time align-middle white-space-nowrap text-600 ps-4">Dec 01, 12:00 PM</td>
                  <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
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
          <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
              <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
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
  <div class="support-chat-container">
    <div class="container-fluid support-chat">
      <div class="card bg-white">
        <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
          <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs--3"></span></h5>
          <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
          </div>
        </div>
        <div class="card-body chat p-0">
          <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
            <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a><a class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a></div>
            <div class="text-center mt-auto">
              <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white" src="../../../assets/img/team/30.webp" alt="" /></div>
              <h5 class="mt-2 mb-3">Eric</h5>
              <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
            </div>
          </div>
        </div>
        <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
          <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs--1"></span></button>
        </div>
      </div>
    </div><button class="btn p-0 border border-200 btn-support-chat"><span class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span class="fa-solid fa-circle text-success fs--1 ms-2"></span><span class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
  </div>

@endsection
