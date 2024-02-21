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
                <h2 class="mr-40">Task</h2>
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
                      Task
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
          <div class="title d-flex flex-wrap pl-30 pr-30 mb-10 align-items-center justify-content-between">
            <h6>
              Today All Task
              <span class="text-regular text-sm">(15 Task)</span>
            </h6>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

            <div class="d-flex align-items-center">
              <h6>Sort By:</h6>
              <div class="select-style-1 mb-0 ml-10">
                <div class="select-position">
                  <select class="p-0 pe-5 border-0">
                    <option value="">Unread</option>
                    <option value="">Date</option>
                    <option value="">Name</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="table-wrapper table-responsive task-table">
            <table class="table">
              <tbody>

                @foreach ($roles as $key => $role)
                <tr>
                  <td>
                    <div class="check-input-primary">
                      <input class="form-check-input" type="checkbox" id="checkbox-1" />
                    </div>
                  </td>
                  <td class="min-width name-title">
                    <h5 class="text-bold text-dark">
                      {{ $role->name }}
                    </h5>
                  </td>
                  <td class="min-width">
                    <p>
                      <i class="lni lni-calendar mr-10"></i> {{ $role->created_at }}
                    </p>
                  </td>
                
               
                  <td class="min-width">
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                      @csrf
                      @method('DELETE')

                    <div class="action justify-content-end">
                    
                      <a href="{{ route('roles.show', $role->id) }}" class="text-dark link-btn"> <i class="lni lni-link"></i></a>
                      @can('role-edit')
                      <a href="{{ route('roles.edit', $role->id) }}" class="text-dark link-btn ml-10"> <i class="lni lni-link"></i></a>
                      @endcan
                      @can('product-delete')
                      <button type="submit" class="text-dark delete-btn ml-10"><i class="lni lni-trash-can"></i></button>

                      @endcan
                    
                    
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

        <!-- ======== card style start ========== -->
        <div class="card-style px-0 mb-30">
          <div class="title d-flex pl-30 pr-30 mb-10 align-items-center justify-content-between">
            <h6>
              Upcoming Task <span class="text-regular text-sm">(5 Task)</span>
            </h6>
          </div>
          <div class="table-wrapper table-responsive task-table">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="check-input-primary">
                      <input class="form-check-input" type="checkbox" id="checkbox-7" />
                    </div>
                  </td>
                  <td class="min-width name-title">
                    <h5 class="text-bold text-dark">
                      Admin Dashboard Design
                    </h5>
                  </td>
                  <td class="min-width">
                    <p>
                      <i class="lni lni-calendar mr-10"></i> 22 February,2024
                    </p>
                  </td>
                  <td class="min-width">
                    <p><i class="lni lni-comments mr-10"></i> 30 Messages</p>
                  </td>
                  <td class="min-width">
                    <div class="employee-image mx-auto">
                      <img src="assets/images/lead/lead-1.png" alt="" />
                    </div>
                  </td>
                  <td class="min-width">
                    <div class="action justify-content-end">
                      <button class="text-dark link-btn">
                        <i class="lni lni-link"></i>
                      </button>
                      <button class="text-dark delete-btn ml-10">
                        <i class="lni lni-trash-can"></i>
                      </button>
                      <button class="more-btn ml-10 dropdown-toggle" id="moreAction7" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="lni lni-more-alt"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction7">
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Mark as Read</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Reply</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <!-- end table row -->
                <tr>
                  <td>
                    <div class="check-input-primary">
                      <input class="form-check-input" type="checkbox" id="checkbox-8" />
                    </div>
                  </td>
                  <td class="min-width name-title">
                    <h5 class="text-bold text-dark">
                      Web Development Services
                    </h5>
                  </td>
                  <td class="min-width">
                    <p>
                      <i class="lni lni-calendar mr-10"></i> 22 February,2024
                    </p>
                  </td>
                  <td class="min-width">
                    <p><i class="lni lni-comments mr-10"></i> 30 Messages</p>
                  </td>
                  <td class="min-width">
                    <div class="employee-image mx-auto">
                      <img src="assets/images/lead/lead-2.png" alt="" />
                    </div>
                  </td>
                  <td class="min-width">
                    <div class="action justify-content-end">
                      <button class="text-dark link-btn">
                        <i class="lni lni-link"></i>
                      </button>
                      <button class="text-dark delete-btn ml-10">
                        <i class="lni lni-trash-can"></i>
                      </button>
                      <button class="more-btn ml-10 dropdown-toggle" id="moreAction8" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="lni lni-more-alt"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction8">
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Mark as Read</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Reply</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <!-- end table row -->
                <tr>
                  <td>
                    <div class="check-input-primary">
                      <input class="form-check-input" type="checkbox" id="checkbox-9" />
                    </div>
                  </td>
                  <td class="min-width name-title">
                    <h5 class="text-bold text-dark">
                      Lindy UI KIt Landing Page Design
                    </h5>
                  </td>
                  <td class="min-width">
                    <p>
                      <i class="lni lni-calendar mr-10"></i> 22 February,2024
                    </p>
                  </td>
                  <td class="min-width">
                    <p><i class="lni lni-comments mr-10"></i> 30 Messages</p>
                  </td>
                  <td class="min-width">
                    <div class="employee-image mx-auto">
                      <img src="assets/images/lead/lead-3.png" alt="" />
                    </div>
                  </td>
                  <td class="min-width">
                    <div class="action justify-content-end">
                      <button class="text-dark link-btn">
                        <i class="lni lni-link"></i>
                      </button>
                      <button class="text-dark delete-btn ml-10">
                        <i class="lni lni-trash-can"></i>
                      </button>
                      <button class="more-btn ml-10 dropdown-toggle" id="moreAction9" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="lni lni-more-alt"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction9">
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Mark as Read</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Reply</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <!-- end table row -->
              </tbody>
            </table>
            <!-- end table -->
          </div>
        </div>
        <!-- ======== card style end ========== -->

        <!-- ======== card style start ========== -->
        <div class="card-style px-0 mb-30">
          <div class="title d-flex pl-30 pr-30 mb-10 align-items-center justify-content-between">
            <h6>
              Completed Task
              <span class="text-regular text-sm">(20 Task)</span>
            </h6>
          </div>
          <div class="table-wrapper table-responsive task-table task-completed">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="check-input-primary">
                      <input class="form-check-input" type="checkbox" checked id="checkbox-10" />
                    </div>
                  </td>
                  <td class="min-width name-title">
                    <h5 class="text-bold text-dark">
                      Admin Dashboard Design
                    </h5>
                  </td>
                  <td class="min-width">
                    <p>
                      <i class="lni lni-calendar mr-10"></i> 22 February,2024
                    </p>
                  </td>
                  <td class="min-width">
                    <p><i class="lni lni-comments mr-10"></i> 30 Messages</p>
                  </td>
                  <td class="min-width">
                    <div class="employee-image mx-auto">
                      <img src="assets/images/lead/lead-1.png" alt="" />
                    </div>
                  </td>
                  <td class="min-width">
                    <div class="action justify-content-end">
                      <button class="text-dark link-btn">
                        <i class="lni lni-link"></i>
                      </button>
                      <button class="text-dark delete-btn ml-10">
                        <i class="lni lni-trash-can"></i>
                      </button>
                      <button class="more-btn ml-10 dropdown-toggle" id="moreAction10" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="lni lni-more-alt"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction10">
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Mark as Read</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Reply</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <!-- end table row -->
                <tr>
                  <td>
                    <div class="check-input-primary">
                      <input class="form-check-input" type="checkbox" checked id="checkbox-11" />
                    </div>
                  </td>
                  <td class="min-width name-title">
                    <h5 class="text-bold text-dark">
                      Web Development Services
                    </h5>
                  </td>
                  <td class="min-width">
                    <p>
                      <i class="lni lni-calendar mr-10"></i> 22 February,2024
                    </p>
                  </td>
                  <td class="min-width">
                    <p><i class="lni lni-comments mr-10"></i> 30 Messages</p>
                  </td>
                  <td class="min-width">
                    <div class="employee-image mx-auto">
                      <img src="assets/images/lead/lead-2.png" alt="" />
                    </div>
                  </td>
                  <td class="min-width">
                    <div class="action justify-content-end">
                      <button class="text-dark link-btn">
                        <i class="lni lni-link"></i>
                      </button>
                      <button class="text-dark delete-btn ml-10">
                        <i class="lni lni-trash-can"></i>
                      </button>
                      <button class="more-btn ml-10 dropdown-toggle" id="moreAction11" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="lni lni-more-alt"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction11">
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Mark as Read</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Reply</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <!-- end table row -->
                <tr>
                  <td>
                    <div class="check-input-primary">
                      <input class="form-check-input" type="checkbox" checked id="checkbox-12" />
                    </div>
                  </td>
                  <td class="min-width name-title">
                    <h5 class="text-bold text-dark">
                      Lindy UI KIt Landing Page Design
                    </h5>
                  </td>
                  <td class="min-width">
                    <p>
                      <i class="lni lni-calendar mr-10"></i> 22 February,2024
                    </p>
                  </td>
                  <td class="min-width">
                    <p><i class="lni lni-comments mr-10"></i> 30 Messages</p>
                  </td>
                  <td class="min-width">
                    <div class="employee-image mx-auto">
                      <img src="assets/images/lead/lead-3.png" alt="" />
                    </div>
                  </td>
                  <td class="min-width">
                    <div class="action justify-content-end">
                      <button class="text-dark link-btn">
                        <i class="lni lni-link"></i>
                      </button>
                      <button class="text-dark delete-btn ml-10">
                        <i class="lni lni-trash-can"></i>
                      </button>
                      <button class="more-btn ml-10 dropdown-toggle" id="moreAction12" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="lni lni-more-alt"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction12">
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Mark as Read</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="#0" class="text-gray">Reply</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <!-- end table row -->
              </tbody>
            </table>
            <!-- end table -->
          </div>
        </div>
        <!-- ======== card style end ========== -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    @endsection