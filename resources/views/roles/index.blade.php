@extends('front.layouts.master')



@section('content')

    <!-- ========== section start ========== -->
    <section>
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title d-flex align-items-center flex-wrap">
                <h2 class="mr-40">roles</h2>
                @can('role-create')
                <a href="{{ route('roles.create') }}" class="main-btn primary-btn btn-hover btn-sm">
                  <i class="lni lni-plus mr-5"></i>Create New Role</a>
                  @endcan
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
                      roles
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

        <!-- ======== card style start ========== -->
        <div class="card-style px-0 mb-30">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
          <div class="title d-flex flex-wrap pl-30 pr-30 mb-10 align-items-center justify-content-between">
            <h6>
              Today All roles
              <span class="text-regular text-sm">({{ count($roles) }} roles)</span>
            </h6>
      

          
          </div>
          <div class="table-wrapper table-responsive roles-table">
            <table class="table">
              <tbody>

                @foreach ($roles as $key => $role)
                @if ($role->name === 'Admin' && Auth()->id() != 1 || $role->name === 'owner' && Auth()->id() != 1 || $role->name === 'User' && Auth()->id() != 1)
                    @continue
                @endif
            
                <tr>
                    <td>
                        <div class="check-input-primary">
                            <input disabled class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                    </td>
                    <td class="min-width name-title">
                        <h5 class="text-bold text-dark">
                            {{ $role->name }}
                        </h5>
                    </td>
                    <td class="min-width">
                        <p>
                            <i class="lni lni-calendar mr-10"></i> {{ $role->created_at->diffForHumans() }}
                        </p>
                    </td>
                    <td class="min-width">
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
            
                            <div class="action justify-content-end">
                                <a href="{{ route('roles.show', $role->id) }}" class="text-dark link-btn me-2 "> <i
                                        class="fa-solid fa-eye"></i></a>
                                @can('role-edit')
                                <a href="{{ route('roles.edit', $role->id) }}"
                                    class="text-dark link-btn ml-10 me-1"> <i class="fa-regular fa-pen-to-square"></i></a>
                                @endcan
                          
                                <button type="submit" class="text-dark delete-btn ml-10 me-5"><i class="fa-solid fa-trash"></i>
                                </button>
                            
                            </div>
                        </form>
                    </td>
                </tr>
                <!-- end table row -->
            @endforeach
            
              </tbody>
            </table>
            <!-- end table -->
            {!! $roles->render() !!}

          </div>
        </div>
        <!-- ======== card style end ========== -->

    
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    @endsection