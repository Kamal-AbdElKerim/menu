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

    <!-- ========== tables-wrapper start ========== -->
    <div class="tables-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-style mb-30">
          <div class=" d-flex  justify-content-between ">
            <h6 class="mb-10">Data Table</h6>
            <button type="button" class="main-btn btn-sm primary-btn btn-hover" data-bs-toggle="modal"
            data-bs-target="#ModalThree">
            add menu
          </button>          </div>
            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="lead-info">
                      <h6>Lead</h6>
                    </th>
                    <th class="lead-email">
                      <h6>Email</h6>
                    </th>
                
                    <th class="lead-company">
                      <h6>Restaurant</h6>
                    </th>
                    <th>
                      <h6>Action</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  @foreach ($Menus as $item)
                      
              
                  <tr>
                    <td class="min-width">
                      <div class="lead">
                        {{-- <div class="lead-image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div> --}}
                        <div class="lead-text">
                          <p>{{ $item->MenuName }}</p>
                        </div>
                      </div>
                    </td>
                    <td class="min-width">
                      <p><a href="#0">{{ $item->created_at->diffForHumans() }}</a></p>
                    </td>
                   
                    <td class="min-width">
                      <p>{{ $item->Name }}</p>
                    </td>
                    <td>
                      <div class="action">
                      <a class="me-5"  href="{{ route('afficher_menu',$item->MenuID) }}" target="_blank"><i class="fa-regular fa-share-from-square"></i></a>
                        <a class="text-danger" href="{{ route('delete_menu',$item->MenuID) }}"><i class="lni lni-trash-can"></i></a>
                      </div>
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
  <!-- ModalTwo start -->
  <div class="warning-modal">
    <div class="modal fade" id="ModalTwo" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content card-style warning-card text-center">
          <div class="modal-body">
            <div class="icon text-danger mb-20">
              <i class="lni lni-warning"></i>
            </div>
            <div class="content mb-30">
              <h2 class="mb-15">Warning!</h2>
              <p class="text-sm text-medium">
                An error has occurred while operating an error report
              </p>
            </div>
            <div class="action d-flex flex-wrap justify-content-center">
              <button data-bs-dismiss="modal" class="main-btn btn-sm danger-btn rounded-full btn-hover m-1">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ModalTwo End -->

  <!-- ModalThree start -->
  <div class="warning-modal">
    <div class="modal fade" id="ModalThree" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content card-style">
          <div class="modal-header px-0 border-0">
            <h5 class="text-bold">New message</h5>
            <button class="border-0 bg-transparent h1" data-bs-dismiss="modal">
              <i class="lni lni-cross-circle"></i>
            </button>
          </div>
          <div class="modal-body px-0">
            <div class="content mb-30">
              <p class="text-sm">
                <form action="{{ route('add_Menu') }}" method="post">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Menu Name</label>
                    <input type="text" name="MenuName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
              </p>
            </div>
            <div class="action d-flex flex-wrap justify-content-end">
              <button data-bs-dismiss="modal" class="main-btn btn-sm danger-btn-outline btn-hover m-1">
                Cancel
              </button>
              <button type="submit" data-bs-dismiss="modal" class="main-btn btn-sm primary-btn btn-hover m-1">
                add Menu
              </button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ModalThree End -->


   

    

@endsection