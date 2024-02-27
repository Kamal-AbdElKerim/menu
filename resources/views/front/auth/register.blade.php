
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
  <title>Sign Up | PlainAdmin Demo</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/lineicons.css" />
  <link rel="stylesheet" href="assets/css/quill/bubble.css" />
  <link rel="stylesheet" href="assets/css/quill/snow.css" />
  <link rel="stylesheet" href="assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="assets/css/morris.css" />
  <link rel="stylesheet" href="assets/css/datatable.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!-- ======== Preloader =========== -->
  <div id="preloader">
    <div class="spinner"></div>
  </div>
  <!-- ======== Preloader =========== -->

  <main class="">


    <!-- ========== signin-section start ========== -->
    <section class="signin-section">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
      
        <!-- ========== title-wrapper end ========== -->

        <div class="row g-0 auth-row">
          <div class="col-lg-6">
            <div class="auth-cover-wrapper bg-primary-100">
              <div class="auth-cover">
                <div class="title text-center">
                  <h1 class="text-primary mb-10">Get Started</h1>
                  <p class="text-medium">
                    Start creating the best possible user experience
                    <br class="d-sm-block" />
                    for you customers.
                  </p>
                </div>
                <div class="cover-image">
                  <img src="assets/images/auth/signin-image.svg" alt="" />
                </div>
                <div class="shape-image">
                  <img src="assets/images/auth/shape.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
          <!-- end col -->
          <div class="col-lg-6">
            <div class="signup-wrapper">
              <div class="form-wrapper">
                <h6 class="mb-15">Sign Up Form</h6>
                <p class="text-sm mb-25">
                  Start creating the best possible user experience for you
                  customers.
                </p>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" />
                      </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                      </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Password</label>
                        <input type="password" placeholder="Password"  name="password" />
                      </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Password Confirmation</label>
                        <input type="password" placeholder="Password"   name="password_confirmation"/>
                      </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                      <div class="form-check checkbox-style mb-30">
                        <input class="form-check-input" type="checkbox" value="" id="checkbox-not-robot" />
                        <label class="form-check-label" for="checkbox-not-robot">
                          I'm not robot</label>
                      </div>
                    </div>
                    <!-- end col -->
                    <div class="col-12">
                      <div class="button-group d-flex justify-content-center flex-wrap">
                        <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                          Sign Up
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
              
                <div class="singup-option pt-40">
                  <p class="text-sm text-medium text-center text-gray">
                    Easy Sign Up With
                  </p>
                  <div class="button-group pt-40 pb-40 d-flex justify-content-center flex-wrap">
                    <button class="main-btn primary-btn-outline m-2">
                      <i class="lni lni-facebook-fill mr-10"></i>
                      Facebook
                    </button>
                
                    {{-- <a href="{{ route('auth.google') }}" class="main-btn danger-btn-outline m-2"><i class="lni lni-google mr-10"></i> Login with Google </a> --}}
                    <a href="/auth/google/redirect" class="main-btn danger-btn-outline m-2"><i class="lni lni-google mr-10"></i> Login with Google </a>
              
                  </div>
                  <p class="text-sm text-medium text-dark text-center">
                    Already have an account? <a href="{{ route('login') }}">Sign In</a>
                  </p>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
    </section>
    <!-- ========== signin-section end ========== -->

  
    <!-- ========== footer end =========== -->
  </main>
  <!-- ======== main-wrapper end =========== -->

 


  </div>
  <!-- ============ Theme Option End ============= -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/apexcharts.min.js"></script>
  <script src="assets/js/dynamic-pie-chart.js"></script>
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/fullcalendar.js"></script>
  <script src="assets/js/jvectormap.min.js"></script>
  <script src="assets/js/world-merc.js"></script>
  <script src="assets/js/polyfill.js"></script>
  <script src="assets/js/quill.min.js"></script>
  <script src="assets/js/datatable.js"></script>
  <script src="assets/js/Sortable.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>