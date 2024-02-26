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

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="{{ URL::asset('assets_menu/img/about.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>{{ $restaurant->Name }}.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Start time : {{ $restaurant->Hours }} PM.</li>
            <li><i class="bi bi-check-circle"></i> {{ $restaurant->Address }}.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

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
            @if($item->hasMedia('videos'))
            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
              <a href="{{ $item->getFirstMediaUrl('videos') }}" class="glightbox play-btn">Click to play video</a>
            </div>
            
            {{-- <video width="320" height="240" controls autoplay muted>
              <source src="{{ $item->getFirstMediaUrl('videos') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video> --}}
     
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