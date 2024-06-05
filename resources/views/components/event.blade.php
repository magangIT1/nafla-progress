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

    <div class="main main-app p-3 p-lg-4">
      <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <ol class="breadcrumb fs-sm mb-1">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Events Management</li>
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
        <div class="col-xl-6">
          <div class="card card-one card-ticket-earnings">
            <div class="card-body d-flex flex-column p-4">
              <h1 class="card-value mb-3 fs-40 ls--2"><span>$</span>14,869.95</h1>
              <label class="card-label fw-semibold text-dark mb-1">Ticket Earnings</label>
              <p class="w-75 fs-sm text-secondary mb-4">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
              <p class="mb-5"><a href="" class="btn fs-sm btn-primary">View Statements</a></p>

              <div class="d-flex gap-4 fs-sm mt-auto text-primary-dark lh-1 opacity-75">
                <span><strong class="fw-semibold ff-numerals">11,716</strong> Tickets Sold</span>
                <span><strong class="fw-semibold ff-numerals">12,864</strong> Tickets Unsold</span>
              </div>
            </div><!-- card-body -->
            <div id="apexChart1" class="apex-chart-two d-flex align-items-end"></div>
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-6">
          <div class="row g-3">
            <div class="col-12">
              <div class="card card-one card-ticket-available">
                <div class="card-body p-4">
                  <div class="d-flex justify-content-end">
                    <div class="w-45">
                      <h1 class="card-value fs-32 mb-2 ls--1">24,580</h1>
                      <label class="card-label fw-semibold text-dark mb-1">Tickets Available</label>
                      <p class="text-secondary fs-sm mb-0">Cura bitur ullam corper ultri cies nisi nam eget dui etiam rhoncus.</p>
                    </div>
                  </div>
                </div><!-- card-body -->
                <div id="apexChart2" class="apex-chart"></div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-sm-6">
              <div class="card card-one card-ticket-sold">
                <div class="card-body p-4">
                  <div class="d-flex flex-column align-items-center">
                    <h1 class="card-value fs-32 mb-2 ls--1">11,716</h1>
                    <label class="card-label fw-semibold text-dark mb-1">Tickets Sold</label>
                    <p class="text-secondary text-center fs-sm mb-0">Ullam corper ultricies cura bitur nisi nam eget dui etia.</p>
                  </div>
                </div><!-- card-body -->
                <div id="apexChart3" class="apex-chart"></div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-sm-6">
              <div class="card card-one card-ticket-sold">
                <div class="card-body p-4">
                  <div class="d-flex flex-column align-items-center">
                    <h1 class="card-value fs-32 mb-2 ls--1">12,864</h1>
                    <label class="card-label fw-semibold text-dark mb-1">Tickets Unsold</label>
                    <p class="text-secondary text-center fs-sm mb-0">Nam libero tempore, cum soluta nobis est eligendi.</p>
                  </div>
                </div><!-- card-body -->
                <div id="apexChart4" class="apex-chart"></div>
              </div><!-- card -->
            </div><!-- col -->
          </div>
        </div><!-- col -->
        <div class="col-xl-8">
          <div class="row g-3">
            <div class="col-6 col-sm">
              <div class="card card-one">
                <div class="card-body p-3">
                  <div class="d-block fs-40 lh-1 text-primary mb-1"><i class="ri-calendar-todo-line"></i></div>
                  <h1 class="card-value mb-0 ls--1 fs-32">358</h1>
                  <label class="d-block mb-1 fw-medium text-dark">Scheduled Events</label>
                  <small><span class="d-inline-flex text-danger">0.7% <i class="ri-arrow-down-line"></i></span> than last week</small>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-6 col-sm">
              <div class="card card-one">
                <div class="card-body p-3">
                  <div class="d-block fs-40 lh-1 text-ui-02 mb-1"><i class="ri-calendar-check-line"></i></div>
                  <h1 class="card-value mb-0 fs-32 ls--1">260</h1>
                  <label class="d-block mb-1 fw-medium text-dark">Attended Events</label>
                  <small><span class="d-inline-flex text-success">1.2% <i class="ri-arrow-up-line"></i></span> than last week</small>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-sm">
              <div class="card card-one">
                <div class="card-body p-3">
                  <div class="d-block fs-40 lh-1 text-secondary mb-1"><i class="ri-calendar-2-line"></i></div>
                  <h1 class="card-value mb-0 fs-32 ls--1">38</h1>
                  <label class="d-block mb-1 fw-medium text-dark">Cancelled Events</label>
                  <small><span class="d-inline-flex text-success">0.6% <i class="ri-arrow-up-line"></i></span> than last week</small>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-12">
              <div class="card card-one">
                <div class="card-header">
                  <h6 class="card-title">Performance Reached</h6>
                  <nav class="nav nav-icon nav-icon-sm ms-auto">
                    <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                  </nav>
                </div><!-- card-header -->
                <div class="card-body px-3 pt-2">
                  <div id="apexChart5" class="apex-chart-three"></div>
                  <div class="table-responsive">
                    <table class="table table-agent mb-0">
                      <thead>
                        <tr>
                          <th>PerID</th>
                          <th>Name of Performer</th>
                          <th>Status</th>
                          <th>Quota</th>
                          <th>Reached</th>
                          <th>Rating</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="ff-numerals">00035</span></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="avatar"><span class="avatar-initial">A</span></div>
                              <div>
                                <h6 class="mb-0">Allan R. Palban</h6>
                                <span class="fs-xs text-secondary">allan@themepixels.me</span>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Active</span></td>
                          <td><span class="ff-numerals">120</span></td>
                          <td><span class="ff-numerals">64</span></td>
                          <td>
                            <div class="d-flex gap-1 text-primary fs-16">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                              <i class="ri-star-line"></i>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="ff-numerals">00028</span></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="avatar"><span class="avatar-initial">C</span></div>
                              <div>
                                <h6 class="card-label mb-0">Charlene S. Plateros</h6>
                                <span class="fs-xs text-secondary">charlene@themepixels.me</span>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-ui-02">Away</span></td>
                          <td><span class="ff-numerals">100</span></td>
                          <td><span class="ff-numerals">79</span></td>
                          <td>
                            <div class="d-flex gap-1 text-primary fs-16">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-line"></i>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="ff-numerals">00025</span></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="avatar"><span class="avatar-initial bg-gray-700">A</span></div>
                              <div>
                                <h6 class="mb-0">Adrian M. Monino</h6>
                                <span class="fs-xs text-secondary">adrian@themepixels.me</span>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Active</span></td>
                          <td><span class="ff-numerals">130</span></td>
                          <td><span class="ff-numerals">108</span></td>
                          <td>
                            <div class="d-flex gap-1 text-primary fs-16">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-line"></i>
                              <i class="ri-star-line"></i>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="ff-numerals">00024</span></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="avatar"><span class="avatar-initial">M</span></div>
                              <div>
                                <h6 class="card-label mb-0">Marianne B. Audrey</h6>
                                <span class="fs-xs text-secondary">marianne@themepixels.me</span>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge bg-primary">Active</span></td>
                          <td><span class="ff-numerals">110</span></td>
                          <td><span class="ff-numerals">45</span></td>
                          <td>
                            <div class="d-flex gap-1 text-primary fs-16">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-line"></i>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="ff-numerals">00023</span></td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <div class="avatar"><span class="avatar-initial bg-gray-700">C</span></div>
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
                            <div class="d-flex gap-1 text-primary fs-16">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                              <i class="ri-star-line"></i>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- col -->
        <div class="col-xl-4">
          <div class="row g-3">
            <div class="col-md-6 col-xl-12">
              <div class="card card-one">
                <div class="card-header">
                  <h6 class="card-title">Performance Rating</h6>
                  <nav class="nav nav-icon nav-icon-sm ms-auto">
                    <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                  </nav>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="d-flex align-items-baseline gap-2 mb-0">
                    <h1 class="card-value fs-32 mb-0">4.8</h1>
                    <div class="d-flex gap-1 text-primary fs-20">
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-half-fill"></i>
                    </div>
                  </div>
                  <p class="fs-sm">Measures the quality or your event's performance.</p>

                  <table class="table table-ratings mb-0">
                    <tbody>
                      <tr>
                        <td><strong>5.0</strong></td>
                        <td>
                          <div class="d-flex gap-1 text-primary fs-16">
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
                          <div class="d-flex gap-1 text-primary fs-16">
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
                          <div class="d-flex gap-1 text-primary fs-16">
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
                          <div class="d-flex gap-1 text-primary fs-16">
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
                          <div class="d-flex gap-1 text-primary fs-16">
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
            <div class="col-md-6 col-xl-12">
              <div class="card card-one">
                <div class="card-header">
                  <h6 class="card-title">Events Categories</h6>
                  <nav class="nav nav-icon nav-icon-sm ms-auto">
                    <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
                  </nav>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="chartjs-three"><canvas id="chartJS1"></canvas></div>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one card-events-category">
            <div class="card-header">
              <h6 class="card-title">Events By Category</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="chart-donut-two mb-4"><canvas id="chartDonut"></canvas></div>
              <div class="row g-4">
                <div class="col-6">
                  <label class="fs-sm fw-medium mb-1">Festivals</label>
                  <h3 class="card-value mb-2">6,000 <small>40%</small></h3>
                  <div class="progress ht-5 mb-0">
                    <div class="progress-bar w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><!-- col -->
                <div class="col-6">
                  <label class="fs-sm fw-medium mb-1">Sports</label>
                  <h3 class="card-value mb-2">3,750 <small>25%</small></h3>
                  <div class="progress ht-5 mb-0">
                    <div class="progress-bar bg-ui-02 w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><!-- col -->
                <div class="col-6">
                  <label class="fs-sm fw-medium mb-1">Concerts</label>
                  <h3 class="card-value mb-2">3,000 <small>20%</small></h3>
                  <div class="progress ht-5 mb-0">
                    <div class="progress-bar bg-gray-700 w-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><!-- col -->
                <div class="col-6">
                  <label class="fs-sm fw-medium mb-1">Concerts</label>
                  <h3 class="card-value mb-2">2,250 <small>15%</small></h3>
                  <div class="progress ht-5 mb-0">
                    <div class="progress-bar bg-gray-500 w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Overall Reviews</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="d-flex align-items-baseline gap-2 mb-0">
                <h1 class="card-value fs-32 mb-0">8.3</h1>
                <div class="d-flex gap-1 text-primary fs-20">
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-fill"></i>
                  <i class="ri-star-half-fill"></i>
                </div>
              </div>

              <p class="fs-sm mb-3">Measures the overall reviews and ratings of your event's performance.</p>

              <ul class="events-reviews">
                <li>
                  <div class="d-flex align-items-center mb-2">
                    <div class="avatar"><span class="avatar-initial bg-primary">D</span></div>
                    <div class="review-body">
                      <h6 class="text-dark">Dyanne Rose Aceron</h6>
                      <div class="d-flex align-items-center gap-1 text-primary">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <small>2 hours ago</small>
                      </div>
                    </div><!-- review-body -->
                  </div>
                  <p>Lorem ipsum dolor sit amet, consec tetur adip iscing elit, sed do eius mod...<a href="">Read more</a></p>
                </li>
                <li>
                  <div class="d-flex align-items-center mb-2">
                    <div class="avatar"><span class="avatar-initial bg-secondary">R</span></div>
                    <div class="review-body">
                      <h6 class="text-dark">Raffy Godinez</h6>
                      <div class="d-flex align-items-center gap-1 text-primary">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <i class="ri-star-line"></i>
                        <small>5 hours ago</small>
                      </div>
                    </div><!-- review-body -->
                  </div>
                  <p>Ut enim ad minim veniam, quis nostrud exerc nisi ut aliquip itation ullam co...<a href="">Read more</a></p>
                </li>
                <li>
                  <div class="d-flex align-items-center mb-2">
                    <div class="avatar"><span class="avatar-initial bg-secondary">R</span></div>
                    <div class="review-body">
                      <h6 class="text-dark">Reynante Labares</h6>
                      <div class="d-flex align-items-center gap-1 text-primary">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <i class="ri-star-line"></i>
                        <small>8 hours ago</small>
                      </div>
                    </div><!-- review-body -->
                  </div>
                  <p>Quis nostrud exerc nisi ut aliquip itation ut enim ad minim veniam ullam co...<a href="">Read more</a></p>
                </li>
              </ul>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Events This Month</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <ul class="events-list">
                <li class="active">
                  <div class="event-date">
                    <small>Sat</small>
                    <h5>03</h5>
                  </div><!-- event-date -->
                  <div class="events-body">
                    <div class="ev-item">
                      <small>08:00am - 10:30am</small>
                      <h6>Web Design Workshop</h6>
                      <p>Duis aute irure dolor in repre hen derit in volup tate velit esse cillum.</p>
                    </div><!-- event-item -->
                  </div><!-- events-body -->
                </li>
                <li>
                  <div class="event-date">
                    <small>Wed</small>
                    <h5>07</h5>
                  </div><!-- event-date -->
                  <div class="events-body">
                    <div class="ev-item">
                      <small>08:00am - 11:30am</small>
                      <h6>5th Religious Conference</h6>
                      <p>Excep teur sint occae cat cupi datat non proident sunt in culpa qui.</p>
                    </div><!-- event-item -->
                    <div class="ev-item">
                      <small>1:30pm - 5:30pm</small>
                      <h6>Church Workshop Events</h6>
                      <p>Datat non proident sunt in culpa qui.</p>
                    </div><!-- event-item -->
                  </div><!-- events-body -->
                </li>
                <li>
                  <div class="event-date">
                    <small>Thu</small>
                    <h5>08</h5>
                  </div><!-- event-date -->
                  <div class="events-body">
                    <div class="ev-item">
                      <small>08:30am - 03:30pm</small>
                      <h6>Front-End Devs Meetup</h6>
                      <p>Sed ut perspi ciatis unde omnis iste natus error sit volup tatem.</p>
                    </div><!-- event-item -->
                  </div><!-- events-body -->
                </li>
                <li>
                  <div class="event-date">
                    <small>Mon</small>
                    <h5>23</h5>
                  </div><!-- event-date -->
                  <div class="events-body">
                    <div class="ev-item">
                      <small>09:00am - 05:30pm</small>
                      <h6 class="mb-0">Golden Autumn Festival</h6>
                    </div><!-- event-item -->
                  </div><!-- events-body -->
                </li>
              </ul>
            </div>
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
    <script src="../assets/js/db.events.js"></script>

  </body>
</html>
@endsection
