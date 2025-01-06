<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:13:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
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
            @include('layout.user.navbar-profil')
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      @include('layout.user.navbar-regular')
      <div class="ecommerce-homepage pt-5 mb-9">
        @yield('main')
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 dark__bg-1100 py-9">
        <div class="container-small">
          <div class="row justify-content-between gy-4">
            <div class="col-12 col-lg-4">
              <div class="d-flex align-items-center mb-3"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2">phoenix</p>
              </div>
              <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">Phoenix is an admin dashboard template with fascinating features and amazing layout. The template is responsive to all major browsers and is compatible with all available devices and screen sizes.</p>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">About Phoenix</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Affiliate Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Stay Connected</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Blogs</a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-facebook-square text-primary me-2 fs-0"></span><span class="text-800">Facebook</span></a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-twitter-square text-info me-2 fs-0"></span><span class="text-800">Twitter</span></a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Customer Service</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Help Desk</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Support, 24/7</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Community of Phoenix</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Payment Method</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Cash on Delivery</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Online Payment</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">PayPal</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Installment</a></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <footer class="footer position-relative">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v1.13.0</p>
          </div>
        </div>
      </footer>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:13:56 GMT -->
</html>
