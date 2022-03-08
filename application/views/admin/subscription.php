<?php $this->load->view('admin/header') ?>

  <!-- Content wrapper -->
  <div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-2">Subscription Plan </h4>
    
    
<div class="card overflow-hidden">
<!-- Pricing Plans -->
<div class="pricing-plans pb-sm-5 pb-2 rounded-top">
<div class="container py-5">
<div class="row mx-0 gy-3">
<!-- Starter -->
<div class="col-lg mb-md-0 mb-4">
  <div class="card">
    <div class="card-body">
      <h3 class="card-title fw-bold text-center text-uppercase mt-3">Starter</h3>
      <div class="my-4 py-2 text-center">
        <img src="<?= base_url()?>assets/img/icons/unicons/bookmark.png" alt="Starter Image" height="80">
      </div>

      <div class="text-center mb-4">
        <div class="mb-2 d-flex justify-content-center">
          <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
          <h1 class="fw-bold h1 mb-0">0</h1>
          <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
        </div>
        <small class="price-yearly price-yearly-toggle text-muted">Free</small>
      </div>

      <ul class="ps-3 pt-4 pb-2 list-unstyled">
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Rich landing pages</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 100+ components</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
      </ul>

      <a data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-label-primary d-grid w-100">Edit</a>
    </div>
  </div>
</div>

<!-- Exclusive -->
<div class="col-lg mb-md-0 mb-4">
  <div class="card border border-primary">
    <div class="card-body">
      <div class="pricing-exclusive">
        <span class="badge bg-label-primary">Exclusive</span>
      </div>
      <h3 class="card-title fw-bold text-center text-uppercase mt-3">Pro</h3>
      <div class="my-4 py-2 text-center">
        <img src="<?= base_url()?>assets/img/icons/unicons/wallet-round.png" alt="Pro Image" height="80">
      </div>
      <div class="text-center mb-4">
        <div class="mb-2 d-flex justify-content-center">
          <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
          <h1 class="price-toggle price-yearly fw-bold h1 mb-0">42</h1>
          <h1 class="price-toggle price-monthly fw-bold h1 mb-0 d-none">49</h1>
          <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
        </div>
        <small class="price-yearly price-yearly-toggle text-muted">$ 499 / year</small>
      </div>

      <ul class="ps-3 pt-4 pb-2 list-unstyled">
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Up to 5 users</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 120+ components</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Monthly updates</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Integrations</li>
      </ul>

      <a data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary d-grid w-100">Edit</a>
    </div>
  </div>
</div>

<!-- Enterprise -->
<div class="col-lg">
  <div class="card">
    <div class="card-body">
      <h3 class="card-title text-center text-uppercase mt-3 fw-bold">Enterprise</h3>

      <div class="my-4 py-2 text-center">
        <img src="<?= base_url()?>assets/img/icons/unicons/briefcase-round.png" alt="Pro Image" height="80">
      </div>

      <div class="text-center mb-4">
        <div class="mb-2 d-flex justify-content-center">
          <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
          <h1 class="price-toggle price-yearly fw-bold h1 mb-0">84</h1>
          <h1 class="price-toggle price-monthly fw-bold h1 mb-0 d-none">99</h1>
          <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
        </div>
        <small class="price-yearly price-yearly-toggle text-muted">$ 999 / year</small>
      </div>

      <ul class="ps-3 pt-4 pb-2 list-unstyled">
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Up to 10 users</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 150+ components</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Monthly updates</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Integrations</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Product Support</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> API access</li>
        <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Speedy build tooling</li>
      </ul>
      <a data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-label-primary d-grid w-100">Edit</a>

    </div>
  </div>
</div>


<!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-simple modal-dialog-centered modal-add-new-role">
<div class="modal-content p-3 p-md-5">
<div class="modal-body">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<div class="text-center mb-4">
  <h3 class="role-title">Edit Your Subscription</h3>
  <br>
  <br>

</div>
<!-- Add role form -->
<form id="addRoleForm" class="row g-3" onsubmit="return false">
<div class="row">
                    <div class="col-lg-6">
                        <div class="merchant-name">
                            <label for="validationCustom01"><b>Plan Name</b></label>
                            <input type="text" class="form-control" placeholder="Plan Name" name="name" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="email-name">
                            <label for="validationCustom07"><b>Monthly Price</b></label>
                            <input type="text" class="form-control" placeholder="Monthly Price" name="email" id="validationCustom07" required style="padding: 12px 20px;">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="phn-name">
                            <label for="validationCustom06"><b>Yearly Price </b></label>
                            <input type="text" class="form-control" placeholder="Yearly Price " name="phone_no" maxlength="10" id="validationCustom06" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pin-name">
                            <label for="validationCustom04"><b>Status </b></label>
                            <input type="text" class="form-control" placeholder="Status " name="pin_code" id="validationCustom04" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <!-- Snow Theme -->
                        <div class="col-12">
                          <div class="card mb-4 mt-5">
                            <div class="card-body">
                              <div id="snow-toolbar">
                                <span class="ql-formats">
                                  <select class="ql-font"></select>
                                  <select class="ql-size"></select>
                                </span>
                                <span class="ql-formats">
                                  <button class="ql-bold"></button>
                                  <button class="ql-italic"></button>
                                  <button class="ql-underline"></button>
                                  <button class="ql-strike"></button>
                                </span>
                                <span class="ql-formats">
                                  <select class="ql-color"></select>
                                  <select class="ql-background"></select>
                                </span>
                                <span class="ql-formats">
                                  <button class="ql-script" value="sub"></button>
                                  <button class="ql-script" value="super"></button>
                                </span>
                                <span class="ql-formats">
                                  <button class="ql-header" value="1"></button>
                                  <button class="ql-header" value="2"></button>
                                  <button class="ql-blockquote"></button>
                                  <button class="ql-code-block"></button>
                                </span>
                              </div>
                              <div id="snow-editor">
                                <h6>Quill Rich Text Editor</h6>
                                <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love. </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /Snow Theme -->

                </div>
  <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
</form>
<!--/ Add role form -->


</div>
</div>
</div>
<!--/ Pricing Plans -->
</div>

    
  </div>
  <!-- / Content -->

<?php $this->load->view('admin/footer') ?>


