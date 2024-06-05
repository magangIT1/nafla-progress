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
    <link rel="stylesheet" href="../lib/cryptofont/css/cryptofont.min.css">
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
            <li class="breadcrumb-item active" aria-current="page">Cryptocurrency</li>
          </ol>
          <h4 class="main-title mb-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex gap-2 mt-3 mt-md-0">
          <button type="button" class="btn btn-white d-flex align-items-center gap-2"><i class="ri-share-line fs-18 lh-1"></i>Share</button>
          <button type="button" class="btn btn-white d-flex align-items-center gap-2"><i class="ri-printer-line fs-18 lh-1"></i>Print</button>
          <button type="button" class="btn btn-primary d-flex align-items-center gap-2"><i class="ri-bar-chart-2-line fs-18 lh-1"></i>Generate<span class="d-none d-sm-inline"> Report</span></button>
        </div>
      </div>

      <div class="row g-3">
        <div class="col-sm-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body overflow-hidden px-0">
              <div class="crypto-item">
                <div class="avatar bg-orange"><i class="cf cf-btc"></i></div>
                <div class="crypto-body">
                  <label class="card-label">Bitcoin <span>(BTC)</span></label>
                  <h6 class="card-value">$3,972.87</h6>
                </div><!-- crypto-body -->
              </div><!-- crypto-item -->
              <div id="apexChart1" class="apex-chart-ten"></div>
            </div><!-- card-body -->
            <div class="card-footer card-footer-crypto pt-0">
              <div><strong>12</strong> USD Markets</div>
              <div><strong>80</strong> BTC Markets</div>
            </div><!-- card-footer -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body overflow-hidden px-0">
              <div class="crypto-item">
                <div class="avatar bg-twitter"><i class="cf cf-etc"></i></div>
                <div class="crypto-body">
                  <label class="card-label">Ethereum <span>(ETC)</span></label>
                  <h6 class="card-value">$136.99</h6>
                </div><!-- crypto-body -->
              </div><!-- crypto-item -->
              <div id="apexChart2" class="apex-chart-ten"></div>
            </div><!-- card-body -->
            <div class="card-footer card-footer-crypto pt-0">
              <div><strong>10</strong> USD Markets</div>
              <div><strong>65</strong> ETH Markets</div>
            </div><!-- card-footer -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body overflow-hidden px-0">
              <div class="crypto-item">
                <div class="avatar bg-success"><i class="cf cf-btc"></i></div>
                <div class="crypto-body">
                  <label class="card-label">Bitcoin Cash <span>(BCH)</span></label>
                  <h6 class="card-value">$160.43</h6>
                </div><!-- crypto-body -->
              </div><!-- crypto-item -->
              <div id="apexChart3" class="apex-chart-ten"></div>
            </div><!-- card-body -->
            <div class="card-footer card-footer-crypto pt-0">
              <div><strong>12</strong> USD Markets</div>
              <div><strong>74</strong> BCH Markets</div>
            </div><!-- card-footer -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-3">
          <div class="card card-one">
            <div class="card-body overflow-hidden px-0">
              <div class="crypto-item">
                <div class="avatar bg-primary"><i class="cf cf-dash"></i></div>
                <div class="crypto-body">
                  <label class="card-label">Dash <span>(DASH)</span></label>
                  <h6 class="card-value">$90.58</h6>
                </div><!-- crypto-body -->
              </div><!-- crypto-item -->
              <div id="apexChart4" class="apex-chart-ten"></div>
            </div><!-- card-body -->
            <div class="card-footer card-footer-crypto pt-0">
              <div><strong>16</strong> USD Markets</div>
              <div><strong>31</strong> DASH Markets</div>
            </div><!-- card-footer -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-8">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Cryptocurrency Watchlist</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div id="apexChart5" class="apex-chart-nine mb-4"></div>
              <div class="row row-cols-auto gy-3 gx-5">
                <div class="col">
                  <label class="fs-xs mb-1 text-secondary">Market Cap</label>
                  <h4 class="ff-numerals text-dark mb-0">$14.5B</h4>
                </div><!-- col -->
                <div class="col">
                  <label class="fs-xs mb-1 text-secondary">Volume (24h)</label>
                  <h4 class="ff-numerals text-dark mb-0">$6.8B</h4>
                </div><!-- col -->
                <div class="col">
                  <label class="fs-xs mb-1 text-secondary">Change</label>
                  <h4 class="ff-numerals text-dark mb-0">$7.98</h4>
                </div><!-- col -->
                <div class="col">
                  <label class="fs-xs mb-1 text-secondary">Circulating Supply</label>
                  <h4 class="ff-numerals text-dark mb-0">$18.59M</h4>
                </div><!-- col -->
                <div class="col">
                  <label class="fs-xs mb-1 text-secondary">All Time High</label>
                  <h4 class="ff-numerals text-dark mb-0">$16.4K</h4>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Bitcoin Wallet</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <label class="card-title fw-medium fs-sm mb-1">Available Balance</label>
              <h3 class="card-value mb-1">26.00453100 <span class="text-secondary">BTC</span></h3>
              <div class="d-flex gap-2 ff-numerals fs-sm">
                <div><span class="text-primary">USD</span> $103,342.50</div>
                <div><span class="text-success">EUR</span> $91,105.00</div>
              </div>

              <div class="d-flex gap-2 mt-4 mb-4">
                <a href="" class="btn btn-white flex-fill">Send</a>
                <a href="" class="btn btn-primary flex-fill">Receive</a>
              </div>

              <div class="d-flex align-items-center justify-content-between fs-xs mb-1">
                <label class="mg-b-0 fw-medium text-secondary">Recent Transactions</label>
                <a href="">Show All</a>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 d-flex justify-content-between">
                  <span class="fw-medium">Received Bitcoin</span>
                  <span class="ff-numerals">+0.00003998 BTC</span>
                </li>
                <li class="list-group-item px-0 d-flex justify-content-between">
                  <span class="fw-medium">Sent Bitcoin</span>
                  <span class="ff-numerals">-0.01570525 BTC</span>
                </li>
                <li class="list-group-item px-0 d-flex justify-content-between">
                  <span class="fw-medium">Ethereum Conversion</span>
                  <span class="ff-numerals">+2.0157 ETH</span>
                </li>
                <li class="list-group-item px-0 d-flex justify-content-between">
                  <span class="fw-medium">Bought Bitcoin</span>
                  <span class="ff-numerals">+0.000033420 BTC</span>
                </li>
                <li class="list-group-item px-0 d-flex justify-content-between">
                  <span class="fw-medium">Sent Bitcoin</span>
                  <span class="ff-numerals">-0.01570525 BTC</span>
                </li>
              </ul>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Volume By Currency</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="chart-donut-one mb-3"><canvas id="chartDonut"></canvas></div>

              <table class="table table-five">
                <tbody>
                  <tr>
                    <td><div><span class="badge-dot bg-primary"></span> <span class="fw-medium">USD</span></div></td>
                    <td>4,024.52</td>
                    <td><div class="justify-content-end text-success">0.96% <i class="ri-arrow-up-line"></i></div></td>
                  </tr>
                  <tr>
                    <td><div><span class="badge-dot bg-ui-02"></span> <span class="fw-medium">EUR</span></div></td>
                    <td>3,539.23</td>
                    <td><div class="justify-content-end text-success">0.75% <i class="ri-arrow-up-line"></i></div></td>
                  </tr>
                  <tr>
                    <td><div><span class="badge-dot bg-teal"></span> <span class="fw-medium">CNY</span></div></td>
                    <td>27,499.4</td>
                    <td><div class="justify-content-end text-danger">-0.58% <i class="ri-arrow-down-line"></i></div></td>
                  </tr>
                  <tr>
                    <td><div><span class="badge-dot bg-info"></span> <span class="fw-medium">GBP</span></div></td>
                    <td>3,022.90</td>
                    <td><div class="justify-content-end text-danger">-0.69% <i class="ri-arrow-down-line"></i></div></td>
                  </tr>
                  <tr>
                    <td><div><span class="badge-dot bg-twitter"></span> <span class="fw-medium">NZD</span></div></td>
                    <td>444,814.7</td>
                    <td><div class="justify-content-end text-success">0.82% <i class="ri-arrow-up-line"></i></div></td>
                  </tr>
                  <tr class="d-none d-xl-table-row">
                    <td><div><span class="badge-dot bg-secondary"></span> <span class="fw-medium">KRW</span></div></td>
                    <td>4,491,099.6</td>
                    <td><div class="justify-content-end text-danger">-1.11% <i class="ri-arrow-down-line"></i></div></td>
                  </tr>
                  <tr class="d-none d-xl-table-row">
                    <td><div><span class="badge-dot bg-gray-400"></span> <span class="fw-medium">SGD</span></div></td>
                    <td>5,393.0</td>
                    <td><div class="justify-content-end text-success">0.66% <i class="ri-arrow-up-line"></i></div></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Portfolio</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="position-absolute p-1">
                <label class="fw-medium fs-sm mb-1">Total Balance</label>
                <h3 class="card-value"><span class="text-secondary">$</span>7,428.68</h3>
              </div>
              <div id="apexChart6" class="apex-chart-ten mb-4"></div>

              <ul class="list-group list-group-one">
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-gray-300 text-secondary"><i class="cf cf-btc"></i></div>
                  <div>
                    <h6 class="mb-0">Bitcoin</h6>
                    <small>BTC/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">0.7200 BTC</h6>
                    <small class="text-secondary">$2,907.71 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-gray-300 text-secondary"><i class="cf cf-eth"></i></div>
                  <div>
                    <h6 class="mb-0">Ethereum</h6>
                    <small>ETH/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">15.0030 ETH</h6>
                    <small class="text-secondary">$2,083.62 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-gray-300 text-secondary"><i class="cf cf-ltc"></i></div>
                  <div>
                    <h6 class="mb-0">Litecoin</h6>
                    <small>LTC/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">12.5021 LTC</h6>
                    <small class="text-secondary">$748.88 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-gray-300 text-secondary"><i class="cf cf-dash"></i></div>
                  <div>
                    <h6 class="mb-0">Dash</h6>
                    <small>DASH/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">16.5019 DASH</h6>
                    <small class="text-secondary">$1,521.97 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-gray-300 text-secondary"><i class="cf cf-btc"></i></div>
                  <div>
                    <h6 class="mb-0">Bitcoin Cash</h6>
                    <small>BCH/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">5.8120 BCH</h6>
                    <small class="text-secondary">$916.67 USD</small>
                  </div>
                </li>
              </ul>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Price Indexes</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <ul class="list-group list-group-one">
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-orange text-white"><i class="cf cf-btc"></i></div>
                  <div>
                    <h6 class="mb-0">Bitcoin</h6>
                    <small>BTC/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$4,000.19</h6>
                    <small class="text-success">0.27%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-twitter text-white"><i class="cf cf-eth"></i></div>
                  <div>
                    <h6 class="mb-0">Ethereum</h6>
                    <small>ETH/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$138.90</h6>
                    <small class="text-success">0.35%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-litecoin text-white"><i class="cf cf-ltc"></i></div>
                  <div>
                    <h6 class="mb-0">Litecoin</h6>
                    <small>LTC/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$59.95</h6>
                    <small class="text-success">0.05%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-success text-white"><i class="cf cf-btc"></i></div>
                  <div>
                    <h6 class="mb-0">Bitcoin Cash</h6>
                    <small>BCH/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$160.28</h6>
                    <small class="text-danger">-0.19%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-primary text-white"><i class="cf cf-dash"></i></div>
                  <div>
                    <h6 class="mb-0">Dash</h6>
                    <small>DASH/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$92.20</h6>
                    <small class="text-danger">-0.21%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-ui-02 text-white"><i class="cf cf-bsd"></i></div>
                  <div>
                    <h6 class="mb-0">Bitsend</h6>
                    <small>BSD/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$56.53</h6>
                    <small class="text-success">2.86%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-pink text-white"><i class="cf cf-bcn"></i></div>
                  <div>
                    <h6 class="mb-0">Bytecoin</h6>
                    <small>BCN/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$0.76</h6>
                    <small class="text-danger">-1.32%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-info text-white"><i class="cf cf-dmd"></i></div>
                  <div>
                    <h6 class="mb-0">Diamond</h6>
                    <small>DMD/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$280.80</h6>
                    <small class="text-success">2.01%</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar bg-danger text-white"><i class="cf cf-emc"></i></div>
                  <div>
                    <h6 class="mb-0">Emercoin</h6>
                    <small>EMC/USD</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">$48.25</h6>
                    <small class="text-success">1.22%</small>
                  </div>
                </li>
              </ul>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-7">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Cryptocurrency News</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="news-item">
                <div class="news-img"><img src="https://via.placeholder.com/640x426/4c5366/fff" class="img-fluid" alt=""></div>
                <div class="news-body">
                  <label class="d-block mb-1 fs-sm text-primary">Crypto Ninja</label>
                  <h6 class="news-title fw-semibold"><a href="" class="text-dark">Dow Futures, Bitcoin Teeter as Markets Wait for FOMC Bounce</a></h6>
                  <p class="news-text mb-0">As the unwelcome bearish momentum returns to all top cryptocurrency markets, most of this...</p>
                </div><!-- news-body -->
              </div><!-- news-item -->
              <div class="news-item">
                <div class="news-img"><img src="https://via.placeholder.com/640x384/4c5366/fff" class="img-fluid" alt=""></div>
                <div class="news-body">
                  <label class="d-block mb-1 fs-sm text-primary">Cable News Network</label>
                  <h6 class="news-title fw-semibold"><a href="" class="text-dark">XRP Price Remains Bearish as XRP/BTC Drops Below 7,800 Satoshi</a></h6>
                  <p class="news-text mb-0">Liquidity has shifted away from the top gaining crypto assets, with only six of the week’s 30 top performing...</p>
                </div><!-- news-body -->
              </div><!-- news-item -->
              <div class="news-item">
                <div class="news-img"><img src="https://via.placeholder.com/640x427/4c5366/fff" class="img-fluid" alt=""></div>
                <div class="news-body">
                  <label class="d-block mb-1 fs-sm text-primary">Bitcoin.com</label>
                  <h6 class="news-title fw-semibold"><a href="" class="text-dark">Bitcoin Price to $4500 soon? BTC Price Analysis</a></h6>
                  <p class="news-text mb-0">Published on CoinnounceTechnical Indicators: Support Level: $3900 Resistance Levels: $4100, $4200 Bitcoin...</p>
                </div><!-- news-body -->
              </div><!-- news-item -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-sm-12 col-xl-5">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Transactions</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body">
              <div class="divider divider-start fw-medium mt-0"><span>Today, October 20</span></div>
              <ul class="list-group list-group-one">
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar border border-2 border-success text-success"><i class="ri-coin-line"></i></div>
                  <div>
                    <h6 class="mb-0">Received Bitcoin</h6>
                    <small>Received via PayPal</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">+0.01084 BTC</h6>
                    <small class="text-success">+25.60 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar border border-2 border-primary text-primary"><i class="ri-arrow-right-up-line"></i></div>
                  <div>
                    <h6 class="mb-0">Sent Bitcoin</h6>
                    <small>To Bitcoin Address</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">-0.00029 BTC</h6>
                    <small class="text-danger">-11.48 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar border border-2 border-info text-info"><i class="ri-shopping-basket-line"></i></div>
                  <div>
                    <h6 class="mb-0">Purchased Ethereum</h6>
                    <small>Purchased using PayPal</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">+0.02115 ETH</h6>
                    <small class="text-success">+21.50 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar border border-2 border-info text-info"><i class="ri-shopping-basket-line"></i></div>
                  <div>
                    <h6 class="mb-0">Purchased Bitcoin</h6>
                    <small>Purchased using Debit Card</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">+0.0005 BTC</h6>
                    <small class="text-success">+18.30 USD</small>
                  </div>
                </li>
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar border border-2 border-primary text-primary"><i class="ri-arrow-right-up-line"></i></div>
                  <div>
                    <h6 class="mb-0">Sent Bitcoin</h6>
                    <small>To Bitcoin Address</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">-0.00040 BTC</h6>
                    <small class="text-danger">-18.50 USD</small>
                  </div>
                </li>
              </ul>

              <div class="divider divider-start"><span class="fw-medium">Yesterday, October 19</span></div>
              <ul class="list-group list-group-one">
                <li class="list-group-item px-0 d-flex align-items-center gap-2">
                  <div class="avatar border border-2 border-success text-success"><i class="ri-coin-line"></i></div>
                  <div>
                    <h6 class="mb-0">Received Bitcoin</h6>
                    <small>Received via PayPal</small>
                  </div>
                  <div class="ms-auto text-end">
                    <h6 class="ff-numerals mb-0">+0.01084 BTC</h6>
                    <small class="text-success">+25.60 USD</small>
                  </div>
                </li>
              </ul>
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
    <script src="../assets/js/db.crypto.js"></script>

  </body>
</html>
@endsectionwe
