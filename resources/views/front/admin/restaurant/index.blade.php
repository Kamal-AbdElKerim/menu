@extends('front.layouts.master')



@section('content')

<section class="table-components">
  <div class="container-fluid">
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>
    
    <div class="mb-3">
      <label for="basic-url" class="form-label">Your vanity URL</label>
      <div class="input-group">
        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
      </div>
      <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>
    
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
      <span class="input-group-text">@</span>
      <input type="text" class="form-control" placeholder="Server" aria-label="Server">
    </div>
    
    <div class="input-group">
      <span class="input-group-text">With textarea</span>
      <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
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