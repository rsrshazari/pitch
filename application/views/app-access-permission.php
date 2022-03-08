<?php $this->load->view('header') ?>


      

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">          



          <h4 class="fw-bold py-3 mb-2">Permissions List</h4>

          <p class="mb-4">Each category (Basic, Professional, and Business) includes the four predefined roles shown below.</p>
            

                
    <div class="">
          
          <table id="example" class="table bg-white mt-5" style="width:100%">
          
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Image</th>
              <th>Price</th>
              <th>Sell Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>Juce</td>
              <td>Albert Cook</td>
              <td>
                      <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" title="Lilian Fuller">
                          <img src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                      </ul>
              </td>
              <td>$10</td>
              <td>$8</td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
              <button type="button" class="btn btn-icon bg-label-success">
                  <i class='bx bx-edit-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-trash-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-street-view'></i>
              </button>
              </td>
            </tr>
            <tr>
              <td>Juce</td>
              <td>Christopher</td>
              <td>
                      <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" title="Lilian Fuller">
                          <img src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                      </ul>
              </td>
              <td>$10</td>
              <td>$8</td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
              <button type="button" class="btn btn-icon bg-label-success">
                  <i class='bx bx-edit-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-trash-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-street-view'></i>
              </button>
              </td>
            </tr>
            <tr>
              <td>Juce</td>
              <td>Ben Stock</td>
              <td>
                      <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" title="Lilian Fuller">
                          <img src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                      </ul>
              </td>
              <td>$10</td>
              <td>$8</td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
              <button type="button" class="btn btn-icon bg-label-success">
                  <i class='bx bx-edit-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-trash-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-street-view'></i>
              </button>
              </td>
            </tr>
            
            <tr>
              <td>Juce</td>
              <td>Leon</td>
              <td>
                      <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up" title="Lilian Fuller">
                          <img src="<?= base_url()?>assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                        </li>
                      </ul>
              </td>
              <td>$10</td>
              <td>$8</td>
              <td><span class="badge bg-label-primary me-1">Active</span></td>
              <td>
              <button type="button" class="btn btn-icon bg-label-success">
                  <i class='bx bx-edit-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-trash-alt'></i>
              </button>
              <button type="button" class="btn btn-icon btn-label-danger">
                    <i class='bx bx-street-view'></i>
              </button>
              </td>
            </tr>
          </tbody>
          </table>
           </div>
           <?php $this->load->view('footer') ?>
     <!--/ Transactions -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
     <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



    
  
     <!-- <script src="<?= base_url()?>assets/js/jquery-3.5.1.js"></script>
     <script src="<?= base_url()?>assets/js/jquery.datatables.min.js"></script>
   <script src="<?= base_url()?>assets/js/datatables.bootstrap5.min.js"></script> -->
     <script>
  $(document).ready(function() {
    $('#example').DataTable();
});
</script>
































