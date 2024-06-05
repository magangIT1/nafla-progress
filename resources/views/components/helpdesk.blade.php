@extends('layouts.app')
@section('body')
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Themepixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <title>DashByte - Premium Dashboard Template</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../lib/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="../lib/apexcharts/apexcharts.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.min.css">
  </head>
  <body>
      <div class="dropdown dropdown-skin">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ri-settings-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f">
          <label>Skin Mode</label>
          <nav id="skinMode" class="nav nav-skin">
            <a href="" class="nav-link active">Light</a>
            <a href="" class="nav-link">Dark</a>
          </nav>
          <hr>
          <label>Sidebar Skin</label>
          <nav id="sidebarSkin" class="nav nav-skin">
            <a href="" class="nav-link active">Default</a>
            <a href="" class="nav-link">Prime</a>
            <a href="" class="nav-link">Dark</a>
          </nav>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->

      <div class="dropdown dropdown-notification ms-3 ms-xl-4">
        <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><small>3</small><i class="ri-notification-3-line"></i></a>
        <div class="dropdown-menu dropdown-menu-end mt-10-f me--10-f">
          <div class="dropdown-menu-header">
            <h6 class="dropdown-menu-title">Notifications</h6>
          </div><!-- dropdown-menu-header -->
          <ul class="list-group">
            <li class="list-group-item">
              <div class="avatar online"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
              <div class="list-group-body">
                <p><strong>Dominador Manuel</strong> and <strong>100 other people</strong> reacted to your comment "Tell your partner that...</p>
                <span>Aug 20 08:55am</span>
              </div><!-- list-group-body -->
            </li>
            <li class="list-group-item">
              <div class="avatar online"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
              <div class="list-group-body">
                <p><strong>Angela Ighot</strong> tagged you and <strong>9 others</strong> in a post.</p>
                <span>Aug 18 10:30am</span>
              </div><!-- list-group-body -->
            </li>
            <li class="list-group-item">
              <div class="avatar"><span class="avatar-initial bg-primary">a</span></div>
              <div class="list-group-body">
                <p>New listings were added that match your search alert <strong>house for rent</strong></p>
                <span>Aug 15 08:10pm</span>
              </div><!-- list-group-body -->
            </li>
            <li class="list-group-item">
              <div class="avatar online"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
              <div class="list-group-body">
                <p>Reminder: <strong>Jerry Cuares</strong> invited you to like <strong>Cuares Surveying Services</strong>. <br><a href="">Accept</a> or <a href="">Decline</a></p>
                <span>Aug 14 11:50pm</span>
              </div><!-- list-group-body -->
            </li>
            <li class="list-group-item">
              <div class="avatar online"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
              <div class="list-group-body">
                <p><strong>Dyanne Aceron</strong> reacted to your post <strong>King of the Bed</strong>.</p>
                <span>Aug 10 05:30am</span>
              </div><!-- list-group-body -->
            </li>
          </ul>
          <div class="dropdown-menu-footer"><a href="">Show all Notifications</a></div>
        </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
      <div class="dropdown dropdown-profile ms-3 ms-xl-4">
          <a href="" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><div class="avatar online"><img src="https://via.placeholder.com/500/4c5366/fff" alt=""></div></a>
          <div class="dropdown-menu dropdown-menu-end mt-10-f">
            <div class="dropdown-menu-body">
              <div class="avatar avatar-xl online mb-3"><img src="https://via.placeholder.com/500/4c5366/fff" alt=""></div>
              <h5 class="mb-1 text-dark fw-semibold">Shaira Diaz</h5>
              <p class="fs-sm text-secondary">Premium Member</p>

              <nav class="nav">
                <a href=""><i class="ri-edit-2-line"></i> Edit Profile</a>
                <a href=""><i class="ri-profile-line"></i> View Profile</a>
              </nav>
              <hr>
              <nav class="nav">
                <a href=""><i class="ri-question-line"></i> Help Center</a>
                <a href=""><i class="ri-lock-line"></i> Privacy Settings</a>
                <a href=""><i class="ri-user-settings-line"></i> Account Settings</a>
                <a href=""><i class="ri-logout-box-r-line"></i> Log Out</a>
              </nav>
            </div><!-- dropdown-menu-body -->
          </div><!-- dropdown-menu -->
      </div><!-- dropdown -->
    </div><!-- header-main -->

    <div class="main main-app p-3 p-lg-4">
      <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <ol class="breadcrumb fs-sm mb-1">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Helpdesk Service</li>
          </ol>
          <h4 class="main-title mb-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
          <button type="button" class="btn btn-white btn-icon"><i class="ri-share-line fs-18 lh-1"></i></button>
          <button type="button" class="btn btn-white btn-icon"><i class="ri-printer-line fs-18 lh-1"></i></button>
          <button type="button" class="btn btn-primary btn-icon"><i class="ri-bar-chart-2-line fs-18 lh-1"></i></button>
        </div>
      </div>

      <div class="row g-3">
        <div class="col-sm-4">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="d-flex d-sm-block d-xl-flex align-items-center">
                <div class="helpdesk-icon bg-primary text-white"><i class="ri-bell-line"></i></div>
                <div class="ms-3 ms-sm-0 ms-xl-3 mt-sm-3 mt-xl-0">
                  <h2 class="card-value d-flex align-items-baseline mb-0">387 <small class="text-success">+3.82%</small></h2>
                  <label class="card-label fs-sm fw-medium mb-1">Support Requests</label>
                  <div class="mutual-badge">
                    <ul>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                    </ul>
                    <label>8 support agents</label>
                  </div>
                </div>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-4">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="d-flex d-sm-block d-xl-flex align-items-center">
                <div class="helpdesk-icon bg-ui-02 text-white"><i class="ri-blaze-fill"></i></div>
                <div class="ms-3 ms-sm-0 ms-xl-3 mt-sm-3 mt-xl-0">
                  <h2 class="card-value d-flex align-items-baseline mb-0">296 <small class="text-danger">-0.08%</small></h2>
                  <label class="card-label fs-sm fw-medium mb-1">Complaints Received</label>
                  <div class="mutual-badge">
                    <ul>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                    </ul>
                    <label>5 support agents</label>
                  </div>
                </div>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-4">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="d-flex d-sm-block d-xl-flex align-items-center">
                <div class="helpdesk-icon bg-ui-03 text-white"><i class="ri-star-smile-line"></i></div>
                <div class="ms-3 ms-sm-0 ms-xl-3 mt-sm-3 mt-xl-0">
                  <h2 class="card-value d-flex align-items-baseline mb-0">198 <small class="text-danger">-0.03%</small></h2>
                  <label class="card-label fs-sm fw-medium mb-1">Complaints Resolved</label>
                  <div class="mutual-badge">
                    <ul>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                      <li><a href="" class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></a></li>
                    </ul>
                    <label>9 support agents</label>
                  </div>
                </div>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-7 col-xl-8">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Current Ticket Status</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="chartjs-one"><canvas id="chartJS1"></canvas></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-5 col-xl-4">
          <div class="card card-one overflow-hidden">
            <div class="card-header">
              <h6 class="card-title">Complaints Received</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-0">
              <div class="position-absolute p-4">
                <h1 class="card-value d-flex align-items-baseline mb-0">268</h1>
                <p class="fs-xs mb-2"><span class="text-success fs-numerals">0.3%</span> higher than last month</p>
                <p class="fs-sm">The total number of complaints that have been received.</p>
              </div>
              <div id="apexChart1"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="row g-3 row-cols-auto align-items-center">
                <div class="col">
                  <div class="apex-donut-one">
                    <div id="chartDonut1"></div>
                    <div>
                      <h4 class="ff-numerals text-dark mb-0">86%</h4>
                      <span class="fs-xs text-secondary">Reached</span>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-xl-7">
                  <h2 class="card-value mb-3">7m:32s</h2>
                  <h6 class="card-label text-dark fw-semibold mb-1">Time to Resolved Complaint</h6>
                  <p class="fs-sm text-secondary mb-0">The average time taken to resolve complaints.</p>
                </div>
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="row g-3 row-cols-auto align-items-center">
                <div class="col">
                  <div class="apex-donut-one">
                    <div id="chartDonut2"></div>
                    <div>
                      <h4 class="ff-numerals text-dark mb-0">68%</h4>
                      <span class="fs-xs text-secondary">Reached</span>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-xl-7">
                  <h2 class="card-value mb-3">0m:20s</h2>
                  <h6 class="card-label text-dark fw-semibold mb-1">Average Speed of Answer</h6>
                  <p class="fs-sm text-secondary mb-0">The average time taken to resolve complaints.</p>
                </div>
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-5">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Tickets By Request Type</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="chartjs-two"><canvas id="chartJS2"></canvas></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Overall Rating</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="d-flex align-items-baseline gap-2 mb-0">
                <h1 class="card-value mb-0">4.8</h1>
                <div class="d-flex gap-1 text-warning fs-20">
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-half-fill"></i>
                </div>
              </div>
              <p class="fs-sm">Measures the quality or your support team’s efforts.</p>

              <table class="table table-ratings mb-0">
                <tbody>
                  <tr>
                    <td><strong>5.0</strong></td>
                    <td>
                      <div class="d-flex gap-1 text-warning fs-16">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                      </div>
                    </td>
                    <td>4,230</td>
                    <td>58%</td>
                  </tr>
                  <tr>
                    <td><strong>4.0</strong></td>
                    <td>
                      <div class="d-flex gap-1 text-warning fs-16">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                      </div>
                    </td>
                    <td>1,416</td>
                    <td>24%</td>
                  </tr>
                  <tr>
                    <td><strong>3.0</strong></td>
                    <td>
                      <div class="d-flex gap-1 text-warning fs-16">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </div>
                    </td>
                    <td>980</td>
                    <td>16%</td>
                  </tr>
                  <tr>
                    <td><strong>2.0</strong></td>
                    <td>
                      <div class="d-flex gap-1 text-warning fs-16">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </div>
                    </td>
                    <td>798</td>
                    <td>12%</td>
                  </tr>
                  <tr>
                    <td><strong>1.0</strong></td>
                    <td>
                      <div class="d-flex gap-1 text-warning fs-16">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </div>
                    </td>
                    <td>401</td>
                    <td>8%</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Performance Score</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="d-flex align-items-baseline gap-2 mb-0">
                <h1 class="card-value mb-0">9.6</h1>
                <div class="progress flex-fill ht-5">
                  <div class="progress-bar w-20" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-success w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-warning w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-info w-20" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar bg-danger w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <p class="fs-sm">The percentage value assigned to the operating metric.</p>

              <table class="table table-ratings mb-0">
                <tbody>
                  <tr>
                    <td><span class="badge-dot bg-primary"></span></td>
                    <td><strong>Excellent</strong></td>
                    <td>3,007</td>
                    <td>50%</td>
                  </tr>
                  <tr>
                    <td><span class="badge-dot bg-success"></span></td>
                    <td><strong>Very Good</strong></td>
                    <td>1,674</td>
                    <td>25%</td>
                  </tr>
                  <tr>
                    <td><span class="badge-dot bg-warning"></span></td>
                    <td><strong>Good</strong></td>
                    <td>125</td>
                    <td>6%</td>
                  </tr>
                  <tr>
                    <td><span class="badge-dot bg-info"></span></td>
                    <td><strong>Fair</strong></td>
                    <td>98</td>
                    <td>5%</td>
                  </tr>
                  <tr>
                    <td><span class="badge-dot bg-danger"></span></td>
                    <td><strong>Poor</strong></td>
                    <td>512</td>
                    <td>10%</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-12">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Agent Performance Score</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div id="apexChart2" class="apex-chart-four mb-5"></div>
              <div class="table-responsive">
                <table class="table table-agent mb-0">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ck0">
                          <label class="form-check-label" for="ck0"></label>
                        </div>
                      </th>
                      <th>Agent ID</th>
                      <th>Agent Name</th>
                      <th>Status</th>
                      <th>Quota</th>
                      <th>Reached</th>
                      <th>Progress</th>
                      <th>Rating</th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ck1">
                          <label class="form-check-label" for="ck1"></label>
                        </div>
                      </td>
                      <td><span class="ff-numerals">00035</span></td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                          <div>
                            <h6 class="mb-0">Allan R. Palban</h6>
                            <span class="fs-xs text-secondary">allan@themepixels.me</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td><span class="ff-numerals">120</span></td>
                      <td><span class="ff-numerals">64</span></td>
                      <td>
                        <div class="progress ht-5 mb-0">
                          <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1 text-warning">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-half-fill"></i>
                          <i class="ri-star-line"></i>
                        </div>
                      </td>
                      <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ck2">
                          <label class="form-check-label" for="ck2"></label>
                        </div>
                      </td>
                      <td><span class="ff-numerals">00028</span></td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                          <div>
                            <h6 class="card-label mb-0">Charlene S. Plateros</h6>
                            <span class="fs-xs text-secondary">charlene@themepixels.me</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge bg-info">Away</span></td>
                      <td><span class="ff-numerals">100</span></td>
                      <td><span class="ff-numerals">79</span></td>
                      <td>
                        <div class="progress ht-5 mb-0">
                          <div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1 text-warning">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-line"></i>
                        </div>
                      </td>
                      <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ck3">
                          <label class="form-check-label" for="ck3"></label>
                        </div>
                      </td>
                      <td><span class="ff-numerals">00025</span></td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                          <div>
                            <h6 class="mb-0">Adrian M. Monino</h6>
                            <span class="fs-xs text-secondary">adrian@themepixels.me</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td><span class="ff-numerals">130</span></td>
                      <td><span class="ff-numerals">108</span></td>
                      <td>
                        <div class="progress ht-5 mb-0">
                          <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1 text-warning">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-line"></i>
                          <i class="ri-star-line"></i>
                        </div>
                      </td>
                      <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ck4">
                          <label class="form-check-label" for="ck4"></label>
                        </div>
                      </td>
                      <td><span class="ff-numerals">00024</span></td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                          <div>
                            <h6 class="card-label mb-0">Marianne B. Audrey</h6>
                            <span class="fs-xs text-secondary">marianne@themepixels.me</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">Pending</span></td>
                      <td><span class="ff-numerals">110</span></td>
                      <td><span class="ff-numerals">45</span></td>
                      <td>
                        <div class="progress ht-5 mb-0">
                          <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1 text-warning">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-line"></i>
                        </div>
                      </td>
                      <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ck5">
                          <label class="form-check-label" for="ck5"></label>
                        </div>
                      </td>
                      <td><span class="ff-numerals">00023</span></td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                          <div>
                            <h6 class="mb-0">Carlyn Y. Salomon</h6>
                            <span class="fs-xs text-secondary">carlyn@themepixels.me</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="badge bg-secondary">Inactive</span></td>
                      <td><span class="ff-numerals">120</span></td>
                      <td><span class="ff-numerals">32</span></td>
                      <td>
                        <div class="progress ht-5 mb-0">
                          <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex gap-1 text-warning">
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-fill"></i>
                          <i class="ri-star-half-fill"></i>
                          <i class="ri-star-line"></i>
                        </div>
                      </td>
                      <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
      </div><!-- row -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/chart.js/chart.min.js"></script>
    <script src="../lib/apexcharts/apexcharts.min.js"></script>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/db.data.js"></script>
    <script src="../assets/js/db.helpdesk.js"></script>

  </body>
</html>
@endsection