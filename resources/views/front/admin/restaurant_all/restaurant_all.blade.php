@extends('front.layouts.master')



@section('content')

<section class="table-components">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title">
            <h2>Tables</h2>
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
                  Tables
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    @if (session()->has('upgrade_message'))
    <div class="alert  alert-warning ">
        {{ session('upgrade_message') }}
    </div>
@endif
    <!-- ========== tables-wrapper start ========== -->
    <div class="tables-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-style mb-30">
          <div class=" d-flex  justify-content-between ">
            <h6 class="mb-10">Data Table</h6>
                </div>
            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="lead-info">
                      <h6>Name</h6>
                    </th>
                    <th class="lead-info">
                      <h6>Address</h6>
                    </th>
                    <th class="lead-info">
                      <h6>Hours</h6>
                    </th>
                    <th class="lead-email">
                      <h6>created_at</h6>
                    </th>
                
                  
                    <th>
                      <h6>Action</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  @foreach ($restaurants as $item)
                                     
               
                    <td class="min-width">
                      <div class="lead">
                        {{-- <div class="lead-image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div> --}}
                        <div class="lead-text">
                          <p>{{ $item->Name }}</p>
                        </div>
                      </div>
                    </td>
                 
                   
                    <td class="min-width">
                      <p>{{ $item->Address }}</p>
                    </td>
                    <td class="min-width">
                      <p>{{ $item->Hours }}</p>
                    </td>
                   
                    <td class="min-width">
                      <p><a href="#0">{{ $item->created_at->diffForHumans() }}</a></p>
                    </td>
                    <td>
                      {{-- <a href="#" class="main-btn btn-sm btn-hover" data-bs-toggle="modal" data-bs-target="#ModalThree1">
                        <i class="fa-solid fa-file-pen"></i>
                    </a> --}}
                    
                    {{-- <a class="text-danger" href="{{ route('delete_item',$item->RestaurantID) }}"><i class="fa-solid fa-delete-left"></i></a> --}}
                    <a class="text-danger" href="#"><i class="fa-solid fa-delete-left"></i></a>

                     
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- end table -->
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->

      <!-- end row -->
    </div>
    <!-- ========== tables-wrapper end ========== -->
  </div>
  <!-- end container -->
</section>
<!-- ========== table components end ========== -->







   

    

@endsection