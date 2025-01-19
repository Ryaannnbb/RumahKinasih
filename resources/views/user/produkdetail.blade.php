<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:13:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Detail Produk</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo_kinasih.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo_kinasih.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo_kinasih.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo_kinasih.png') }}">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">
        <div class="container-small">
          <div class="ecommerce-topbar">
            <nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3">
                <a class="navbar-brand flex-1 flex-lg-grow-0">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('images/logo_kinasih.png') }}" alt="phoenix" width="40">
                    <p class="logo-text ms-2">Rumah Kinasih</p>
                  </div>
                </a>
                <div class="d-lg-none">
                  <div class="theme-control-toggle fa-icon-wait px-2">
                    <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm">
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left" title="Ganti tema">
                      <span class="icon" data-feather="moon"></span>
                    </label>
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left" title="Ganti tema">
                      <span class="icon" data-feather="sun"></span>
                    </label>
                  </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item border-bottom border-bottom-lg-0">
                      <a class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item border-bottom border-bottom-lg-0">
                      <a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="{{ url('/homepage') }}">Produk</a>
                    </li>
                    <li class="nav-item border-bottom border-bottom-lg-0">
                      <a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="https://www.rumahkinasih.org/berita">Blog</a>
                    </li>
                    <li class="nav-item border-bottom border-bottom-lg-0">
                      <a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="{{ route('login') }}">Login</a>
                    </li>
                  </ul>
                  <div class="d-grid d-lg-flex align-items-center">
                    <div class="nav-item d-flex align-items-center d-none d-lg-block pe-2">
                      <div class="theme-control-toggle fa-icon-wait px-2">
                        <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle">
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                          <span class="icon" data-feather="moon"></span>
                        </label>
                        <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme">
                          <span class="icon" data-feather="sun"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <div class="pt-5 pb-9">

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">
          <div class="container-small">
            <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
              <div class="col-12 col-lg-6">
                <div class="row g-3 mb-3">
                  <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                    <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100">
                      <div class="swiper swiper-container theme-slider" data-thumb-target="swiper-products-thumb" data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'>
                        <div class="swipper-wrapper">
                            <div class="swiper-slide">
                                <img class="w-100" src="{{ asset('storage/batik/' . $produk->gambar_produk) }}" alt="">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-lg-10">
                    <a href="https://api.whatsapp.com/send?phone=6282142776116&text=Halo%20saya%20tertarik%20dengan%20produk%20batik%20Anda." class="btn btn-lg btn-primary rounded-pill w-100 fs--1 fs-sm-0">
                        <span class="fas fa-shopping-cart me-2"></span>Pesan Sekarang
                    </a>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <h3 class="mb-3 lh-sm">{{ $produk->nama_produk }}</h3>
                    <div class="d-flex flex-wrap align-items-center">
                    <h1 class="me-3">Rp.&nbsp;{{ number_format($produk->harga, 0, ',', '.') }} </h1>
                      {{-- <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3">$1499.99</p>
                      <p class="text-warning-500 fw-bolder fs-2 mb-0">10% off</p> --}}
                    </div>
                    <p class="text-success fw-semi-bold fs-1 mb-2">Stok tersedia</p>
                    <p class="text-700">Harga yang ditawarkan sudah sangat bersaing, tapi kelebihan produk ini lebih dari sekadar angka. Lihat rincian lengkapnya untuk memahami kualitas dari bahan yang digunakan. Kami percaya, keputusan Anda akan lebih mudah dengan informasi yang transparan ini!</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">
          <div class="container-small">
            <ul class="nav nav-underline mb-4" id="productTab" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Deskripsi</a></li>
            </ul>
            <div class="row gx-3 gy-7">
              <div class="col-12 col-lg-7 col-xl-8">
                <div class="tab-content" id="productTabContent">
                  <div class="tab-pane pe-lg-6 pe-xl-12 fade show active text-1100" id="tab-description" role="tabpanel" aria-labelledby="description-tab">
                    <p class="mb-5">{{ $produk->deskripsi }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 mb-9">
        <div class="container">
          <div class="d-flex flex-between-center mb-3">
            <div>
              <h3>Produk Dengan Bahan Sama</h3>
            </div><a href="{{ route('homepage') }}" class="btn btn-sm btn-phoenix-primary">Lihat semua</a>
          </div>
          <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":16},"992":{"slidesPerView":4,"spaceBetween":16},"1200":{"slidesPerView":5,"spaceBetween":16},"1540":{"slidesPerView":6,"spaceBetween":16}}}'>
              <div class="swiper-wrapper">
                @foreach ($similar as $item)
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3">
                            <img class="img-fluid" src="{{ asset('storage/batik/' . $item->gambar_produk) }}" alt="" />
                        </div>
                        <a class="stretched-link" href="{{ route('homepage.show', $item->id) }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">{{ $item->nama_produk }}</h6>
                        </a>
                      </div>
                      <div>
                        <div class="d-flex align-items-center mb-1">
                          <h3 class="text-1100 mb-0">Rp {{ number_format($item->harga, 0, ',', '.') }}</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="swiper-nav">
              <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
              <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="footer-small bg-100 dark__bg-1100">
            <div class="container-small px-lg-7 px-xxl-3">
              <div class="row position-relative">
                <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0"><a href="#"><img class="mb-3" src="{{ asset('images/logo_kinasih.png') }}" height="80" alt="" /></a>
                  <h3>Rumah Kinasih</h3>
                  <p>Leave no one behind.</p>
                  <div class="social-icons mt-3">
                    <a href="https://www.instagram.com/rumah_kinasih/" class="me-2">
                      <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#000000"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#000000"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#000000"></path> </g></svg>
                    </a>
                    <a href="https://www.facebook.com/pages/Rumah%20Kinasih,%20Kesamben,%20Blitar/106050204734170/" class="me-2">
                      <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H15V13.9999H17.0762C17.5066 13.9999 17.8887 13.7245 18.0249 13.3161L18.4679 11.9871C18.6298 11.5014 18.2683 10.9999 17.7564 10.9999H15V8.99992C15 8.49992 15.5 7.99992 16 7.99992H18C18.5523 7.99992 19 7.5522 19 6.99992V6.31393C19 5.99091 18.7937 5.7013 18.4813 5.61887C17.1705 5.27295 16 5.27295 16 5.27295C13.5 5.27295 12 6.99992 12 8.49992V10.9999H10C9.44772 10.9999 9 11.4476 9 11.9999V12.9999C9 13.5522 9.44771 13.9999 10 13.9999H12V21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z" fill="#0F0F0F"></path> </g></svg>
                    </a>
                    <a href="https://wa.me/6285714410804" class="me-2">
                      <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.014 8.00613C6.12827 7.1024 7.30277 5.87414 8.23488 6.01043L8.23339 6.00894C9.14051 6.18132 9.85859 7.74261 10.2635 8.44465C10.5504 8.95402 10.3641 9.4701 10.0965 9.68787C9.7355 9.97883 9.17099 10.3803 9.28943 10.7834C9.5 11.5 12 14 13.2296 14.7107C13.695 14.9797 14.0325 14.2702 14.3207 13.9067C14.5301 13.6271 15.0466 13.46 15.5548 13.736C16.3138 14.178 17.0288 14.6917 17.69 15.27C18.0202 15.546 18.0977 15.9539 17.8689 16.385C17.4659 17.1443 16.3003 18.1456 15.4542 17.9421C13.9764 17.5868 8 15.27 6.08033 8.55801C5.97237 8.24048 5.99955 8.12044 6.014 8.00613Z" fill="#0F0F0F"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 23C10.7764 23 10.0994 22.8687 9 22.5L6.89443 23.5528C5.56462 24.2177 4 23.2507 4 21.7639V19.5C1.84655 17.492 1 15.1767 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23ZM6 18.6303L5.36395 18.0372C3.69087 16.4772 3 14.7331 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C11.0143 21 10.552 20.911 9.63595 20.6038L8.84847 20.3397L6 21.7639V18.6303Z" fill="#0F0F0F"></path> </g></svg>
                    </a>
                    <a href="#" class="me-2">
                      <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.49614 7.13176C9.18664 6.9549 8.80639 6.95617 8.49807 7.13509C8.18976 7.31401 8 7.64353 8 8V16C8 16.3565 8.18976 16.686 8.49807 16.8649C8.80639 17.0438 9.18664 17.0451 9.49614 16.8682L16.4961 12.8682C16.8077 12.6902 17 12.3589 17 12C17 11.6411 16.8077 11.3098 16.4961 11.1318L9.49614 7.13176ZM13.9844 12L10 14.2768V9.72318L13.9844 12Z" fill="#0F0F0F"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0 8.25027 0 6.3754 0.954915 5.06107C1.26331 4.6366 1.6366 4.26331 2.06107 3.95491C3.3754 3 5.25027 3 9 3H15C18.7497 3 20.6246 3 21.9389 3.95491C22.3634 4.26331 22.7367 4.6366 23.0451 5.06107C24 6.3754 24 8.25027 24 12C24 15.7497 24 17.6246 23.0451 18.9389C22.7367 19.3634 22.3634 19.7367 21.9389 20.0451C20.6246 21 18.7497 21 15 21H9C5.25027 21 3.3754 21 2.06107 20.0451C1.6366 19.7367 1.26331 19.3634 0.954915 18.9389C0 17.6246 0 15.7497 0 12ZM9 5H15C16.9194 5 18.1983 5.00275 19.1673 5.10773C20.0989 5.20866 20.504 5.38448 20.7634 5.57295C21.018 5.75799 21.242 5.98196 21.4271 6.23664C21.6155 6.49605 21.7913 6.90113 21.8923 7.83269C21.9973 8.80167 22 10.0806 22 12C22 13.9194 21.9973 15.1983 21.8923 16.1673C21.7913 17.0989 21.6155 17.504 21.4271 17.7634C21.242 18.018 21.018 18.242 20.7634 18.4271C20.504 18.6155 20.0989 18.7913 19.1673 18.8923C18.1983 18.9973 16.9194 19 15 19H9C7.08058 19 5.80167 18.9973 4.83269 18.8923C3.90113 18.7913 3.49605 18.6155 3.23664 18.4271C2.98196 18.242 2.75799 18.018 2.57295 17.7634C2.38448 17.504 2.20866 17.0989 2.10773 16.1673C2.00275 15.1983 2 13.9194 2 12C2 10.0806 2.00275 8.80167 2.10773 7.83269C2.20866 6.90113 2.38448 6.49605 2.57295 6.23664C2.75799 5.98196 2.98196 5.75799 3.23664 5.57295C3.49605 5.38448 3.90113 5.20866 4.83269 5.10773C5.80167 5.00275 7.08058 5 9 5Z" fill="#0F0F0F"></path> </g></svg>
                    </a>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="row justify-content-between">
                    <div class="col-6">
                      <div class="border-dashed border-start border-primary-300 ps-3">
                        <h5 class="fw-bolder mb-2">Contact</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="mb-1"><a>E-mail : rumahkinasihmandiri@gmail.com</a></li>
                          <li class="mb-1"><a>Whatsapp : +62 857-1441-0804</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="border-dashed border-start border-primary-300 ps-3" style="--phoenix-border-opacity: .2;">
                        <h5 class="lh-lg fw-bold mb-2">Info</h5>
                        <ul class="list-unstyled mb-md-2">
                          <li class="mb-1"><a class="hover-text-100 " href="https://www.rumahkinasih.org/profil/visi-dan-misi">Visi & Misi</a></li>
                          <li class="mb-1"><a class="hover-text-100" href="https://www.rumahkinasih.org/profil/tentang-kami">Tentang Kami</a></li>
                          <li class="mb-1"><a class="hover-text-100" href="https://www.rumahkinasih.org/profil/tim-kami">Tim Kami</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- <section> close ============================-->
      <!-- ============================================-->
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/rater-js/index.js') }}"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:14:07 GMT -->
</html>
