<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Project Payments'; // Set the page title
?>
<?php require 'header.php'; ?>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Header -->
            <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-primary mb-4">
                                <div class="card-body">
                                    <h2 class="text-white">Budget</h2>
                                    <h5 class="text-white">৳ 15000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-info mb-4">
                                <div class="card-body">
                                    <h2 class="text-white">Paid</h2>
                                    <h5 class="text-white">৳ 5000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-secondary mb-4">
                                <div class="card-body">
                                    <h2 class="text-white">Due</h2>
                                    <h5 class="text-white">৳ 10000</h5>
                                </div>
                            </div>
                        </div>
            </div>
            <br><br>

            <!-- Payment Information Card -->
            <div class="card mb-4">
                    <div class="card-header">
                      <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                        <b>Payment Information</b>
                      </h5>
                      <br>
                    </div>
                    <div class="card-body">

                      <form action="" method="POST">

                        <!-- Payment Method -->
                        <div class="row mb-4">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Payment Method</label>
                            <div class="col-md-10">
                                <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option selected="" disabled>Choose Payment Method</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="bKash">bKash</option>
                                    <option value="Rocket">Rocket</option>
                                    <option value="Nagad">Nagad</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Payment Amount -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Payment Amount</label>
                          <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-text">BDT</span>
                                <input type="text" class="form-control" placeholder="Enter Payment Amount" aria-label="Amount">
                                
                            </div>
                          </div>
                        </div>
                       
                        <!-- Note -->
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Note</label>
                          <div class="col-sm-10">
                            <textarea name="description" id="basic-default-message" class="form-control" placeholder="Write Payment Note" aria-label="Description" aria-describedby="basic-icon-default-message2"></textarea>
                          </div>
                        </div>
                        

                
                        <!-- Submit -->
                        <div class=" mb-3 row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>

                      </form>
                    </div>
            </div>

            <!-- Project Information Card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                      <b>Project Information</b>
                    </h5>
                    <br>
                </div>
                <div class="card-body">
                          <div class="list-group">
                                
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Agency Name:</strong> Easy Tech LTD.                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Brand Name:</strong> Easy Tech                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Client Name:</strong> Fardin                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Phone:</strong> 01944667441                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Email:</strong> fardin@gmail.com                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Title:</strong> project Title Example                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Lead Insertion Date:</strong> 2025-06-05                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Status:</strong> 
                                    <span class="badge bg-label-info">Onboard</span>
                                </a>
                            

                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                  <strong>Onboard Date:</strong> 2025-12-31
                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Project Type:</strong> Web Development                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Budget: </strong>15000 Tk
                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Payment Plan:</strong> Mileston (2 Portions)                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Requirements:</strong> Responsive design, SEO optimization, CMS integration                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Deadline:</strong> 2025-12-31                                </a>
                            </div>
                </div>
            </div>

            <!-- Payment History Card -->
            <div class="card mb-4">
                <div class="card-header">
                      <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                        <b>Payment History</b>
                      </h5>
                      <br>
                </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table mb-4">
                    <thead class="table-light">
                      <tr>
                        <th>Payment No</th>
                        <th>Date</th>
                        <th>Payment Method</th>
                        <th>Amount</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                      <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#2</strong>
                            </td>
                            <td>7/9/25</td>
                            <td>bKash</td>
                            <td>5000 Tk</td>
                            <td>
                              <button class="btn btn-primary" onclick="showPaymentNote('This is the payment note for Payment #1')">Payment Note</button>
                            </td>
                            <td>
                              <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                            </td>
                      </tr>

                      <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#1</strong>
                            </td>
                            <td>7/9/25</td>
                            <td>bKash</td>
                            <td>2000 Tk</td>
                            <td>
                              <button class="btn btn-primary" onclick="showPaymentNote('This is the payment note for Payment #1')">Payment Note</button>
                            </td>
                            <td>
                              <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                            </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
            </div>

            <!-- Invoice Card -->
            <div class="card mb-4">
                <div class="card-header">
                      <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                        <b>Invoice</b>
                      </h5>
                      <br>
                </div>
                <div class="card-body">
                    <p>The invoice will be generated after the project is on board. You can view and download it by clicking the button below.</p>
                    <a href="invoice.php">
                      <button type="button" class="btn btn-primary">Download Invoice</button>
                    </a>
                </div>

        </div>
    </div>
</div>
<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>
<script>
  function showPaymentNote(note) {
    Swal.fire({
      title: 'Payment Note',
      text: note,
      icon: 'info',
      confirmButtonText: 'Close'
    });
  }

  function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form').submit();
            }
        });
    }
</script>
