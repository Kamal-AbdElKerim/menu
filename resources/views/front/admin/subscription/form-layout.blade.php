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
              @if (count($subscription) < 3)
              <div class="card-style mb-30">
                <h6 class="mb-25">Shipping Address</h6>
                <form action="{{ route('add_subscription') }}" method="post" >
                  @csrf
                  <div class="row">
                 
                    <div class="col-sm-6">
                      <div class="select-style-1">
                        <label>Plan</label>
                        <div class="select-position">
                          <select name="PlanName" class="light-bg">
                            @php
                                $excludeOptions = ['Free', 'Standard', 'Premium'];
                            @endphp
                            @foreach ($subscription as $item)
                                @php
                                    $excludeOptions = array_diff($excludeOptions, [$item->PlanName]);
                                @endphp
                            @endforeach
                            @foreach ($excludeOptions as $excludeOption)
                                <option value="{{ $excludeOption }}">{{ $excludeOption }}</option>
                            @endforeach
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
                            <option selected value="none">none</option>
                            <option  value="images">images</option>
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
                        <input name="NumMenuItemsAllowed" type="number" placeholder="00"  />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-style-1">
                        <label>Scans Allowed</label>
                        <input name="ScansAllowed" type="number" placeholder="00"  />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-style-1">
                        <label>Duration</label>
                        <input name="Duration" type="number" placeholder="00"  />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-style-1">
                        <label>Price</label>
                        <input name="Price" type="number" placeholder="00"  />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="input-style-1">
                        <label>Description</label>
                        <textarea name="Description" id="" cols="30" rows="5"></textarea>
                      </div>
                    </div>
                    <!-- end col -->
                 
                    <!-- end col -->
                    <div class="col-12">
                      <div class="button-group d-flex justify-content-center flex-wrap">
                        <button type="submit" class="main-btn primary-btn btn-hover m-2">
                          add subscription
                        </button>
                  
                      </div>
                    </div>
                  </div>
                  <!-- end row -->
                </form>
              </div>
              <!-- end card -->
              @endif
            </div>
            
            <div class="col-lg-6">
                @foreach ($subscription as $item)
                    
            
                <div class="card-style-5 mb-30">
                  <div class="card-image col-4 ">
                    <a href="#0">
                      <img src="assets/images/cards/card-style-5/card-2.jpg" alt="" />
                    </a>
                  </div>
                  <div class="card-content col-8">
                    <h4><a href="#0">{{ $item->PlanName }} </a></h4>
                    <p >Description :{{ $item->Description }}</p>
                    <p>NumMenuItemsAllowed :{{ $item->NumMenuItemsAllowed }} Items</p>
                    <p>MediaTypesAllowed : <span class="main-badge success-badge-light rounded-full">{{ $item->MediaTypesAllowed }}</span>                    </p>
                    <p>ScansAllowed :{{ $item->ScansAllowed }} fois</p>
                    <p>Duration :    <span class="main-badge secondary-badge-light rounded-full">{{ $item->Duration }} jour</span></p>
                    <p>Price :  <span class="main-badge dark-badge-light rounded-full">{{ $item->Price }} MAD</span></p>
                    
                
                      <a href="{{ route('form_Update_sub',$item->SubscriptionID ) }}" class="main-btn success-btn rounded-full btn-hover">Update</a>
                 
                    
                      {{-- <a href="{{ route('delete_sub',$item->SubscriptionID ) }}" class="main-btn danger-btn rounded-full btn-hover">Delete</a> --}}

                  </div>
                </div>
                @endforeach
          </div>
         
            <!-- end col -->
         
          <!-- end row -->
      
        <!-- ========== form-layout-wrapper end ========== -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->

@endsection