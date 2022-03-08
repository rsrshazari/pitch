
<?php $this->load->view('header') ?>

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="presentation-heading">
                <h5 class="">Start a new presentation</h5>
                <div><button id="temporary" onclick="myFunction()"><h6>Templates Gallery</h6></button></div>
              </div>
              <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card start-presentation-image" style="width: 100%;">
                  <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                </div>
                <h6 class="card-title mt-3 mx-2">Blank</h6>
              </div>
              <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                <div class="card start-presentation-image" style="width:100%;">
                  <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                </div>
                <h6 class="card-title mt-3 mx-2">General presentation</h6>
              </div>
              <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                <div class="card start-presentation-image" style="width: 100%;">
                  <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                </div>
                <h6 class="card-title mt-3 mx-2"> Your big idea</h6>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card start-presentation-image" id="presentationImage" style="width: 100%;">
                  <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                </div>
                <h6 class="card-title mt-3 mx-2">Photo album</h6>
              </div>
            </div>


   


            
            <div id="personal">
              <div class="row">
                <h5 class="mt-3">Personal</h5>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">General presentation</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">your big idea</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">photo album</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">wedding</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">Recipe book</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">Portfolio</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">Lookbook</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">Party invite</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">Yearbook</h6>
                </div>
                <div class="mb-4 col-lg-3 col-md-4 col-sm-6">
                  <div class="card" style="width: 100%;">
                    <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="card-img-top" alt="...">
                  </div>
                  <h6 class="card-title mt-3 mx-2">Recipe showcase</h6>
                </div>
              </div>
            </div>
            

            
  <!-- Transactions -->
  <div class="row mt-3">
    <h5 class="">Recent use presentation</h5>
    <div class="col-md-6 col-lg-4 order-2 mb-4">
      <div class="card h-100">
        <div class="card recentUse" style="width: 100%;">
          <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="" alt="...">
        </div>
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Photo album</h5>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-text' ></i> &nbsp; Rename</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-message-alt-x'></i> &nbsp; Remove</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-window-open'></i> &nbsp; Open in new tab</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-toggle-right'></i> &nbsp; Available offline</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col-md-6 col-lg-4 order-2 mb-4">
      <div class="card h-100">
        <div class="card recentUse" style="width: 100%;">
          <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="" alt="...">
        </div>
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Photo album</h5>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-text' ></i> &nbsp; Rename</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-message-alt-x'></i> &nbsp; Remove</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-window-open'></i> &nbsp; Open in new tab</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-toggle-right'></i> &nbsp; Available offline</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 col-lg-4 order-2 mb-4">
      <div class="card h-100">
        <div class="card recentUse" style="width: 100%;">
          <img src="<?= base_url()?>assets/img/backgrounds/8.jpg" class="" alt="...">
        </div>
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Photo album</h5>
          <div class="dropdown">
            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-text' ></i> &nbsp; Rename</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-message-alt-x'></i> &nbsp; Remove</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-window-open'></i> &nbsp; Open in new tab</a>
              <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-toggle-right'></i> &nbsp; Available offline</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!--/ Transactions -->

            <script>
             function myFunction(){
               var x = document.getElementById("personal");

               if(x.style.display === "block"){
                x.style.display = "none";
               }else {
                x.style.display = "block";
               }
             }
            </script>
          <!-- / Content -->

          
    
          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

  <?php $this->load->view('footer') ?>
