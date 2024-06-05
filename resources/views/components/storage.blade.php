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
            <li class="breadcrumb-item active" aria-current="page">Storage Management</li>
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
        <div class="col-12 col-sm-6 col-xl">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="mb-1 text-primary ti--3"><i class="ri-rocket-line fs-48 lh-1"></i></div>
              <h6 class="fw-semibold text-dark mb-1">Applications</h6>
              <p class="fs-xs text-secondary"><span class="ff-numerals">6,320</span> Files</p>
              <div class="progress ht-3 mb-1">
                <div class="progress-bar w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                <span>26.5GB</span>
                <span>50GB</span>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-6 col-sm-6 col-xl">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="mb-1 text-primary ti--3"><i class="ri-file-text-line fs-48 lh-1"></i></div>
              <h6 class="fw-semibold text-dark mb-1">Documents</h6>
              <p class="fs-xs text-secondary"><span class="ff-numerals">4,067</span> Files</p>
              <div class="progress ht-3 mb-1">
                <div class="progress-bar w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                <span>8.8GB</span>
                <span>20GB</span>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-6 col-sm-4 col-xl">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="mb-1 text-primary ti--3"><i class="ri-gallery-line fs-48 lh-1"></i></div>
              <h6 class="fw-semibold text-dark mb-1">Media</h6>
              <p class="fs-xs text-secondary"><span class="ff-numerals">1,983</span> Files</p>
              <div class="progress ht-3 mb-1">
                <div class="progress-bar w-70 bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                <span>29.5GB</span>
                <span>40GB</span>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-6 col-sm-4 col-xl">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="mb-1 text-primary ti--3"><i class="ri-folder-zip-line fs-48 lh-1"></i></div>
              <h6 class="fw-semibold text-dark mb-1">Archives</h6>
              <p class="fs-xs text-secondary"><span class="ff-numerals">3,508</span> Files</p>
              <div class="progress ht-3 mb-1">
                <div class="progress-bar w-85 bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                <span>26.6GB</span>
                <span>30GB</span>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-6 col-sm-4 col-xl">
          <div class="card card-one">
            <div class="card-body p-3">
              <div class="mb-1 text-primary ti--3"><i class="ri-folder-2-line fs-48 lh-1"></i></div>
              <h6 class="fw-semibold text-dark mb-1">Others</h6>
              <p class="fs-xs text-secondary"><span class="ff-numerals">845</span> Files</p>
              <div class="progress ht-3 mb-1">
                <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex justify-content-between ff-numerals fs-xs fw-medium">
                <span>5.1GB</span>
                <span>10GB</span>
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-8">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Data Analytics</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="row g-3">
                <div class="col-sm-4 col-md-3">
                  <div class="row g-3">
                    <div class="col-4 col-sm-12">
                      <h2 class="card-value ls--1 mb-1">69.8<span class="opacity-75">TB</span></h2>
                      <label class="card-label fw-medium text-secondary fs-sm fs-sm-normal">Total Storage</label>
                    </div>
                    <div class="col-4 col-sm-12">
                      <h2 class="card-value ls--1 mb-1">836.5<span class="opacity-75">K</span></h2>
                      <label class="card-label fw-medium text-secondary fs-sm fs-sm-normal">Object Count</label>
                    </div><!-- col -->
                    <div class="col-4 col-sm-12">
                      <h2 class="card-value ls--1 mb-1">88.1<span class="opacity-75">MB</span></h2>
                      <label class="card-label fw-medium text-secondary fs-sm fs-sm-normal">Avg. Object Size</label>
                    </div><!-- col -->
                  </div><!-- row -->
                </div><!-- col -->
                <div class="col-sm-8 col-md-9">
                  <div id="apexChart1"></div>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one card-daily-trends">
            <div class="card-body p-3">
              <h6 class="card-title fw-semibold text-dark fs-15 mb-1">Daily Trends</h6>
              <p class="text-secondary">CPU Power - <span class="ff-numerals">11/20/2023</span></p>
              <h1 class="card-value">2836 <span>KHz</span></h1>
            </div><!-- card-body -->
            <div id="apexChart2" class="mt-5 mt-md-0"></div>
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Manage Storage</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <label class="d-block fs-sm mb-2"><span class="ff-numerals">25.93</span> GB available of <span class="ff-numerals">127.18</span> GB</label>
              <div class="progress ht-15 mb-4">
                <div class="progress-bar w-20" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-ui-02 w-15" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-ui-03 w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="storage-item">
                <div class="storage-icon"><i class="ri-rocket-line"></i></div>
                <div class="flex-fill">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium">Applications</span>
                    <span class="ff-numerals">25.5 GB</span>
                  </div>
                  <div class="progress ht-5 mb-1">
                    <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="d-flex justify-content-between ff-numerals fs-xs text-secondary">
                    <span>6,320 Files</span>
                    <span>25.4%</span>
                  </div>
                </div><!-- storage-item-body -->
              </div><!-- storage-item -->
              <div class="storage-item">
                <div class="storage-icon"><i class="ri-file-text-line"></i></div>
                <div class="flex-fill">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium">Documents</span>
                    <span class="ff-numerals">8.8 GB</span>
                  </div>
                  <div class="progress ht-5 mb-1">
                    <div class="progress-bar w-20" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="d-flex justify-content-between ff-numerals fs-xs text-secondary">
                    <span>4,067 Files</span>
                    <span>21.3%</span>
                  </div>
                </div><!-- storage-item-body -->
              </div><!-- storage-item -->
              <div class="storage-item">
                <div class="storage-icon"><i class="ri-gallery-line"></i></div>
                <div class="flex-fill">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="fw-medium">Media</span>
                    <span class="ff-numerals">29.5 GB</span>
                  </div>
                  <div class="progress ht-5 mb-1">
                    <div class="progress-bar w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="d-flex justify-content-between ff-numerals fs-xs text-secondary">
                    <span>1,983 Files</span>
                    <span>28.6%</span>
                  </div>
                </div><!-- storage-item-body -->
              </div><!-- storage-item -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-7 col-lg-6 col-xl-4">
          <div class="card card-one">
            <div class="card-body p-4">
              <div class="chart-donut-three mb-4"><canvas id="chartDonut"></canvas></div>
              <div class="row g-3">
                <div class="col-6">
                  <label class="d-block mb-1">Total Space</label>
                  <h2 class="card-value ls--1 mb-0">286.3<span>GB</span></h2>
                </div><!-- col -->
                <div class="col-6">
                  <label class="d-block mb-1">Used Space</label>
                  <h2 class="card-value ls--1 mb-0">198.7<span>GB</span></h2>
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-5 col-lg-6 col-xl-4">
          <div class="card card-one card-article">
            <div class="card-body">
              <div class="mb-3"><span class="badge bg-ui-02 fs-xs">Latest Article</span></div>
              <h4 class="card-title mb-3">Overhaul Cloud-based Storage Analytics and Monitoring Suite</h4>
              <p class="text-secondary mb-4">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est similique sunt in culpa qui officia deserunt mollitia animi.</p>
              <a href="" class="btn btn-primary">Learn more</a>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Network In/Out</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="ht-250"><canvas id="chartPolar"></canvas></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Volume Read/Write Ops</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="ht-250"><canvas id="chartRadar"></canvas></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-4">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">CPU Utilization</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3">
              <div class="ht-250"><canvas id="chartLine"></canvas></div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
        <div class="col-12">
          <div class="card card-one">
            <div class="card-header">
              <h6 class="card-title">Storage Distribution</h6>
              <nav class="nav nav-icon nav-icon-sm ms-auto">
                <a href="" class="nav-link"><i class="ri-refresh-line"></i></a>
                <a href="" class="nav-link"><i class="ri-more-2-fill"></i></a>
              </nav>
            </div><!-- card-header -->
            <div class="card-body p-3 p-xl-4">
              <div class="row g-4">
                <div class="col-xl-8">
                  <div id="apexChart3" class="apex-chart-eleven"></div>
                </div>
                <div class="col-xl">
                  <div class="d-flex">
                    <i class="ri-drive-fill fs-48 lh-1 me-3 text-primary"></i>
                    <div>
                      <h6 class="fw-semibold text-dark mb-1">Google Drive</h6>
                      <p class="fs-sm text-secondary mb-0">Google Drive is a file storage and synchronization service that allows users to store files in the cloud, synchronize files across devices, and share files.</p>
                    </div>
                  </div>
                  <div class="d-flex mt-3">
                    <i class="ri-dropbox-fill fs-48 lh-1 me-3 text-primary"></i>
                    <div>
                      <h6 class="fw-semibold text-dark mb-1">Dropbox</h6>
                      <p class="fs-sm text-secondary mb-0">Dropbox is a file hosting service that offers cloud storage, file synchronization, personal cloud, and client software.</p>
                    </div>
                  </div>
                  <div class="d-flex mt-3">
                    <i class="ri-cloud-fill fs-48 lh-1 me-3 text-primary"></i>
                    <div>
                      <h6 class="fw-semibold text-dark mb-1">iCloud</h6>
                      <p class="fs-sm text-secondary mb-0">iCloud helps you keep your most important information like photos, files, etc., and available across all your devices.</p>
                    </div>
                  </div>
                </div><!-- col -->
              </div><!-- row -->
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
    <script src="../assets/js/db.storage.js"></script>

  </body>
</html>
@endsection
