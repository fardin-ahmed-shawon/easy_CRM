<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Add Lead'; // Set the page title
?>
<?php require 'header.php'; ?>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <div class="card mb-4">
                    <div class="card-header">
                      <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                        <b>Add Lead</b>
                      </h5>
                      <br>
                    </div>
                    <div class="card-body">

                      <form action="" method="POST">

                        <!-- Agency Name -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Agency Name</label>
                          <div class="col-sm-10">
                            <input name="agency_name" type="text" class="form-control" id="basic-default-name" placeholder="Enter Agency Name"  required/>
                          </div>
                        </div>
                        
                        <!-- Brand Name -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Brand Name</label>
                          <div class="col-sm-10">
                            <input name="brand_name" type="text" class="form-control" id="basic-default-name" placeholder="Enter Brand Name"  required/>
                          </div>
                        </div>

                        <!-- Client Name -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Client Name</label>
                          <div class="col-sm-10">
                            <input name="client_name" type="text" class="form-control" id="basic-default-company" placeholder="Enter Client Name"  required/>
                          </div>
                        </div>

                        <!-- Phone No -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                          <div class="col-sm-10">
                            <input name="phone" minlength="11" maxlength="11" type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="01XXXXXXXXX" aria-label="Enter Phone No" aria-describedby="basic-default-phone2" required/>
                          </div>
                        </div>

                        <!-- Email -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input name="email" type="text" id="basic-default-email" class="form-control" placeholder="Enter Email" aria-label="Email" aria-describedby="basic-default-email2" />
                              <span class="input-group-text" id="basic-default-email2">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers &amp; periods</div>
                          </div>
                        </div>

                        <!-- Title -->
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                          <div class="col-sm-10">
                            <input name="title" type="text" class="form-control" id="basic-default-name" placeholder="Enter Title"  required/>
                          </div>
                        </div>
                       
                        <!-- Description -->
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                          <div class="col-sm-10">
                            <textarea name="description" id="basic-default-message" class="form-control" placeholder="Enter Description" aria-label="Description" aria-describedby="basic-icon-default-message2"></textarea>
                          </div>
                        </div>
                        
                        <!-- Date -->
                        <div class="mb-4 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-10">
                            <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" id="html5-date-input" readonly>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="row mb-4">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                  <option value="active" selected>Active</option>

                                    <!-- <option selected="" disabled>Choose Status</option>
                                    <option value="active">Active</option>
                                    <option value="on_process">On Process</option>
                                    <option value="meeting">Meeting</option>
                                    <option value="pending">Pending</option>
                                    <option value="onboard">Onboard</option>
                                    <option value="reject">Reject</option> -->
                                </select>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class=" mb-3 row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Lead</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
        </div>
    </div>
</div>
<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>