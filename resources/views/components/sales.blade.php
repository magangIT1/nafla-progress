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
    <link rel="stylesheet" href="../lib/jqvmap/jqvmap.min.css">
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
      <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
          <ol class="breadcrumb fs-sm mb-1">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
          </ol>
          <h4 class="main-title mb-0">Welcome to Dashboard</h4>
        </div>

        <nav class="nav nav-icon nav-icon-lg">
          <a href="" class="nav-link" data-bs-toggle="tooltip" title="Share"><i class="ri-share-line"></i></a>
          <a href="" class="nav-link" data-bs-toggle="tooltip" title="Print"><i class="ri-printer-line"></i></a>
          <a href="" class="nav-link" data-bs-toggle="tooltip" title="Report"><i class="ri-bar-chart-2-line"></i></a>
        </nav>
      </div>

      <div class="row g-3">
        <div class="col-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body">
              <label class="card-title fs-sm fw-medium mb-1">Unique Purchases</label>
              <h3 class="card-value mb-1"><i class="ri-shopping-bag-3-line"></i> 8,327</h3>
              <small><span class="d-inline-flex text-danger">0.7% <i class="ri-arrow-down-line"></i></span> than last week</small>
            </div><!-- card-body -->
          </div><!-- card-one -->
        </div><!-- col -->
        <div class="col-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body">
              <label class="card-title fs-sm fw-medium mb-1">Order Value</label>
              <h3 class="card-value mb-1"><i class="ri-briefcase-4-line"></i> <span>$</span>12,105</h3>
              <small><span class="d-inline-flex text-success">2.1% <i class="ri-arrow-up-line"></i></span> than last week</small>
            </div><!-- card-body -->
          </div><!-- card-one -->
        </div><!-- col -->
        <div class="col-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body">
              <label class="card-title fs-sm fw-medium mb-1">Order Quantity</label>
              <h3 class="card-value mb-1"><i class="ri-inbox-line"></i> 4,598</h3>
              <small><span class="d-inline-flex text-danger">0.3% <i class="ri-arrow-down-line"></i></span> than last week</small>
            </div><!-- card-body -->
          </div><!-- card-one -->
        </div><!-- col -->
        <div class="col-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body">
              <label class="card-title fs-sm fw-medium mb-1">Conversion Rate</label>
              <h3 class="card-value mb-1"><i class="ri-bar-chart-box-line"></i> 6.28<span>%</span></h3>
              <small><span class="d-inline-flex text-success">1.2% <i class="ri-arrow-up-line"></i></span> than last week</small>
            </div><!-- card-body -->
          </div><!-- card-one -->
        </div><!-- col -->
        <div class="col-xl-7">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Monthly Growth Revenue</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <ul class="legend mb-3">
                <li>Growth Actual</li>
                <li>Actual</li>
                <li>Plan</li>
              </ul>
              <div id="apexChart1" class="apex-chart-one mb-4"></div>
              <div class="p-2">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <h3 class="card-value mb-2"><span>$</span>834,631.18</h3>
                    <label class="card-title fw-semibold text-dark mb-2">Monthly Revenue Growth</label>
                    <p class="mb-0 fs-xs text-secondary">Measure how fast you’re growing monthly recurring revenue.</p>
                  </div><!-- col -->
                  <div class="col-sm-6">
                    <h3 class="card-value mb-2"><span>$</span>19,204.15</h3>
                    <label class="card-title fw-semibold text-dark mb-2">Monthly Revenue/Customer</label>
                    <p class="mb-0 fs-xs text-secondary">The revenue generated per account on a monthly or yearly basis.</p>
                  </div><!-- col -->
                </div><!-- row -->
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-5">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Account Retention</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div id="apexChart2" class="apex-chart-one mb-3"></div>
              <p class="mb-3 fs-xs">Number of customers who have active subscription with you.</p>

              <div class="card p-3 d-flex flex-row mb-2">
                <div class="card-icon bg-primary"><i class="ri-bar-chart-grouped-line"></i></div>
                <div class="ms-3">
                  <h4 class="card-value mb-1">53,100</h4>
                  <label class="card-title fw-medium text-dark mb-1">Expansions</label>
                  <p class="fs-xs text-secondary mb-0 lh-4">Customers who have upgraded the level of your products or service.</p>
                </div>
              </div>
              <div class="card p-3 d-flex flex-row">
                <div class="card-icon bg-ui-02"><i class="ri-bar-chart-grouped-line"></i></div>
                <div class="ms-3">
                  <h4 class="card-value mb-1">2,884</h4>
                  <label class="card-title fw-medium text-dark mb-1">Cancellations</label>
                  <p class="fs-xs text-secondary mb-0 lh-4">Customers who have ended their subscription with you.</p>
                </div>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Real Time Sales</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="chart-bar-one"><canvas id="chartBar1"></canvas></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Recent Sellers</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-0">
              <ul class="people-group">
                <li class="people-item">
                  <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                  <div class="people-body">
                    <h6><a href="">Allan Rey Palban</a></h6>
                    <span>Customer ID#00222</span>
                  </div><!-- people-body -->
                  <nav class="nav nav-icon">
                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                  </nav>
                </li>
                <li class="people-item">
                  <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                  <div class="people-body">
                    <h6><a href="">Adrian Moniño</a></h6>
                    <span>Customer ID#00221</span>
                  </div><!-- people-body -->
                  <nav class="nav nav-icon">
                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                  </nav>
                </li>
                <li class="people-item">
                  <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                  <div class="people-body">
                    <h6><a href="">Charlene Plateros</a></h6>
                    <span>Customer ID#00220</span>
                  </div><!-- people-body -->
                  <nav class="nav nav-icon">
                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                  </nav>
                </li>
                <li class="people-item">
                  <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                  <div class="people-body">
                    <h6><a href="">Analyn Mercado</a></h6>
                    <span>Customer ID#00219</span>
                  </div><!-- people-body -->
                  <nav class="nav nav-icon">
                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                  </nav>
                </li>
                <li class="people-item">
                  <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div>
                  <div class="people-body">
                    <h6><a href="">Rolando Paloso</a></h6>
                    <span>Customer ID#00218</span>
                  </div><!-- people-body -->
                  <nav class="nav nav-icon">
                    <a href="" class="nav-link"><i class="ri-user-star-line"></i></a>
                    <a href="" class="nav-link"><i class="ri-contacts-line"></i></a>
                  </nav>
                </li>
              </ul>
            </div><!-- card-body -->
            <div class="card-footer d-flex justify-content-center">
              <a href="" class="fs-sm">Manage Customers</a>
            </div><!-- card-footer -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Transaction History</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-0">
              <ul class="people-group">
                <li class="people-item">
                  <div class="avatar"><span class="avatar-initial bg-teal fs-20"><i class="ri-shopping-cart-line"></i></span></div>
                  <div class="people-body">
                    <h6><a href="">Purchase from #10322</a></h6>
                    <span>Oct 21, 2023, 3:30pm</span>
                  </div><!-- people-body -->
                  <div class="text-end">
                    <div class="fs-sm">+ $250.00</div>
                    <span class="d-block fs-xs text-success">Completed</span>
                  </div>
                </li>
                <li class="people-item">
                  <div class="avatar"><span class="avatar-initial bg-info fs-20"><i class="ri-coins-line"></i></span></div>
                  <div class="people-body">
                    <h6><a href="">Process refund to #00910</a></h6>
                    <span>Oct 19, 2023, 3:30pm</span>
                  </div><!-- people-body -->
                  <div class="text-end">
                    <div class="fs-sm">- $16.50</div>
                    <span class="d-block fs-xs text-warning">Processing</span>
                  </div>
                </li>
                <li class="people-item">
                  <div class="avatar"><span class="avatar-initial bg-primary fs-20"><i class="ri-truck-line"></i></span></div>
                  <div class="people-body">
                    <h6><a href="">Process delivery to #44333</a></h6>
                    <span>Oct 18, 2023, 6:18pm</span>
                  </div><!-- people-body -->
                  <div class="text-end">
                    <div class="fs-sm">3 Items</div>
                    <span class="d-block fs-xs text-info">For pickup</span>
                  </div>
                </li>
                <li class="people-item">
                  <div class="avatar"><span class="avatar-initial bg-pink fs-20"><i class="ri-truck-line"></i></span></div>
                  <div class="people-body">
                    <h6><a href="">Payment from #023328</a></h6>
                    <span>Oct 18, 2023, 12:40pm</span>
                  </div><!-- people-body -->
                  <div class="text-end">
                    <div class="fs-sm">+ $129.50</div>
                    <span class="d-block fs-xs text-success">Completed</span>
                  </div>
                </li>
                <li class="people-item">
                  <div class="avatar"><span class="avatar-initial bg-secondary fs-20"><i class="ri-secure-payment-line"></i></span></div>
                  <div class="people-body">
                    <h6><a href="">Payment failed #087651</a></h6>
                    <span>Oct 15, 2023, 08:09am</span>
                  </div><!-- people-body -->
                  <div class="text-end">
                    <div class="fs-sm">$150.20</div>
                    <span class="d-block fs-xs text-danger">Declined</span>
                  </div>
                </li>
              </ul>
            </div><!-- card-body -->
            <div class="card-footer d-flex justify-content-center">
              <a href="" class="fs-sm">Manage Transactions</a>
            </div><!-- card-footer -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-5">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Sales Revenue</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3 p-xl-4">
              <div id="vmap" class="ht-200 mb-4"></div>

              <table class="table table-one">
                <thead>
                  <tr>
                    <th>States</th>
                    <th>Orders</th>
                    <th>Earnings</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="fw-medium"><span class="badge-dot bg-twitter me-2"></span> California</td>
                    <td>12,201</td>
                    <td>$150,200.80</td>
                  </tr>
                  <tr>
                    <td class="fw-medium"><span class="badge-dot bg-primary me-2"></span> Texas</td>
                    <td>11,950</td>
                    <td>$138,910.20</td>
                  </tr>
                  <tr>
                    <td class="fw-medium"><span class="badge-dot bg-teal me-2"></span> Colorado</td>
                    <td>11,198</td>
                    <td>$132,050.00</td>
                  </tr>
                  <tr>
                    <td class="fw-medium"><span class="badge-dot bg-info me-2"></span> Missouri</td>
                    <td>9,885</td>
                    <td>$127,762.10</td>
                  </tr>
                  <tr>
                    <td class="fw-medium"><span class="badge-dot bg-pink me-2"></span> New York</td>
                    <td>8,560</td>
                    <td>$117,087.50</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-7">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Most Recent Earnings</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3 p-xl-4">
              <div class="row g-3 mb-4">
                <div class="col">
                  <div class="earning-item">
                    <div class="earning-icon bg-primary"><i class="ri-medal-2-line"></i></div>
                    <h4><span>$</span>1,958,104</h4>
                    <label>Gross Earnings</label>
                  </div><!-- earning-item -->
                </div><!-- col -->
                <div class="col">
                  <div class="earning-item">
                    <div class="earning-icon bg-twitter"><i class="ri-pie-chart-line"></i></div>
                    <h4><span>$</span>234,769.50</h4>
                    <label>Tax Witheld</label>
                  </div><!-- earning-item -->
                </div><!-- col -->
                <div class="col">
                  <div class="earning-item">
                    <div class="earning-icon bg-success"><i class="ri-line-chart-fill"></i></div>
                    <h4><span>$</span>1,608,469.50</h4>
                    <label>Net Earnings</label>
                  </div><!-- earning-item -->
                </div><!-- col -->
              </div><!-- row -->

              <div class="table-responsive mb-4">
                <table class="table table-two mb-0">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Sales Count</th>
                      <th>Gross Earnings</th>
                      <th>Tax Withheld</th>
                      <th>% Earnings</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>03/05/2023</td>
                      <td>1,050</td>
                      <td class="text-success">+ $32,580.00</td>
                      <td class="text-danger">- $3,023.10</td>
                      <td>4.5%</td>
                    </tr>
                    <tr>
                      <td>03/04/2023</td>
                      <td>980</td>
                      <td class="text-success">+ $30,065.10</td>
                      <td class="text-danger">- $2,780.00</td>
                      <td>3.8%</td>
                    </tr>
                    <tr>
                      <td>03/04/2023</td>
                      <td>954</td>
                      <td class="text-success">+ $28,994.00</td>
                      <td class="text-danger">- $2,540.60</td>
                      <td>3.3%</td>
                    </tr>
                    <tr>
                      <td>03/02/2023</td>
                      <td>792</td>
                      <td class="text-success">+ $25,300.90</td>
                      <td class="text-danger">- $2,144.60</td>
                      <td>2.9%</td>
                    </tr>
                    <tr>
                      <td>02/28/2023</td>
                      <td>788</td>
                      <td class="text-success">+ $24,887.08</td>
                      <td class="text-danger">- $1,980.00</td>
                      <td>2.6%</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
              <h6 class="fw-semibold mb-1"><a href="#">Download your earnings in CSV format.</a></h6>
              <p class="fs-sm text-secondary mb-0">Open it in a spreadsheet and perform your own calculations, graphing etc. The CSV file contains additional details, such as the buyer location. </p>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
      </div><!-- row -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/chart.js/chart.min.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="../lib/apexcharts/apexcharts.min.js"></script>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/db.data.js"></script>
    <script src="../assets/js/db.sales.js"></script>
  </body>
</html>
@endsection