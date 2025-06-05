<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Project Details'; // Set the page title
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
    'type' => 'Web Development',
    'budget' => '15000',
    'payment_plan' => 'Mileston (2 Portions)',
    'requirements' => 'Responsive design, SEO optimization, CMS integration',
    'deadline' => '2025-12-31',
];
?>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->


<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="text-primary mb-0"><b>Project No: #3</b></h5>
                    <a href="view-projects.php" class="btn btn-secondary">Back to Projects</a>
                </div>
                <div class="card-body">
                    <!-- project Information -->
                    <div class="row mt-3">
                        <!-- Left Column -->
                        <div class="col-md-6">
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

                        <!-- Right Column -->
                        <div class="col-md-6 pt-3 pt-md-0">
                            <div class="list-group">
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Project Type:</strong> <?php echo $project['type']; ?>
                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Budget:</strong> <?php echo $project['budget']; ?>
                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Payment Plan:</strong> <?php echo $project['payment_plan']; ?>
                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Requirements:</strong> <?php echo $project['requirements']; ?>
                                </a>
                                <a href="javascript:void(0);" class="py-3 list-group-item list-group-item-action">
                                    <strong>Deadline:</strong> <?php echo $project['deadline']; ?>
                                </a>
                            </div>

                            <!-- Action 1 -->
                            <h6 class="text-muted mt-4">Change Status</h6>
                            <form action="update-status.php?id=<?php echo $project_id; ?>&type='project'" method="POST">
                                <div class="d-flex gap-2">
                                    <select name="status" class="form-select w-auto">
                                        <option value="Onboard" <?php echo $project['status'] == 'Onboard' ? 'selected' : ''; ?>>Onboard</option>
                                        <option value="Completed" <?php echo $project['status'] == 'Completed' ? 'selected' : ''; ?>>Completed</option>
                                        <option value="Cancelled" <?php echo $project['status'] == 'Cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                                    </select>
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>
                            </form>

                            <!-- Action 2 -->
                            <h6 class="text-muted mt-4">Actions</h6>
                            <div class="d-flex gap-2">
                                <a href="edit-project.php?id=<?php echo $project['id']; ?>" class="btn btn-warning">Edit Project</a>
                                <form id="delete-form" action="delete-project.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Delete Project</button>
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