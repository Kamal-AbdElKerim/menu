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
            <button type="button" class="main-btn btn-sm primary-btn btn-hover" data-bs-toggle="modal"
            data-bs-target="#ModalThree">
            add Item 
          </button>          </div>
            <div class="table-wrapper table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="lead-info">
                      <h6>image</h6>
                    </th>
                    <th class="lead-info">
                      <h6>Item Name</h6>
                    </th>
                    <th class="lead-email">
                      <h6>Description</h6>
                    </th>
                
                    <th class="lead-company">
                      <h6>Price</h6>
                    </th>
                    <th class="lead-company">
                      <h6>Menu</h6>
                    </th>
                    <th class="lead-company">
                      <h6>created_at</h6>
                    </th>
                    <th>
                      <h6>Action</h6>
                    </th>
                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>
                  @foreach ($items as $item)
                      
              
                  <tr>
                    <td class="min-width">
                      <div class="lead">
                        {{-- <div class="lead-image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div> --}}
                        <div class="lead-text">
                          <img src="{{ $item->getFirstMediaUrl('images') }}" alt="" width="100">
                        </div>
                      </div>
                    </td>
                    <td class="min-width">
                      <div class="lead">
                        {{-- <div class="lead-image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div> --}}
                        <div class="lead-text">
                          <p>{{ $item->ItemName }}</p>
                        </div>
                      </div>
                    </td>
                 
                   
                    <td class="min-width">
                      <p>{{ $item->Description }}</p>
                    </td>
                    <td class="min-width">
                      <p>{{ $item->Price }}</p>
                    </td>
                    <td class="min-width">
                      <p>{{ $item->menu->MenuName }}</p>
                    </td>
                    <td class="min-width">
                      <p><a href="#0">{{ $item->created_at->diffForHumans() }}</a></p>
                    </td>
                    <td>
                      <a href="#" class="main-btn btn-sm btn-hover" data-bs-toggle="modal" data-bs-target="#ModalThree1">
                        <i class="fa-solid fa-file-pen"></i>
                    </a>
                    
                    <a class="text-danger" href="{{ route('delete_item',$item->ItemID) }}"><i class="fa-solid fa-delete-left"></i></a>

                     
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
            <form action="{{ route('add_Item') }}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="content mb-30">
              <p class="text-sm">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Item Name</label>
                  <input type="text" name="ItemName" class="form-control" id="exampleFormControlInput1" placeholder="Item Name">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput2" class="form-label">Price</label>
                  <input type="number" name="Price" class="form-control" id="exampleFormControlInput2" placeholder="Item Name">
                </div>
                @php
                    $user = Auth()->user();
                  
                @endphp
                @if ($user->subscription->PlanName !== "Free")
                <div class="mb-3">
                  <label for="exampleFormControlInput23" class="form-label">image</label>
                  <input type="file" name="image" class="form-control" id="exampleFormControlInput23" >
                </div>
                @endif
                @if ($user->subscription->PlanName !== "Free")
                <div class="mb-3">
                  <label for="exampleFormControlInput23" class="form-label">image</label>
                  <input type="file" name="image" class="form-control" id="exampleFormControlInput23" >
                </div>
                @endif
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                  <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <select class="form-select" name="MenuID" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  @foreach ($menu as $item)
                  <option value="{{ $item->MenuID }}">{{ $item->MenuName }}</option>
                  @endforeach
               
                </select>
              </p>
            </div>
            <div class="action d-flex flex-wrap justify-content-end">
              <button data-bs-dismiss="modal" class="main-btn btn-sm danger-btn-outline btn-hover m-1">
                Cancel
              </button>
              <button type="submit" data-bs-dismiss="modal" class="main-btn btn-sm primary-btn btn-hover m-1">
                add Item
              </button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- ModalThree1 -->




   

    

@endsection