<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Onboard Confirmation'; // Set the page title
?>
<?php require 'header.php'; ?>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                    <div class="card-header">
                      <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                        <b>Onboard Confirmation</b>
                      </h5>
                      <br>
                    </div>
                    <div class="card-body">
                
                      <form action="#" method="POST">

                        <!-- Choose Project Type -->
                        <div class="row mb-4">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Project</label>
                            <div class="col-md-10">
                                <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option value="" disabled selected>Choose Project Type</option>
                                    <option value="e-commerce">E-Commerce</option>
                                    <option value="multi_vendor_e-commerce">Multi Vendor E-Commerce</option>
                                    <option value="mini_e_commerce">Mini E-Commerce</option>
                                    <option value="landing_e_commerce">Landing Page E-Commerce</option>
                                    <option value="">Custom Website Development</option>
                                    <option value="">Professional Page Setup</option>
                                    <option value="">Ad Campaign</option>
                                    <option value="">SEO</option>
                                    <option value="">Custom E-Commerce Website</option>
                                </select>
                            </div>
                        </div>

                        <!-- Budget -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Budget</label>
                          <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-text">BDT</span>
                                <input type="text" class="form-control" placeholder="Enter Budget Amount" aria-label="Amount">
                                
                            </div>
                          </div>
                        </div>

                        <!-- Choose Payment Plan -->
                        <div class="row mb-4">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Payment</label>
                            <div class="col-md-10">
                                <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option value="" disabled selected>Choose Payment Plan</option>
                                    <option value="one_time">One-Time</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="milestone_2">Mileston (2 Portions)</option>
                                    <option value="milestone_3">Mileston (3 Portions)</option>
                                </select>
                            </div>
                        </div>

                        
                        <!-- Requirment -->
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Requirment</label>
                          <div class="col-sm-10">
                            <textarea name="requirment" id="basic-default-message" class="form-control" placeholder="Enter Requirment" aria-label="Requirment" aria-describedby="basic-icon-default-message2"></textarea>
                          </div>
                        </div>
                        
                        <!-- Deadline -->
                        <div class="mb-4 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Deadline</label>
                            <div class="col-md-10">
                            <input name="date" class="form-control" type="date" value="" id="html5-date-input">
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class=" mb-3 row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
            </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                        <b>Project Details</b>
                    </h5>
                    <br>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label"><b>Title</b></label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="E-commerce Development">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label"><b>Agency Name</b></label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="Easy Tech LTD">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label"><b>Brand Name</b></label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="Easy Tech">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label"><b>Client Name</b></label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="Fardin Ahmed Shawon">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label"><b>Phone No</b></label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="01944667441">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label"><b>Email</b></label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="mdshawon7443@gmail.com">
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>