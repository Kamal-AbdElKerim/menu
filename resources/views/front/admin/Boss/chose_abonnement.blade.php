@extends('front.layouts.master')



@section('content')

<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title">
            <h2>Pricing</h2>
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
                <li class="breadcrumb-item">
                  <a href="#0">Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Pricing
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
    <!-- Monthly Pricing section start -->
    <div class="monthly-pricing-section mb-60">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h1 class="mb-20">
              We Have Monthly & Yearly Subscription Plan
            </h1>
            <p class="text-sm">
              We have plans and prices that fit your business perfectly.
              Make your client site a success with our products.
            </p>
          </div>
        </div>
      </div>
      <div class="row g-0 align-items-center justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-10">
          <div class="single-pricing">
            <div class="pricing-header">
             
              <h3>{{ $Free->PlanName }}</h3>
              <div class="price">
                <h1 class="text-primary">
                  {{ $Free->Price }}MAD <span class="text-sm text-regular">Monthly</span>
                </h1>
              </div>
            </div>
            <div class="pricing-body">
              <ul>
              
                <p>Description</p>
                <li class=" text-danger ">{{ $Free->Description }}</li>
                <p>Num Menu Items Allowed</p>
                <li class=" text-danger ">{{ $Free->NumMenuItemsAllowed }}</li>
                <p>Media Types Allowed</p>
                <li class=" text-danger ">{{ $Free->MediaTypesAllowed }}</li>
                <p>Scans Allowed</p>
                <li class=" text-danger ">{{ $Free->ScansAllowed }}</li>
                <p>Duration</p>
                <li class=" text-danger ">{{ $Free->Duration }}</li>
             
               
            
              </ul>
            </div>
            <div class="pricing-footer">
              @if ($user->sub_id !== $Free->SubscriptionID)

              <a href="#0" class="main-btn primary-btn-outline btn-sm btn-hover">Buy Now</a>
              @else
              {{-- <a href="#" class="main-btn primary-btn-outline btn-sm btn-hover">Done</a> --}}
              <button type="button" class="btn btn-primary" disabled>Done</button>

              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-10">
          <div class="single-pricing active">
            <span class="popular">Popular</span>
            <div class="pricing-header">
             
              <h3>{{ $Standard->PlanName }}</h3>
              <div class="price">
                <h1 class="text-primary">
                  {{ $Standard->Price }}MAD <span class="text-sm text-regular">Monthly</span>
                </h1>
              </div>
            </div>
            <div class="pricing-body">
              <ul>
                <p>Description</p>
                <li class=" text-danger ">{{ $Standard->Description }}</li>
                <p>Num Menu Items Allowed</p>
                <li class=" text-danger ">{{ $Standard->NumMenuItemsAllowed }}</li>
                <p>Media Types Allowed</p>
                <li class=" text-danger ">{{ $Standard->MediaTypesAllowed }}</li>
                <p>Scans Allowed</p>
                <li class=" text-danger ">{{ $Standard->ScansAllowed }}</li>
                <p>Duration</p>
                <li class=" text-danger ">{{ $Standard->Duration }}</li>
              </ul>
            </div>
            <div class="pricing-footer">
              @if ($user->sub_id !== $Standard->SubscriptionID)
              <a href="{{ route('buy_aboonement',$Standard->SubscriptionID) }}" class="main-btn primary-btn btn-sm btn-hover">Buy Now</a>
              @else
              <button type="button" class="btn btn-primary" disabled>Done</button>

              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-10">
          <div class="single-pricing">
            <div class="pricing-header">
           
              <h3>{{ $Premium->PlanName }}</h3>

              <div class="price">
                <h1 class="text-primary">
                  {{ $Premium->Price }}MAD <span class="text-sm text-regular">Monthly</span>
                </h1>
              </div>
            </div>
            <div class="pricing-body">
              <ul>
                <p>Description</p>
                <li class=" text-danger ">{{ $Premium->Description }}</li>
                <p>Num Menu Items Allowed</p>
                <li class=" text-danger ">{{ $Premium->NumMenuItemsAllowed }}</li>
                <p>Media Types Allowed</p>
                <li class=" text-danger ">{{ $Premium->MediaTypesAllowed }}</li>
                <p>Scans Allowed</p>
                <li class=" text-danger ">{{ $Premium->ScansAllowed }}</li>
                <p>Duration</p>
                <li class=" text-danger ">{{ $Premium->Duration }}</li>
              </ul>
            </div>
            <div class="pricing-footer">
              @if ($user->sub_id !== $Premium->SubscriptionID)

              <a href="{{ route('buy_aboonement',$Premium->SubscriptionID) }}" class="main-btn primary-btn-outline btn-sm btn-hover">Buy Now</a>
              @else
              <button type="button" class="btn btn-primary" disabled>Done</button>

              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Monthly Pricing section end -->
  </div>
  <!-- end container -->
</section>

@endsection