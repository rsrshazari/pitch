<?php $this->load->view('header') ?>


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Account Settings /</span> Billings & Plans
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="<?= base_url('home/accountsetting')?>"><i class="bx bx-user me-1"></i> Profile</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('home/accountsecurity')?>"><i class="bx bx-lock-alt me-1"></i> Security</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-detail me-1"></i> Billing & Plans</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('home/accountnotifications')?>"><i class="bx bx-bell me-1"></i> Notifications</a></li>
      <li class="nav-item"><a class="nav-link" href="<?= base_url('home/accountconnections')?>"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
    </ul>
    <div class="card mb-4">
      <!-- Current Plan -->
      <h5 class="card-header">Current Plan</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-1">
            <div class="mb-4">
              <h6 class="fw-semibold mb-2">Your Current Plan is Basic</h6>
              <p>A simple start for everyone</p>
            </div>
            <div class="mb-4">
              <h6 class="fw-semibold mb-2">Active until Dec 09, 2021</h6>
              <p>We will send you a notification upon Subscription expiration</p>
            </div>
            <div class="mb-4">
              <h6 class="fw-semibold mb-2"><span class="me-2">$199 Per Month</span> <span class="badge bg-label-primary">Popular</span></h6>
              <p>Standard plan for small to medium businesses</p>
            </div>
          </div>
          <div class="col-md-6 mb-1">
            <div class="alert alert-warning mb-4" role="alert">
              <h6 class="alert-heading fw-bold mb-1">We need your attention!</h6>
              <span>Your plan requires update</span>
            </div>
            <div class="plan-statistics">
              <div class="d-flex justify-content-between">
                <span class="fw-semibold mb-2">Days</span>
                <span class="fw-semibold mb-2">24 of 30 Days</span>
              </div>
              <div class="progress">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-1 mb-0">6 days remaining until your plan requires update</p>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary me-2 mt-2" data-bs-toggle="modal" data-bs-target="#pricingModal">Upgrade Plan</button>
            <button class="btn btn-label-secondary cancel-subscription mt-2">Cancel Subscription</button>
          </div>
        </div>
      </div>
      <!-- Modal -->

      
      <!-- /Modal -->

      <!-- /Current Plan -->
    </div>
    <div class="card mb-4">
      <h5 class="card-header">Payment Methods</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <form id="creditCardForm" class="row g-3" onsubmit="return false">
              <div class="col-12">
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cc" checked="" />
                  <label class="form-check-label" for="collapsible-payment-cc">Credit/Debit/ATM Card</label>
                </div>
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cash" />
                  <label class="form-check-label" for="collapsible-payment-cash">Paypal account</label>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label w-100" for="paymentCard">Card Number</label>
                <div class="input-group input-group-merge">
                  <input id="paymentCard" name="paymentCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="paymentCard2" />
                  <span class="input-group-text cursor-pointer p-1" id="paymentCard2"><span class="card-type"></span></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="paymentName">Name</label>
                <input type="text" id="paymentName" class="form-control" placeholder="John Doe" />
              </div>
              <div class="col-6 col-md-3">
                <label class="form-label" for="paymentExpiryDate">Exp. Date</label>
                <input type="text" id="paymentExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
              </div>
              <div class="col-6 col-md-3">
                <label class="form-label" for="paymentCvv">CVV Code</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="paymentCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                  <span class="input-group-text cursor-pointer" id="paymentCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                </div>
              </div>
              <div class="col-12">
                <label class="switch">
                  <input type="checkbox" class="switch-input">
                  <span class="switch-toggle-slider">
                    <span class="switch-on"></span>
                    <span class="switch-off"></span>
                  </span>
                  <span class="switch-label">Save card for future billing?</span>
                </label>
              </div>
              <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Save Changes</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
              </div>
            </form>
          </div>
          <div class="col-md-6 mt-5 mt-md-0">
            <h6>My Cards</h6>
            <div class="added-cards">
              <div class="cardMaster bg-lighter rounded-2 p-3 mb-3">
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                  <div class="card-information me-2">
                    <img class="mb-3 img-fluid" src="<?= base_url()?>assets/img/icons/payments/mastercard.png" alt="Master Card">
                    <div class="d-flex align-items-center mb-1 flex-wrap gap-2">
                      <h6 class="mb-0 me-2">Tom McBride</h6>
                      <span class="badge bg-label-primary">Primary</span>
                    </div>
                    <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 9856</span>
                  </div>
                  <div class="d-flex flex-column text-start text-sm-end">
                    <div class="d-flex order-sm-0 order-1 mt-sm-0 mt-3">
                      <button class="btn btn-label-primary me-2" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                      <button class="btn btn-label-secondary">Delete</button>
                    </div>
                    <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                  </div>
                </div>
              </div>
              <div class="cardMaster bg-lighter rounded-2 p-3">
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                  <div class="card-information me-2">
                    <img class="mb-3 img-fluid" src="<?= base_url()?>assets/img/icons/payments/visa.png" alt="Visa Card">
                    <h6 class="mb-1">Mildred Wagner</h6>
                    <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 5896</span>
                  </div>
                  <div class="d-flex flex-column text-start text-sm-end">
                    <div class="d-flex order-sm-0 order-1 mt-sm-0 mt-3">
                      <button class="btn btn-label-primary me-2" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                      <button class="btn btn-label-secondary">Delete</button>
                    </div>
                    <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 10/27</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            <!-- Add New Credit Card Modal -->
<div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Edit Card</h3>
          <p>Edit your saved card details</p>
        </div>
        <form id="editCCForm" class="row g-3" onsubmit="return false">
          <div class="col-12">
            <label class="form-label w-100" for="modalEditCard">Card Number</label>
            <div class="input-group input-group-merge">
              <input id="modalEditCard" name="modalEditCard" class="form-control credit-card-mask-edit" type="text" placeholder="4356 3215 6548 7898" value="4356 3215 6548 7898" aria-describedby="modalEditCard2" />
              <span class="input-group-text cursor-pointer p-1" id="modalEditCard2"><span class="card-type-edit"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditName">Name</label>
            <input type="text" id="modalEditName" class="form-control" placeholder="John Doe" value="John Doe" />
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalEditExpiryDate">Exp. Date</label>
            <input type="text" id="modalEditExpiryDate" class="form-control expiry-date-mask-edit" placeholder="MM/YY" value="08/28" />
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalEditCvv">CVV Code</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalEditCvv" class="form-control cvv-code-mask-edit" maxlength="3" placeholder="654" value="XXX" />
              <span class="input-group-text cursor-pointer" id="modalEditCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
            </div>
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Set as primary card</span>
            </label>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3">Submit</button>
            <button type="reset" class="btn btn-label-secondary mt-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->

            <!--/ Modal -->
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4">
      <!-- Billing Address -->
      <h5 class="card-header">Billing Address</h5>
      <div class="card-body">
        <form id="formAccountSettings" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-sm-6">
              <label for="companyName" class="form-label">Company Name</label>
              <input type="text" id="companyName" name="companyName" class="form-control" placeholder="ThemeSelection" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="billingEmail" class="form-label">Billing Email</label>
              <input class="form-control" type="text" id="billingEmail" name="billingEmail" placeholder="john.doe@example.com" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="taxId" class="form-label">Tax ID</label>
              <input type="text" id="taxId" name="taxId" class="form-control" placeholder="Enter Tax ID" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="vatNumber" class="form-label">VAT Number</label>
              <input class="form-control" type="text" id="vatNumber" name="vatNumber" placeholder="Enter VAT Number" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="mobileNumber" class="form-label">Mobile</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">US (+1)</span>
                <input class="form-control mobile-number" type="text" id="mobileNumber" name="mobileNumber" placeholder="202 555 0111" />
              </div>
            </div>
            <div class="mb-3 col-sm-6">
              <label for="country" class="form-label">Country</label>
              <select id="country" class="form-select select2" name="country">
                <option selected>USA</option>
                <option>Canada</option>
                <option>UK</option>
                <option>Germany</option>
                <option>France</option>
              </select>
            </div>
            <div class="mb-3 col-12">
              <label for="billingAddress" class="form-label">Billing Address</label>
              <input type="text" class="form-control" id="billingAddress" name="billingAddress" placeholder="Billing Address" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="state" class="form-label">State</label>
              <input class="form-control" type="text" id="state" name="state" placeholder="California" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="zipCode" class="form-label">Zip Code</label>
              <input type="text" class="form-control zip-code" id="zipCode" name="zipCode" placeholder="231465" maxlength="6" />
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-label-secondary">Discard</button>
          </div>
        </form>
      </div>
      <!-- /Billing Address -->
    </div>
    <div class="card">
      <!-- Billing History -->
      <h5 class="card-header border-bottom">Billing History</h5>
      <div class="card-datatable table-responsive">
        <table class="invoice-list-table table border-top">
          <thead>
            <tr>
              <th></th>
              <th>#ID</th>
              <th><i class='bx bx-trending-up'></i></th>
              <th>Client</th>
              <th>Total</th>
              <th class="text-truncate">Issued Date</th>
              <th>Balance</th>
              <th>Invoice Status</th>
              <th class="cell-fit">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
      <!--/ Billing History -->
    </div>
  </div>
</div>


            
            <!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
        <div class="pricing-plans">
          <div class="text-center mb-3">
            <h3>Find the right plan for your site</h3>
            <p> Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your needs. </p>
          </div>
          <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 my-5 pt-sm-5">
            <label class="switch switch-primary ps-sm-5 mt-3 me-0">
              <span class="switch-label ps-0 ms-sm-5">Monthly</span>
              <input type="checkbox" class="switch-input price-duration-toggler" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Annual</span>
            </label>
            <div class="pricing-offer mt-n5 ms-n5 d-none d-sm-block">
              <img src="<?= base_url()?>assets/img/pages/pricing-arrow-light.png" alt="arrow img" class="position-absolute scaleX-n1-rtl" data-app-dark-img="pages/pricing-arrow-dark.png" data-app-light-img="pages/pricing-arrow-light.html">
              <span class="badge badge-sm bg-label-primary ms-4 mt-2">Save upto 10%</span>
            </div>
          </div>
          <div class="row mx-0 gy-3">
            <!-- Starter -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card border shadow-none">
                <div class="card-body">
                  <h3 class="fw-bold text-center text-uppercase mt-3">Starter</h3>
                  <div class="my-4 py-2 text-center">
                    <img src="<?= base_url()?>assets/img/icons/unicons/bookmark.png" alt="Starter Image" height="80">
                  </div>

                  <div class="text-center mb-4">
                    <div class="mb-2 d-flex justify-content-center">
                      <sup class="h5 pricing-currency mt-3 mb-0 me-1">$</sup>
                      <h1 class="fw-bold h1 mb-0">0</h1>
                      <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                    </div>
                  </div>

                  <ul class="ps-3 pt-4 pb-2 list-unstyled">
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Rich landing pages</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 100+ components</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                  </ul>

                  <a href="auth-register-basic.html" class="btn btn-label-primary d-grid w-100">Get started for free</a>
                </div>
              </div>
            </div>

            <!-- Exclusive -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card border border-primary shadow-none">
                <div class="card-body">
                  <div class="pricing-exclusive text-end m-n2">
                    <span class="badge bg-label-primary">Exclusive</span>
                  </div>
                  <h3 class="fw-bold text-center text-uppercase mt-2">Pro</h3>
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
                    <small class=" position-absolute start-0 end-0 m-auto price-yearly price-yearly-toggle text-muted">$ 499 / year</small>
                  </div>

                  <ul class="ps-3 pt-4 pb-2 list-unstyled">
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Up to 5 users</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> 120+ components</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Basic support on Github</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Monthly updates</li>
                    <li class="mb-2"><span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Integrations</li>
                  </ul>

                  <a href="auth-register-basic.html" class="btn btn-primary d-grid w-100">Get Started</a>
                </div>
              </div>
            </div>

            <!-- Enterprise -->
            <div class="col-xl">
              <div class="card border shadow-none">
                <div class="card-body">
                  <h3 class="text-center text-uppercase fw-bold mt-3">Enterprise</h3>

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
                    <small class=" position-absolute start-0 end-0 m-auto price-yearly price-yearly-toggle text-muted">$ 999 / year</small>
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

                  <a href="auth-register-basic.html" class="btn btn-label-primary d-grid w-100">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Pricing Plans -->
      </div>
    </div>
  </div>
</div>
<!--/ Pricing Modal -->
<?php $this->load->view('footer') ?>
