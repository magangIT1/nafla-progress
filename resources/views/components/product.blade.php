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
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
          <ol class="breadcrumb fs-sm mb-1">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Management</li>
          </ol>
          <h4 class="main-title mb-0">Welcome to Dashboard</h4>
        </div>

        <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
          <button type="button" class="btn btn-white btn-icon"><i class="ri-share-line fs-18 lh-1"></i></button>
          <button type="button" class="btn btn-white btn-icon"><i class="ri-printer-line fs-18 lh-1"></i></button>
          <button type="button" class="btn btn-primary d-flex align-items-center gap-2"><i class="ri-bar-chart-2-line fs-18 lh-1"></i>Generate<span class="d-none d-sm-inline"> Report</span></button>
        </div>
      </div>

      <div class="row g-3">
        <div class="col-xl-5">
          <div class="row g-3">
            <div class="col-6 col-md-3 col-xl-6">
              <div class="card card-one card-product">
                <div class="card-body p-3">
                  <div class="d-flex align-items-center justify-content-between mb-5">
                    <div class="card-icon"><i class="ri-shopping-bag-fill"></i></div>
                    <h6 class="fw-normal ff-numerals text-success mb-0">+28.5%</h6>
                  </div>
                  <h2 class="card-value ls--1"><span>$</span>14,803.80</h2>
                  <label class="card-label fw-medium text-dark">Total Sales</label>
                  <span class="d-flex gap-1 fs-xs">
                    <span class="d-flex align-items-center text-success">
                      <span class="ff-numerals">2.3%</span><i class="ri-arrow-up-line"></i>
                    </span>
                    <span class="text-secondary">than last week</span>
                  </span>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-6 col-md-3 col-xl-6">
              <div class="card card-one card-product">
                <div class="card-body p-3">
                  <div class="d-flex align-items-center justify-content-between mb-5">
                    <div class="card-icon"><i class="ri-wallet-3-fill"></i></div>
                    <h6 class="fw-normal ff-numerals text-danger mb-0">-3.8%</h6>
                  </div>
                  <h2 class="card-value ls--1"><span>$</span>8,100.63</h2>
                  <label class="card-label fw-medium text-dark">Total Expenses</label>
                  <span class="d-flex gap-1 fs-xs">
                    <span class="d-flex align-items-center text-danger">
                      <span class="ff-numerals">0.5%</span><i class="ri-arrow-down-line"></i>
                    </span>
                    <span class="text-secondary">than last week</span>
                  </span>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-6 col-md-3 col-xl-6">
              <div class="card card-one card-product">
                <div class="card-body p-3">
                  <div class="d-flex align-items-center justify-content-between mb-5">
                    <div class="card-icon"><i class="ri-shopping-basket-fill"></i></div>
                    <h6 class="fw-normal ff-numerals text-danger mb-0">-8.4%</h6>
                  </div>
                  <h2 class="card-value ls--1">23,480</h2>
                  <label class="card-label fw-medium text-dark">Total Products</label>
                  <span class="d-flex gap-1 fs-xs">
                    <span class="d-flex align-items-center text-danger">
                      <span class="ff-numerals">0.2%</span><i class="ri-arrow-down-line"></i>
                    </span>
                    <span class="text-secondary">than last week</span>
                  </span>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-6 col-md-3 col-xl-6">
              <div class="card card-one card-product">
                <div class="card-body p-3">
                  <div class="d-flex align-items-center justify-content-between mb-5">
                    <div class="card-icon"><i class="ri-shopping-basket-fill"></i></div>
                    <h6 class="fw-normal ff-numerals text-success mb-0">+20.9%</h6>
                  </div>
                  <h2 class="card-value ls--1">18,060</h2>
                  <label class="card-label fw-medium text-dark">Products Sold</label>
                  <span class="d-flex gap-1 fs-xs">
                    <span class="d-flex align-items-center text-success">
                      <span class="ff-numerals">5.8%</span><i class="ri-arrow-up-line"></i>
                    </span>
                    <span class="text-secondary">than last week</span>
                  </span>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- col -->
        <div class="col-xl-7">
          <div class="card card-one card-product-inventory">
            <div class="card-header">
              <h6 class="card-title">Product Inventory</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <ul class="legend mb-3 position-absolute">
                <li>Remaining Quantity</li>
                <li>Sold Quantity</li>
              </ul>
              <div id="apexChart1" class="apex-chart-twelve mt-4 pt-3"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-8">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Popular Products</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="product-wrapper">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="product-thumb"><img src="https://via.placeholder.com/300/fff/000" alt=""></div>
                      </td>
                      <td>
                        <h6 class="mb-1"><a href="">iPhone 14 Pro Max Leather Case</a></h6>
                        <span class="fs-sm text-secondary">Leather Case with MagSafe</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Price</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$35.50</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Available</label>
                        <span class="d-block fw-medium text-dark ff-numerals">560</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sold</label>
                        <span class="d-block fw-medium text-dark ff-numerals">40</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sales</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$1,420.00</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- product-wrapper -->
              <div class="product-wrapper">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="product-thumb"><img src="https://via.placeholder.com/300/fff/000" alt=""></div>
                      </td>
                      <td>
                        <h6 class="mb-1"><a href="">Apple Watch Series 7 GPS</a></h6>
                        <span class="fs-sm text-secondary">Midnight Aluminum Sport Band</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Price</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$395.99</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Available</label>
                        <span class="d-block fw-medium text-dark ff-numerals">350</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sold</label>
                        <span class="d-block fw-medium text-dark ff-numerals">150</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sales</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$59,398.50</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- product-wrapper -->
              <div class="product-wrapper">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="product-thumb"><img src="https://via.placeholder.com/300/fff/000" alt=""></div>
                      </td>
                      <td>
                        <h6 class="mb-1"><a href="">Apple Wireless Black Airpods</a></h6>
                        <span class="fs-sm text-secondary">(3rd Generation) Wireless Earbuds</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Price</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$210.95</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Available</label>
                        <span class="d-block fw-medium text-dark ff-numerals">250</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sold</label>
                        <span class="d-block fw-medium text-dark ff-numerals">100</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sales</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$21,095.00</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- product-wrapper -->
              <div class="product-wrapper">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="product-thumb"><img src="https://via.placeholder.com/300/fff/000" alt=""></div>
                      </td>
                      <td>
                        <h6 class="mb-1"><a href="">Macbook Air M2 Chip</a></h6>
                        <span class="fs-sm text-secondary">16GB Ram 512GB SSD Storage</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Price</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$1,910.00</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Available</label>
                        <span class="d-block fw-medium text-dark ff-numerals">100</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sold</label>
                        <span class="d-block fw-medium text-dark ff-numerals">50</span>
                      </td>
                      <td>
                        <label class="d-block text-secondary fs-sm mb-1">Sales</label>
                        <span class="d-block fw-medium text-dark ff-numerals">$95,500.00</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- product-wrapper -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Revenue By Departments</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="revenue-item">
                <div class="revenue-item-body">
                  <span>Automotive</span>
                  <span>$12,550.50</span>
                  <span class="text-success">55.6%</span>
                </div><!-- revenue-item-body -->
                <div class="progress">
                  <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div><!-- revenue-item -->
              <div class="revenue-item">
                <div class="revenue-item-body">
                  <span>Home &amp; Kitchen</span>
                  <span>$9,805.00</span>
                  <span class="text-danger">6.8%</span>
                </div><!-- revenue-item-body -->
                <div class="progress">
                  <div class="progress-bar w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div><!-- revenue-item -->
              <div class="revenue-item">
                <div class="revenue-item-body">
                  <span>Health &amp; Fashion</span>
                  <span>$15,004.90</span>
                  <span class="text-success">69.2%</span>
                </div><!-- revenue-item-body -->
                <div class="progress">
                  <div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div><!-- revenue-item -->
              <div class="revenue-item">
                <div class="revenue-item-body">
                  <span>Movies &amp; Television</span>
                  <span>$5,338.00</span>
                  <span class="text-danger">28.5%</span>
                </div><!-- revenue-item-body -->
                <div class="progress">
                  <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div><!-- revenue-item -->
              <div class="revenue-item">
                <div class="revenue-item-body">
                  <span>Toys &amp; Games</span>
                  <span>$4,965.40</span>
                  <span class="text-danger">18.2%</span>
                </div><!-- revenue-item-body -->
                <div class="progress">
                  <div class="progress-bar w-20" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div><!-- revenue-item -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-md-4">
          <div class="card card-one card-purchases">
            <div class="card-header">
              <h6 class="card-title">Purchases</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="position-absolute">
                <h2 class="card-value mb-1 ls--1"><span>$</span>8,358</h2>
                <small><span class="d-inline-flex text-danger">0.7% <i class="ri-arrow-down-line"></i></span> than last week</small>
              </div>
              <div id="apexChart2"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-sm-6 col-md-4">
          <div class="card card-one card-purchases">
            <div class="card-header">
              <h6 class="card-title">Product Views</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="position-absolute">
                <h2 class="card-value mb-1 ls--1">53,570</h2>
                <small><span class="d-inline-flex text-success">1.4% <i class="ri-arrow-up-line"></i></span> than last week</small>
              </div>
              <div id="apexChart3"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-sm-6 col-md-4">
          <div class="card card-one card-purchases">
            <div class="card-header">
              <h6 class="card-title">Added to Cart</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="position-absolute">
                <h2 class="card-value mb-1 ls--1">16,803</h2>
                <small><span class="d-inline-flex text-success">0.8% <i class="ri-arrow-up-line"></i></span> than last week</small>
              </div>
              <div id="apexChart4"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-md-6 col-xl-7">
          <div class="card card-one overflow-hidden">
            <div class="card-body px-0 pb-3">
              <div class="total-sales-body">
                <h2 class="card-value mb-2 ls--1"><span>$</span>285,650.10</h2>
                <label class="d-block mb-0"><span class="fw-semibold text-dark">Total Sales</span> <span class="ff-numerals">(01/01/2023 - 12/31/2023)</span></label>
                <small><span class="d-inline-flex text-success">0.8% <i class="ri-arrow-up-line"></i></span> than last week</small>
                <p class="w-50 fs-xs text-secondary mt-2 mb-0 d-none d-lg-block">Note: Sed ut perspi ciatis unde omnis iste natus error sit volup tatem accu santium dolor emque laudan...</p>
              </div><!-- total-sales-body -->
              <div id="apexChart5"></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-sm-6 col-md">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="text-center p-3 bg-white rounded mb-3"><img src="https://via.placeholder.com/300/fff/000" class="img-fluid" alt=""></div>
              <h6 class="fw-semibold text-dark lh-4">Apple Wireless Black Airpods</h6>
              <p class="mb-3 fs-sm text-secondary">Nam libero tempore cum soluta nobis eligendi...</p>
              <div class="d-grid"><a href="" class="btn btn-sm btn-primary">Check Availability</a></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-sm-6 col-md">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="text-center p-3 bg-white rounded mb-3"><img src="https://via.placeholder.com/300/fff/000" class="img-fluid" alt=""></div>
              <h6 class="fw-semibold text-dark lh-4">Apple Watch Series 7 GPS</h6>
              <p class="mb-3 fs-sm text-secondary">Et harum quidem rerum facilis est et expedita...</p>
              <div class="d-grid"><a href="" class="btn btn-sm btn-secondary">Sold Out</a></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-xl-6">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Featured Product</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="row g-3">
                <div class="col-sm-5 col-md-4 col-xl-5 col-xxl-4">
                  <div class="h-100 border rounded px-2 bg-white"><img src="https://via.placeholder.com/346x423/fff/000" class="img-fluid" alt=""></div>
                </div><!-- col -->
                <div class="col-sm-7 col-md-8 col-xl-7 col-xxl d-flex flex-column">
                  <h6 class="fs-15 fw-semibold text-dark mb-1">Nike Sneakers</h6>
                  <p class="text-secondary mb-3">Court Vision Low Next Nature Shoes</p>
                  <ul class="list-unstyled">
                    <li>- Best for lifestyle</li>
                    <li>- Polyurethane upper</li>
                    <li>- Vulcanized construction</li>
                    <li>- Textile inner</li>
                    <li>- <a href="">See more</a></li>
                  </ul>
                  <div class="d-flex align-items-center justify-content-between mt-auto">
                    <h6 class="card-value fw-semibold fs-15 mb-0"><span>$</span>120.50</h6>
                    <div class="d-flex gap-1 text-primary fs-14">
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-fill"></i>
                      <i class="ri-star-line"></i>
                    </div>
                  </div>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
        <div class="col-xl-6">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Featured Reviews</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="row g-3">
                <div class="col-sm-4 col-md-3 col-xl-4">
                  <div class="avatar avatar-xl mb-2"><span class="avatar-initial bg-gray-700">s</span></div>
                  <h6 class="fw-semibold text-dark mb-1">Reyna R. Labares</h6>
                  <p class="fs-xs text-secondary mb-1">Dec 20, 2023 8:45am</p>
                  <div class="d-flex gap-1 text-primary fs-16">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                  </div>
                </div><!-- col -->
                <div class="col-sm-8 col-md-9 col-xl-8 d-flex flex-column">
                  <h6 class="fw-semibold text-dark lh-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</h6>
                  <p class="text-secondary">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <span class="d-xl-none d-xxl-inline">dolore eu fugiat nulla pariatur</span>...</p>
                  <div class="product-review-footer mt-auto">
                    <a href=""><i class="ri-thumb-up-line"></i></a>
                    <a href=""><i class="ri-thumb-down-line"></i></a>
                    <a href="">Report Review</a>
                  </div><!-- product-review-footer -->
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!--- col -->
      </div><!-- row -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/apexcharts/apexcharts.min.js"></script>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/db.product.js"></script>

  </body>
</html>
@endsection
