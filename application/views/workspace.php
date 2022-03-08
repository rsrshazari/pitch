<?php $this->load->view('header') ?>


      

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">          
  <!-- Transactions -->
  <div class="row mt-3">
    <div id="addworkspace">
    <h5 class="">Workspace</h5>
    <button class="btn btn-primary btn-toggle-sidebar" data-bs-toggle="offcanvas" data-bs-target="#addEventSidebar" aria-controls="addEventSidebar">
              <i class="bx bx-plus"></i>
              <span class="align-middle">Add New Workspace</span>
            </button>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
              <div class="card-title mb-auto">
                <h5 class="mb-0">Workspace Name</h5>
                <!-- <small>Monthly Report</small> -->
              </div>
              <div class="d-flex flex-column justify-content-between mb-2">
                <h6 class="fw-normal">Total 4 users</h6>
                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/12.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/6.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/15.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Add New Role" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/transparent.png" alt="Avatar" data-bs-toggle="modal" data-bs-target="#editPermissionModal">
                  </li>
                </ul>
              </div>


              
              <!-- <div class="chart-statistics">
                <h3 class="card-title mb-1">4,230</h3>
                <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> View Edit</small>
              </div> -->
            </div>
            <div id="workspaceImage">
              <img src="<?= base_url()?>assets/img/avatars/6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
              <div class="card-title mb-auto">
                <h5 class="mb-0">Workspace Name</h5>
                <!-- <small>Monthly Report</small> -->
              </div>
              <div class="d-flex flex-column justify-content-between mb-2">
                <h6 class="fw-normal">Total 4 users</h6>
                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/12.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/6.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/15.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Add New Role" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/transparent.png" alt="Avatar" data-bs-toggle="modal" data-bs-target="#editPermissionModal">
                  </li>
                </ul>
              </div>
              <!-- <div class="chart-statistics">
                <h3 class="card-title mb-1">4,230</h3>
                <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> View Edit</small>
              </div> -->
            </div>
            <div id="workspaceImage">
              <img src="<?= base_url()?>assets/img/avatars/6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
              <div class="card-title mb-auto">
                <h5 class="mb-0">Workspace Name</h5>
                <!-- <small>Monthly Report</small> -->
              </div>
              <div class="d-flex flex-column justify-content-between mb-2">
                <h6 class="fw-normal">Total 4 users</h6>
                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/12.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/6.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/15.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Add New Role" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/transparent.png" alt="Avatar" data-bs-toggle="modal" data-bs-target="#editPermissionModal">
                  </li>
                </ul>
              </div>
              <!-- <div class="chart-statistics">
                <h3 class="card-title mb-1">4,230</h3>
                <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> View Edit</small>
              </div> -->
            </div>
            <div id="workspaceImage">
              <img src="<?= base_url()?>assets/img/avatars/6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
              <div class="card-title mb-auto">
                <h5 class="mb-0">Workspace Name</h5>
                
                <!-- <small>Monthly Report</small> -->
              </div>
              <div class="d-flex flex-column justify-content-between mb-2">
                <h6 class="fw-normal">Total 4 users</h6>
                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/12.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/6.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/15.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Add New Role" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/transparent.png" alt="Avatar" data-bs-toggle="modal" data-bs-target="#editPermissionModal">
                  </li>
                </ul>
              </div>
              <!-- <div class="chart-statistics">
                <h3 class="card-title mb-1">4,230</h3>
                <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> View Edit</small>
              </div> -->
            </div>
            <div id="workspaceImage">
              <img src="<?= base_url()?>assets/img/avatars/6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
              <div class="card-title mb-auto">
                <h5 class="mb-0">Workspace Name</h5>
                <!-- <small>Monthly Report</small> -->
              </div>
              <div class="d-flex flex-column justify-content-between mb-2">
                <h6 class="fw-normal">Total 4 users</h6>
                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>/assets/img/avatars/12.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/6.png" alt="Avatar">
                  </li>
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/15.png" alt="Avatar">
                  </li>
                  
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Add New Role" class="avatar avatar-sm pull-up">
                    <img class="rounded-circle" src="<?= base_url()?>assets/img/avatars/transparent.png" alt="Avatar" data-bs-toggle="modal" data-bs-target="#editPermissionModal">
                  </li>
                </ul>
              </div>
              <!-- <div class="chart-statistics">
                <h3 class="card-title mb-1">4,230</h3>
                <small class="text-success text-nowrap fw-semibold"><i class='bx bx-up-arrow-alt'></i> View Edit</small>
              </div> -->
            </div>
            <div id="workspaceImage">
              <img src="<?= base_url()?>assets/img/avatars/6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
              
    
    
<div class="card app-calendar-wrapper">
  <div class="row g-0">
    <!-- Calendar Sidebar -->
   
    <!-- /Calendar Sidebar -->

    <!-- Calendar & Modal -->
    <div class="col app-calendar-content">
      <div class="card shadow-none border-0">
        
      </div>
      <div class="app-overlay"></div>
      <!-- FullCalendar Offcanvas -->
      <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar" aria-labelledby="addEventSidebarLabel">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title mb-2" id="addEventSidebarLabel">Create Work Space</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form class="event-form pt-0" id="eventForm" onsubmit="return false">
            <div class="mb-3">
              <label class="form-label" for="eventTitle">Workspace Name</label>
              <input type="text" class="form-control" id="eventTitle" name="eventTitle" placeholder="Workspace Name" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="eventTitle">Email</label>
              <input type="mail" class="form-control" id="eventTitle" name="eventTitle" placeholder="Email" />
            </div>
            <div class="gap-4 workspace-pop">
              <img src="<?= base_url()?>assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                  <span class="d-none d-sm-block">Upload new photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input type="file" id="upload"  onchange="document.getElementById('uploadedAvatar').src = window.URL.createObjectURL(this.files[0])" class="account-file-input" hidden accept="image/png, image/jpeg" />
                </label>
                <br>
                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-sm-between justify-content-start my-4">
              <div>
                <button type="submit" class="btn btn-primary btn-add-event me-sm-3 me-1">Add</button>
                <button type="submit" class="btn btn-primary btn-update-event d-none me-sm-3 me-1">Update</button>
                <button type="reset" class="btn btn-label-secondary btn-cancel me-sm-0 me-1" data-bs-dismiss="offcanvas">Cancel</button>
              </div>
              <div><button class="btn btn-label-danger btn-delete-event d-none">Delete</button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Calendar & Modal -->
  </div>
</div>
</div>
  <!--/ Transactions -->


  <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3>Add User</h3>
            <p>Edit permission as per your requirements.</p>
          </div>
          <form id="editPermissionForm" class="row" onsubmit="return false">
            <div class="col-sm-9 mb-3">
              <label class="form-label" for="editPermissionName">Name</label>
              <input type="text" id="editPermissionName" name="editPermissionName" class="form-control" placeholder="Permission Name" tabindex="-1" />
            </div>
            <div class="col-sm-9 mb-3">
              <label class="form-label" for="editPermissionName">Email</label>
              <input type="text" id="editPermissionName" name="editPermissionName" class="form-control" placeholder="Email Id" tabindex="-1" />
            </div>
            <div class="col-sm-9 mb-3">
              <label class="form-label" for="editPermissionName">Password</label>
              <input type="text" id="editPermissionName" name="editPermissionName" class="form-control" placeholder="Password" tabindex="-1" />
            </div>
            <div class="col-12">
              <div class="addUser-button">
                <div class="col-sm-3 ">
                  <button type="submit" class="btn btn-primary mt-1 mt-sm-0">Save</button>
                </div>
                <div class="col-sm-6">
                  <div class="form-check align-self-center">
                    <input class="form-check-input" type="checkbox" id="editCorePermission" />
                    <label class="form-check-label" for="editCorePermission">
                      Remember me
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('footer') ?>

