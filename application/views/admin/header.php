<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url();?>assets/" data-template="vertical-menu-template">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Pitch</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

<!-- Icons -->
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/fonts/boxicons.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/fonts/fontawesome.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/fonts/flag-icons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/css/pages/page-profile.css"  />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/css/rtl/core.css"  />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/css/rtl/theme-default.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/css/demo.css" />


<!-- Vendors CSS -->
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/apex-charts/apex-charts.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/quill/editor.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/quill/typography.css" />

<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/select2/select2.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/animate-css/animate.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/vendor/libs/sweetalert2/sweetalert2.css" />


<script src="<?= base_url()?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url()?>assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url()?>assets/js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
   
</head>
<body>
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">
  <?php $this->load->view('admin/sidebar') ?>
  <div class="layout-page">
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>
  

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

    
    <!-- Search -->
    <div class="navbar-nav align-items-center">
      <div class="nav-item navbar-search-wrapper mb-0">
        <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
          <i class="bx bx-search bx-sm"></i>
          <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
        </a>
      </div>
    </div>
    <!-- /Search -->
    


    

    <ul class="navbar-nav flex-row align-items-center ms-auto">
      
      <!-- Style Switcher -->
      <li class="nav-item me-2 me-xl-0">
        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
          <i class='bx bx-sm'></i>
        </a>
      </li>
      <!--/ Style Switcher -->
      <!-- Notification -->
      <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
          <i class="bx bx-bell bx-sm"></i>
          <span class="badge bg-danger rounded-pill badge-notifications">5</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end py-0">
          <li class="dropdown-menu-header border-bottom">
            <div class="dropdown-header d-flex align-items-center py-3">
              <h5 class="text-body mb-0 me-auto">Notification</h5>
              <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
            </div>
          </li>
          <li class="dropdown-notifications-list scrollable-container">
            <ul class="list-group list-group-flush">
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="<?= base_url()?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                    <p class="mb-0">Won the monthly best seller gold badge</p>
                    <small class="text-muted">1h ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Charles Franklin</h6>
                    <p class="mb-0">Accepted your connection</p>
                    <small class="text-muted">12hr ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="<?= base_url()?>assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">New Message ✉️</h6>
                    <p class="mb-0">You have new message from Natalie</p>
                    <small class="text-muted">1h ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                    <p class="mb-0">ACME Inc. made new order $1,154</p>
                    <small class="text-muted">1 day ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="<?= base_url()?>assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Application has been approved 🚀 </h6>
                    <p class="mb-0">Your ABC project application has been approved.</p>
                    <small class="text-muted">2 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Monthly report is generated</h6>
                    <p class="mb-0">July monthly financial report is generated </p>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="<?= base_url()?>assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">Send connection request</h6>
                    <p class="mb-0">Peter sent you connection request</p>
                    <small class="text-muted">4 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="<?= base_url()?>assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">New message from Jane</h6>
                    <p class="mb-0">Your have new message from Jane</p>
                    <small class="text-muted">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-1">CPU is running high</h6>
                    <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                    <small class="text-muted">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown-menu-footer border-top">
            <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
              View all notifications
            </a>
          </li>
        </ul>
      </li>
      <!--/ Notification -->
      <!-- User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="<?= base_url()?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="<?= base_url('Admin/accountsetting')?>">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                    <img src="<?= base_url()?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-semibold d-block">John Doe</span>
                  <small class="text-muted">Admin</small>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="<?= base_url('Admin/accountsetting')?>">
              <i class="bx bx-user me-2"></i>
              <span class="align-middle">My Profile</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?= base_url('Admin/accountsecurity')?>">
              <i class="bx bx-cog me-2"></i>
              <span class="align-middle">Settings</span>
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="#" target="_blank">
              <i class="bx bx-power-off me-2"></i>
              <span class="align-middle">Log Out</span>
            </a>
          </li>
        </ul>
      </li>
      <!--/ User -->
      

    </ul>
  </div>

  
  <!-- Search Small Screens -->
  <div class="navbar-search-wrapper search-input-wrapper  d-none">
    <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
  </div>
  
  
</nav>
    
