@extends('front.layouts.master')



@section('content')


<section class="table-components">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title">
            <h2>QR</h2>
          </div>
        </div>
        <!-- end col -->
        <div class="col-md-6">
          <div class="breadcrumb-wrapper">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#0">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  QR
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>

   

        <div class="row">
            <div class="col-12">
              <div class="title mt-30 mb-30">
                <h2>QR Code</h2>
              </div>
            </div>
            @foreach ($menus as $menu)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="card-style-4 mb-30">
                    <div class="card-meta d-flex  justify-content-center ">
                        <a href="#0">
                            {!! QrCode::size(200)->generate("http://127.0.0.1:8000/afficher_menu/$menu->MenuID") !!}
                        </a>
                        
                    </div>
                    
                    <div class="card-content  d-flex  justify-content-between  mt-4">
                      <h4><a href="#0">{{ $menu->MenuName }}</a></h4>
                      <a class="me-5"  href="{{ route('afficher_menu',$menu->MenuID) }}" target="_blank"><i class="fa-regular fa-share-from-square"></i></a>

              
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <a href="{{ route('generate.pdf') }}" target="_blank">Generate PDF</a> --}}

          </div>
          <!-- end row -->
          <!-- ========= card-style-5 end ========= -->
      
        <!-- ========== QR Code-styles end ========== -->
      </div>
      <!-- end container -->
    </div>
  </div>
  <!-- end container -->
</section>
<!-- ========== table components end ========== -->






   

    

@endsection