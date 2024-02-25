<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('assets_menu/img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('assets_menu/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets_menu/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_menu/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_menu/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_menu/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_menu/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_menu/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets_menu/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets_menu/css/style.css') }}" rel="stylesheet">



</head>

<body>





  <main id="main">

 

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our {{ $Menu->MenuName }} Menu</p>
        </div>

        {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div> --}} 

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($items as $item)
                
           
          <div class="col-lg-6 menu-item filter-starters">
            @if ($item->getFirstMediaUrl('images'))
            <img src="{{ $item->getFirstMediaUrl('images') }}" class="menu-img" alt="">
            @else
            <img src="{{ URL::asset('assets_menu/img/menu/lobster-bisque.jpg') }}" class="menu-img" alt="">

            @endif
            <div class="menu-content">
              <a href="#">{{ $item->ItemName }}</a><span>{{ $item->Price }} MAD</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>
          @endforeach
       

        </div>

      </div>
    </section><!-- End Menu Section -->

  

  

  




  </main><!-- End #main -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets_menu/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets_menu/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets_menu/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets_menu/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets_menu/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ URL::asset('assets_menu/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets_menu/js/main.js') }}"></script>


</body>

</html>