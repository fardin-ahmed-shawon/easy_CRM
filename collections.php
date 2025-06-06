<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Collections'; // Set the page title
?>
<?php require 'header.php'; ?>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->
<div class="container-xxl flex-grow-1 container-p-y">
<!-- Collections Card -->
<div class="card mb-4">
        <div class="card-header">
            <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                <b>Collections</b>
            </h5>
            <br>
            <!-- Search Form -->
            <form method="GET" action="" class="d-flex align-items-center">
                <div class="form-group me-2">
                    <label for="fromDate" class="form-label">From:</label>
                    <input type="date" id="fromDate" name="fromDate" class="form-control">
                </div>
                <div class="form-group me-2">
                    <label for="toDate" class="form-label">To:</label>
                    <input type="date" id="toDate" name="toDate" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Search</button>
            </form>
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

                      <tr>
                        <td></td>
                        <td></td>
                        <td><b>Total: </b></td>
                        <td><b>10,000 Tk</b></td>
                        <td></td>
                        <td></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
            </div>
</div>
<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>