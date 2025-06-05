<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
require 'header.php';


$project_id = $_GET['id'] ?? ''; 

$project = [
    'id' => $project_id,
    'agency_name' => 'Easy Tech LTD.',
    'brand_name' => 'Easy Tech',
    'client_name' => 'Fardin',
    'phone' => '01944667441',
    'email' => 'fardin@gmail.com',
    'title' => 'project Title Example',
    'description' => 'This is a sample description for the project.',
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
                    <h5 class="text-primary mb-0"><b>Project Details</b></h5>
                    <a href="view-projects.php" class="btn btn-secondary">Back to Projects</a>
                </div>
                <div class="card-body">

                    <!-- project Information -->
                    <div class="demo-inline-spacing mt-3">
                        <div class="list-group">
                            <a href="javascript:void(0);" class="py-3 text-center list-group-item list-group-item-action active">
                                <strong style="font-size: 20px;">Project Information</strong>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Agency Name:</strong> <?php echo $project['agency_name']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Brand Name:</strong> <?php echo $project['brand_name']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Client Name:</strong> <?php echo $project['client_name']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Phone:</strong> <?php echo $project['phone']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Email:</strong> <?php echo $project['email']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Title:</strong> <?php echo $project['title']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Description:</strong> <?php echo $project['description']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Date:</strong> <?php echo $project['date']; ?>
                            </a>
                            <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                <strong>Status:</strong> 
                                <span class="badge bg-label-success"><?php echo ucfirst($project['status']); ?></span>
                            </a>
                        </div>
                    </div>


                    <!-- Actions -->
                    <h6 class="text-muted mt-4">Actions</h6>
                    <div class="d-flex gap-2">
                        <a href="edit-project.php?id=<?php echo $project['id']; ?>" class="btn btn-warning">Edit Project</a>

                        <form action="delete-project.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                            <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
                            <button type="submit" class="btn btn-danger">Delete Project</button>
                        </form>

                        <form action="update-status.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
                            <select name="status" class="form-select w-auto" onchange="this.form.submit()">
                                <option value="Onboard" <?php echo $project['status'] == 'Onboard' ? 'selected' : ''; ?>>Onboard</option>
                                <option value="Completed" <?php echo $project['status'] == 'Completed' ? 'selected' : ''; ?>>Completed</option>
                                <option value="Cancelled" <?php echo $project['status'] == 'Cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                            </select>
                        </form>
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