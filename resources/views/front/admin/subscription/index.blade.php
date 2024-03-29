@extends('front.layouts.master')



@section('content')




    <!-- ========== section start ========== -->
    <section class="section">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title">
                <h2>Analytics Dashboard</h2>
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
                      Analytics
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
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon purple">
                <i class="lni lni-users"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Users</h6>
                <h3 class="text-bold mb-10">6453</h3>
                <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +23.4%
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon success">
                <i class="lni lni-eye"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Page views</h6>
                <h3 class="text-bold mb-10">876</h3>
                <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -12.00%
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon primary">
                <i class="lni lni-thumbs-up"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Impressions</h6>
                <h3 class="text-bold mb-10">976</h3>
                <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -2.00%
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
          <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
              <div class="icon orange">
                <i class="lni lni-pie-chart"></i>
              </div>
              <div class="content">
                <h6 class="mb-10">Bounce Rate</h6>
                <h3 class="text-bold mb-10">346</h3>
                <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +23.4%
                </p>
              </div>
            </div>
            <!-- End Icon Cart -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
          <div class="col-lg-5">
            <div class="card-style mb-30">
              <div class="title d-flex justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-2">Audience Overview</h6>
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <div id="legend4">
                  <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                    <li>
                      <div class="d-flex">
                        <span class="bg-color primary-bg"> </span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">New Visitor</span>
                            +25.55%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color danger-bg"></span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">Unique Visitor</span>
                            -2.05%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <canvas id="Chart4" style="width: 100%; height: 420px; margin-left: -35px"></canvas>
              </div>
              <!-- End Chart -->
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap align-items-center justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-2">Web Traffic</h6>
                </div>
                <div class="right">
                  <div class="select-style-1 mb-2">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Last Month</option>
                        <option value="">Last 3 Months</option>
                        <option value="">Last Year</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <div id="legend3">
                  <ul class="legend3 d-flex align-items-center mb-30">
                    <li>
                      <div class="d-flex">
                        <span class="bg-color primary-bg"> </span>
                        <div class="text">
                          <p class="text-sm text-dark">Store Visits</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color purple-bg"></span>
                        <div class="text">
                          <p class="text-sm text-dark">Visitors</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <canvas id="Chart3" style="width: 100%; height: 400px; margin-left: -35px;"></canvas>
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card-style mb-30">
              <div class="title d-flex justify-content-between align-items-center">
                <h6 class="mb-10">Revenue By Device</h6>
                <div class="more-btn-wrapper mb-10">
                  <button class="more-btn dropdown-toggle" id="moreAction" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="lni lni-more-alt"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction">
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Add All</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Remove All</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="chart">
                <div id="doughnutChart1" style="width: 100%; height: 350px"></div>
                <div class="doughnutChart-legend">
                  <ul>
                    <li class="primary">
                      <span class="left">Desktop</span>
                      <span class="right">49%</span>
                    </li>
                    <li class="orange">
                      <span class="left">Tablet</span>
                      <span class="right">19%</span>
                    </li>
                    <li class="danger">
                      <span class="left">Mobile</span>
                      <span class="right">30%</span>
                    </li>
                    <li class="warning">
                      <span class="left">Others</span>
                      <span class="right">5%</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card-style clients-table-card mb-30">
              <div class="title d-flex justify-content-between align-items-center">
                <h6 class="mb-10">New User</h6>
                <div class="more-btn-wrapper mb-10">
                  <button class="more-btn dropdown-toggle" id="moreAction" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="lni lni-more-alt"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction">
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Add All</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Remove All</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="table-wrapper table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Arlene McCoy</h5>
                        <p>6391 Elgin St. Celina, Delaware....</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-2.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Ralph Edwards</h5>
                        <p>2464 Royal Ln. Mesa, New Jersey,,,</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-3.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Dianne Russell</h5>
                        <p>4140 Parker Rd. Allentown, New,,,</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-4.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Jane Cooper</h5>
                        <p>1901 Thornridge Cir. Shiloh,,,</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-5.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Jane Cooper</h5>
                        <p>1901 Thornridge Cir. Shiloh,,,</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-6.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Brooklyn Simmons</h5>
                        <p>4517 Washington Ave. Manchester,,,</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-1.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Arlene McCoy</h5>
                        <p>6391 Elgin St. Celina, Delaware....</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <div class="employee-image">
                          <img src="assets/images/lead/lead-6.png" alt="" />
                        </div>
                      </td>
                      <td class="employee-info">
                        <h5 class="text-medium">Brooklyn Simmons</h5>
                        <p>4517 Washington Ave. Manchester,,,</p>
                      </td>
                      <td>
                        <div class="d-flex justify-content-end">
                          <button class="status-btn close-btn border-0 m-1">
                            Cancel
                          </button>
                          <button class="status-btn primary-btn border-0 m-1">
                            Add
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- end table row -->
                  </tbody>
                </table>
                <!-- end table -->
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- End Col -->
          <div class="col-lg-6">
            <div class="card-style mb-30">
              <div class="title d-flex justify-content-between align-items-center">
                <h6 class="mb-10">Browser States</h6>
                <div class="more-btn-wrapper mb-10">
                  <button class="more-btn dropdown-toggle" id="moreAction" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="lni lni-more-alt"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction">
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Clear All</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Delete Cookies</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div id="map" style="width: 100%; height: 400px"></div>
              <div class="table-wrapper">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <h5 class="text-sm text-medium">Countries</h5>
                      </th>
                      <th>
                        <h5 class="text-sm text-medium">Orders</h5>
                      </th>
                      <th>
                        <h5 class="text-sm text-medium">Earnings</h5>
                      </th>
                    </tr>
                    <!-- end table row -->
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p class="text-sm">United State</p>
                      </td>
                      <td>
                        <p class="text-sm">23,543</p>
                      </td>
                      <td>
                        <p class="text-sm">$35,4457</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">United Kingdom</p>
                      </td>
                      <td>
                        <p class="text-sm">23,543</p>
                      </td>
                      <td>
                        <p class="text-sm">$35,4457</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">Canada</p>
                      </td>
                      <td>
                        <p class="text-sm">23,543</p>
                      </td>
                      <td>
                        <p class="text-sm">$35,4457</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">U A E</p>
                      </td>
                      <td>
                        <p class="text-sm">83,543</p>
                      </td>
                      <td>
                        <p class="text-sm">$95,4457</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">Spain</p>
                      </td>
                      <td>
                        <p class="text-sm">3,543</p>
                      </td>
                      <td>
                        <p class="text-sm">$15,4457</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">Germany</p>
                      </td>
                      <td>
                        <p class="text-sm">33,543</p>
                      </td>
                      <td>
                        <p class="text-sm">$45,4457</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                  </tbody>
                </table>
                <!-- end table -->
              </div>
            </div>

            <!-- End Card Style -->

            <div class="card-style clients-table-card mb-30">
              <div class="title d-flex justify-content-between align-items-center">
                <h6 class="mb-10">Browser States</h6>
                <div class="more-btn-wrapper mb-10">
                  <button class="more-btn dropdown-toggle" id="moreAction" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="lni lni-more-alt"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction">
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Clear All</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Delete Cookies</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="table-wrapper">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <h5 class="text-sm text-medium">Browser</h5>
                      </th>
                      <th>
                        <h5 class="text-sm text-medium">Sessions</h5>
                      </th>
                      <th>
                        <h5 class="text-sm text-medium">Bounce Rate</h5>
                      </th>
                    </tr>
                    <!-- end table row -->
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p class="text-sm">Chrome</p>
                      </td>
                      <td>
                        <p class="text-sm">10853(52%)</p>
                      </td>
                      <td>
                        <p class="text-sm">52.80%</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">Safari</p>
                      </td>
                      <td>
                        <p class="text-sm">10853(52%)</p>
                      </td>
                      <td>
                        <p class="text-sm">52.80%</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">FireFox</p>
                      </td>
                      <td>
                        <p class="text-sm">10853(52%)</p>
                      </td>
                      <td>
                        <p class="text-sm">52.80%</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <p class="text-sm">Opera</p>
                      </td>
                      <td>
                        <p class="text-sm">10853(52%)</p>
                      </td>
                      <td>
                        <p class="text-sm">52.80%</p>
                      </td>
                    </tr>
                    <!-- end table row -->
                  </tbody>
                </table>
                <!-- end table -->
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
        <div class="row">
          <div class="col-12">
            <div class="card-style referrals-table-card mb-30">
              <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <h6 class="mb-10">Top Referrals</h6>
                <div class="right d-flex align-items-center justify-content-between justify-content-sm-end">
                  <div class="select-style-1 mb-2">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Last Month</option>
                        <option value="">Last 3 Months</option>
                        <option value="">Last Year</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                  <div class="more-btn-wrapper mb-2 ms-3">
                    <button class="more-btn dropdown-toggle" id="moreAction" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="lni lni-more-alt"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction">
                      <li class="dropdown-item">
                        <a href="#0" class="text-gray">Clear All</a>
                      </li>
                      <li class="dropdown-item">
                        <a href="#0" class="text-gray">Delete Cookies</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="table-wrapper table-responsive">
                <table class="table referrals-table">
                  <tbody>
                    <tr>
                      <td>
                        <h5 class="text-medium">#1</h5>
                      </td>
                      <td>
                        <div class="referrals-image d-flex align-items-center">
                          <div class="image me-3">
                            <img src="assets/images/refarrals/uideck.svg" alt="" />
                          </div>
                          <h5 class="text-medium">UIdeck</h5>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h5 class="text-medium">7653</h5>
                          <p class="text-sm">Hit</p>
                        </div>
                      </td>
                      <td>
                        <div class="chart" style="width: 145px; margin: auto">
                          <canvas id="referralsChart1" style="width: 100%; height: 45px"></canvas>
                        </div>
                      </td>
                      <td>
                        <h5 class="text-medium d-flex align-items-center">
                          <span class="text-sm text-success me-2">
                            <i class="lni lni-arrow-up"></i>
                          </span>
                          12.45%
                        </h5>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <h5 class="text-medium">#2</h5>
                      </td>
                      <td>
                        <div class="referrals-image d-flex align-items-center">
                          <div class="image me-3">
                            <img src="assets/images/refarrals/graygrids.svg" alt="" />
                          </div>
                          <h5 class="text-medium">GrayGrids</h5>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h5 class="text-medium">7653</h5>
                          <p class="text-sm">Hit</p>
                        </div>
                      </td>
                      <td>
                        <div class="chart" style="width: 145px; margin: auto">
                          <canvas id="referralsChart2" style="width: 100%; height: 45px"></canvas>
                        </div>
                      </td>
                      <td>
                        <h5 class="text-medium d-flex align-items-center">
                          <span class="text-sm text-danger me-2">
                            <i class="lni lni-arrow-down"></i>
                          </span>
                          1.05%
                        </h5>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <h5 class="text-medium">#3</h5>
                      </td>
                      <td>
                        <div class="referrals-image d-flex align-items-center">
                          <div class="image me-3">
                            <img src="assets/images/refarrals/ayroui.svg" alt="" />
                          </div>
                          <h5 class="text-medium">Ayro UI</h5>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h5 class="text-medium">7653</h5>
                          <p class="text-sm">Hit</p>
                        </div>
                      </td>
                      <td>
                        <div class="chart" style="width: 145px; margin: auto">
                          <canvas id="referralsChart3" style="width: 100%; height: 45px"></canvas>
                        </div>
                      </td>
                      <td>
                        <h5 class="text-medium d-flex align-items-center">
                          <span class="text-sm text-success me-2">
                            <i class="lni lni-arrow-up"></i>
                          </span>
                          12.45%
                        </h5>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <h5 class="text-medium">#4</h5>
                      </td>
                      <td>
                        <div class="referrals-image d-flex align-items-center">
                          <div class="image me-3">
                            <img src="assets/images/refarrals/tailgrids.svg" alt="" />
                          </div>
                          <h5 class="text-medium">TailGrids</h5>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h5 class="text-medium">7653</h5>
                          <p class="text-sm">Hit</p>
                        </div>
                      </td>
                      <td>
                        <div class="chart" style="width: 145px; margin: auto">
                          <canvas id="referralsChart4" style="width: 100%; height: 45px; margin-left: -35px;"></canvas>
                        </div>
                      </td>
                      <td>
                        <h5 class="text-medium d-flex align-items-center">
                          <span class="text-sm text-danger me-2">
                            <i class="lni lni-arrow-down"></i>
                          </span>
                          2.04%
                        </h5>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <h5 class="text-medium">#5</h5>
                      </td>
                      <td>
                        <div class="referrals-image d-flex align-items-center">
                          <div class="image me-3">
                            <img src="assets/images/refarrals/ecomhtml.svg" alt="" />
                          </div>
                          <h5 class="text-medium">eCommerceHTML</h5>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h5 class="text-medium">7653</h5>
                          <p class="text-sm">Hit</p>
                        </div>
                      </td>
                      <td>
                        <div class="chart" style="width: 145px; margin: auto">
                          <canvas id="referralsChart5" style="width: 100%; height: 45px"></canvas>
                        </div>
                      </td>
                      <td>
                        <h5 class="text-medium d-flex align-items-center">
                          <span class="text-sm text-success me-2">
                            <i class="lni lni-arrow-up"></i>
                          </span>
                          12.45%
                        </h5>
                      </td>
                    </tr>
                    <!-- end table row -->
                    <tr>
                      <td>
                        <h5 class="text-medium">#6</h5>
                      </td>
                      <td>
                        <div class="referrals-image d-flex align-items-center">
                          <div class="image me-3">
                            <img src="assets/images/refarrals/lineicons.svg" alt="" />
                          </div>
                          <h5 class="text-medium">Lineicons</h5>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <h5 class="text-medium">7653</h5>
                          <p class="text-sm">Hit</p>
                        </div>
                      </td>
                      <td>
                        <div class="chart" style="width: 145px; margin: auto">
                          <canvas id="referralsChart6" style="width: 100%; height: 45px"></canvas>
                        </div>
                      </td>
                      <td>
                        <h5 class="text-medium d-flex align-items-center">
                          <span class="text-sm text-success me-2">
                            <i class="lni lni-arrow-up"></i>
                          </span>
                          12.45%
                        </h5>
                      </td>
                    </tr>
                    <!-- end table row -->
                  </tbody>
                </table>
                <!-- end table -->
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    

@endsection