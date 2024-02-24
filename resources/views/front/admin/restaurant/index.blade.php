@extends('front.layouts.master')



@section('content')

<section class="table-components mt-5">
  @if (count($restaurants) < 1)
      
  
  <form action="{{ route('add_restaurant') }}" method="post">
    @csrf
  <div class="container-fluid">
    <div class="input-group mb-3 col-6">
      <span class="input-group-text" id="basic-addon1">*</span>
      <input type="text" name="Name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="mb-3 col-2 ">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon3">Hours start</span>
        <input type="time" name="Hours" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
      </div>
    </div>

    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon3">Address</span>
        <input type="text" name="Address" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
  </form>

  </div>
  @else
    
  <form action="{{ route('update_restaurant',$restaurants[0]->RestaurantID) }}" method="post">
    @csrf
  <div class="container-fluid">
    <div class="input-group mb-3 col-6">
      <span class="input-group-text" id="basic-addon1">*</span>
      <input type="text" name="Name" value="{{ $restaurants[0]->Name }}" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="mb-3 col-2 ">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon3">Hours start</span>
        <input type="time" name="Hours" value="{{ $restaurants[0]->Hours }}" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
      </div>
    </div>

    <div class="mb-3">
      <div class="input-group">
        <span class="input-group-text" id="basic-addon3">Address</span>
        <input type="text" name="Address" value="{{ $restaurants[0]->Address }}" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>

  </div>
  @endif
  <!-- end container -->
</section>
<!-- ========== table components end ========== -->



   

    

@endsection