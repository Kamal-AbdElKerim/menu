@extends('front.layouts.master')



@section('content')


    <!-- ========== tab components start ========== -->
    <section class="tab-components">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title">
                <h2>Form Layout</h2>
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
                    <li class="breadcrumb-item"><a href="#0">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Form Layout
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

        <!-- ========== form-layout-wrapper start ========== -->
    
            
      
        <div class="form-layout-wrapper">
          <div class="row">
            <div class="col-lg-6">
              <div class="card-style mb-30">
                <h6 class="mb-25">Shipping Address</h6>
                <form action="{{ route('Update_subscription',$subscription->SubscriptionID) }}" method="post" >
                  @csrf
                  <div class="row">
                 
                    <div class="col-sm-6">
                      <div class="select-style-1">
                        <label>Plan</label>
                        <div class="select-position">
                          <select name="PlanName" class="light-bg">
                        
                      
                                <option selected value="{{ $subscription->PlanName }}">{{ $subscription->PlanName }}</option>
                       
                        </select>
                        
                        </div>
                      </div>
                      <!-- end select -->
                    </div>
                    <div class="col-sm-6">
                      <div class="select-style-1">
                        <label>Media Types Allowed</label>
                        <div class="select-position">
                          <select name="MediaTypesAllowed" class="light-bg">
                            <option selected value="images">images</option>
                            <option value="videos">vidéos</option>
                            <option value="all">images + vidéos</option>
                            {{-- <option value="">Alaska</option> --}}
                          </select>
                        </div>
                      </div>
                      <!-- end select -->
                    </div>
                    <!-- end col -->
                 
                    <div class="col-sm-6">
                      <div class="input-style-1">
                        <label>Num Menu Items Allowed</label>
                        <input name="NumMenuItemsAllowed" type="number" placeholder="00" value="{{ $subscription->NumMenuItemsAllowed }}" />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-style-1">
                        <label>Scans Allowed</label>
                        <input name="ScansAllowed" type="number" placeholder="00" value="{{ $subscription->ScansAllowed }}"  />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-style-1">
                        <label>Duration</label>
                        <input name="Duration" type="number" placeholder="00" value="{{ $subscription->Duration }}" />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-style-1">
                        <label>Price</label>
                        <input name="Price" type="number" placeholder="00" value="{{ $subscription->Price }}" />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-style-1">
                        <label>Description</label>
                        <textarea name="Description" id="" cols="30" rows="5">{{ $subscription->Description }}</textarea>
                      </div>
                    </div>
                    <!-- end col -->
                 
                    <!-- end col -->
                    <div class="col-12">
                      <div class="button-group d-flex justify-content-center flex-wrap">
                        <button type="submit" class="main-btn primary-btn btn-hover m-2">
                          Update subscription
                        </button>
                  
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                </form>
              </div>
              <!-- end card -->
        
            </div>
            
       
         
            <!-- end col -->
         
          <!-- end row -->
      
        <!-- ========== form-layout-wrapper end ========== -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->

@endsection