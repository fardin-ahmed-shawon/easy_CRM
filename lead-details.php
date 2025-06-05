<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Lead Details'; // Set the page title
require 'header.php';


$lead_id = $_GET['id'] ?? 1; 

$lead = [
    'id' => $lead_id,
    'agency_name' => 'Easy Tech LTD.',
    'brand_name' => 'Easy Tech',
    'client_name' => 'Fardin',
    'phone' => '01944667441',
    'email' => 'fardin@gmail.com',
    'title' => 'Lead Title Example',
    'description' => 'This is a sample description for the lead.',
    'date' => '2025-06-05',
    'status' => 'Active',
];
?>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="text-primary mb-0"><b>Lead No: #5</b></h5>
                    <a href="view-leads.php" class="btn btn-secondary">Back to Leads</a>
                </div>
                <div class="card-body">

                    <!-- Lead Information -->
                    <div class="demo-inline-spacing mt-3">
                        <div class="list-group">
                            <a href="javascript:void(0);" class="py-3 text-center list-group-item list-group-item-action active">
                                <strong style="font-size: 20px;">Lead Information</strong>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Agency Name:</strong> <?php echo $lead['agency_name']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Brand Name:</strong> <?php echo $lead['brand_name']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Client Name:</strong> <?php echo $lead['client_name']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Phone:</strong> <?php echo $lead['phone']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Email:</strong> <?php echo $lead['email']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Title:</strong> <?php echo $lead['title']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Description:</strong> <?php echo $lead['description']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Date:</strong> <?php echo $lead['date']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Status:</strong> 
                                <span class="badge bg-label-success"><?php echo ucfirst($lead['status']); ?></span>
                            </a>
                        </div>
                    </div>

                    <!-- Actions and Status Change -->
                    <div class="d-flex justify-content-between">
                        <!-- Action 1 -->
                        <div>
                            <h6 class="text-muted mt-4">Change Status</h6>
                            <form action="update-status.php?id=<?php echo $lead_id; ?>&type='lead'" method="POST">
                                <div class="d-flex gap-2">
                                    <select name="status" class="form-select w-auto">
                                        <option value="Active" <?php echo $lead['status'] == 'Active' ? 'selected' : ''; ?>>Active</option>
                                        <option value="Meeting" <?php echo $lead['status'] == 'Meeting' ? 'selected' : ''; ?>>Meeting</option>
                                        <option value="Pending" <?php echo $lead['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                        <option value="Onboard" <?php echo $lead['status'] == 'Onboard' ? 'selected' : ''; ?>>Onboard</option>
                                        <option value="Reject" <?php echo $lead['status'] == 'Reject' ? 'selected' : ''; ?>>Reject</option>
                                    </select>
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>
                            </form>
                        </div>  

                        <!-- Action 2 -->
                        <div>
                            <h6 class="text-muted mt-4">Actions</h6>
                            <div class="d-flex gap-2">
                                <a href="edit-lead.php?id=<?php echo $lead['id']; ?>" class="btn btn-warning">Edit Lead</a>
                                <form id="delete-form" action="delete-lead.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $lead['id']; ?>">
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete Lead</button>
                                </form>
                            </div>
                        </div>
                            
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------>
<!--========================================================================-->
<?php require 'footer.php'; ?>
<script>
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