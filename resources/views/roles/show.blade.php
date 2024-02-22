@extends('front.layouts.master')



@section('content')

 <!-- ========== notification-wrapper start ========== -->
 <div class="notification-wrapper">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title">
            <h2>Notifications</h2>
            <a class="btn btn-primary mt-2" href="{{ route('roles.index') }}"> Back</a>

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
                  Notifications
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

    <div class="card-style">
      <div class="single-notification">
       
        <div class="notification">
          <div class="image warning-bg">
            <span>W</span>
          </div>
          <a href="#0" class="content">
            <h6>                {{ $role->name }}
            </h6>
            <strong class="">Permissions:</strong>
            <p class="text-sm text-gray mt-2">
              @if (!empty($rolePermissions))
              @foreach ($rolePermissions as $v)
                  <span class="main-badge success-badge">{{ $v->name }}</span>

              @endforeach
          @endif
            </p>
            <span class="text-sm text-medium text-gray">{{ $role->created_at->diffForHumans() }}</span>
          </a>
        </div>
       
      </div>
      <!-- end single notification -->
     

    @endsection