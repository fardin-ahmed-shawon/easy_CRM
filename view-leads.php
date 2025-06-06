<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'View Leads'; // Set the page title
?>
<?php require 'header.php'; ?>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
                <div class="card-header">
                      <h5 style="padding-bottom: 22px; border-bottom: 1px solid;" class="text-primary mb-0">
                        <b>View Leads</b>
                      </h5>
                      <br>
                      
                      <div class="d-flex">
                        <div class="input-group input-group-merge" style="max-width: 600px; margin-right: 20px">
                          <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                          <input type="text" class="form-control" placeholder="Search Brand Name..." aria-label="Search Brand Name..." aria-describedby="basic-addon-search31">
                        </div>
                          <select class="form-select w-auto" id="sort-by-status" onchange="sortTableByStatus()">
                              <option value="" selected disabled>Sort by Status</option>
                              <option value="Active">Active</option>
                              <option value="Meeting">Meeting</option>
                              <option value="Pending">Pending</option>
                              <option value="Onboard">Onboard</option>
                              <option value="Reject">Reject</option>
                          </select>
                      </div>
                </div>
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Lead No</th>
                        <th>Agency Name</th>
                        <th>Brand Name</th>
                        <th>Client Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th colspan="2">Option</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                      <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#55</strong>
                            </td>

                            <td>Easy Tech LTD.</td>
                            <td>Easy Tech</td>
                            <td>Fardin</td>
                            <td>01944667441</td>
                            <td>fardin@gmail.com</td>
                            <td>7/9/25</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>

                            <td>
                              <a href="lead-details.php">
                                <button class="btn btn-primary">Details</button>
                              </a>
                            </td>
                            <td>
                              <a href="onboard-confirmation.php">
                                <button class="btn btn-success">Onboard</button>
                              </a>
                            </td>

                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            </td>
                      </tr>


                      <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#54</strong>
                            </td>

                            <td>Easy Tech LTD.</td>
                            <td>Easy Tech</td>
                            <td>Fardin</td>
                            <td>01944667441</td>
                            <td>fardin@gmail.com</td>
                            <td>7/9/25</td>
                            <td><span class="badge bg-label-success me-1">Onboard</span></td>

                            <td>
                              <a href="lead-details.php">
                                <button class="btn btn-primary">Details</button>
                              </a>
                            </td>
                            <!-- <td>
                              <a href="onboard-confirmation.php">
                                <button class="btn btn-success">Onboard</button>
                              </a>
                            </td> -->
                            <td>Alread Onboard</td>

                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            </td>
                      </tr>

                      <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#53</strong>
                            </td>

                            <td>Easy Tech LTD.</td>
                            <td>Easy Tech</td>
                            <td>Fardin</td>
                            <td>01944667441</td>
                            <td>fardin@gmail.com</td>
                            <td>7/9/25</td>
                            <td><span class="badge bg-label-info me-1">Meeting</span></td>

                            <td>
                              <a href="lead-details.php">
                                <button class="btn btn-primary">Details</button>
                              </a>
                            </td>
                            <td>
                              <a href="onboard-confirmation.php">
                                <button class="btn btn-success">Onboard</button>
                              </a>
                            </td>

                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            </td>
                      </tr>

                      
                      <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#52</strong>
                            </td>

                            <td>Easy Tech LTD.</td>
                            <td>Easy Tech</td>
                            <td>Fardin</td>
                            <td>01944667441</td>
                            <td>fardin@gmail.com</td>
                            <td>7/9/25</td>
                            <td><span class="badge bg-label-warning me-1">Pending</span></td>

                            <td>
                              <a href="lead-details.php">
                                <button class="btn btn-primary">Details</button>
                              </a>
                            </td>
                            <td>
                              <a href="onboard-confirmation.php">
                                <button class="btn btn-success">Onboard</button>
                              </a>
                            </td>

                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            </td>
                      </tr>


                      <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>#51</strong>
                            </td>

                            <td>Easy Tech LTD.</td>
                            <td>Easy Tech</td>
                            <td>Fardin</td>
                            <td>01944667441</td>
                            <td>fardin@gmail.com</td>
                            <td>7/9/25</td>
                            <td><span class="badge bg-label-danger me-1">Reject</span></td>

                            <td>
                              <a href="lead-details.php">
                                <button class="btn btn-primary">Details</button>
                              </a>
                            </td>
                            <!-- <td>
                              <a href="onboard-confirmation.php">
                                <button class="btn btn-success">Onboard</button>
                              </a>
                            </td> -->
                            <td>Unavailable</td>

                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                            </div>
                            </td>
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