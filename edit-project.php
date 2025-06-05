<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Edit Project'; // Set the page title
require 'header.php';

// Retrieve project ID from the query string
$project_id = $_GET['id'] ?? '';

// Fetch project details (replace this with database query in production)
$project = [
    'id' => $project_id,
    'agency_name' => 'Easy Tech LTD.',
    'brand_name' => 'Easy Tech',
    'client_name' => 'Fardin',
    'phone' => '01944667441',
    'email' => 'fardin@gmail.com',
    'title' => 'Project Title Example',
    'description' => 'This is a sample description for the project.',
    'date' => '2025-06-05',
    'status' => 'Active',
    'type' => 'Web Development',
    'budget' => '15000',
    'payment_plan' => 'Milestone (2 Portions)',
    'requirements' => 'Responsive design, SEO optimization, CMS integration',
    'deadline' => '2025-12-31',
];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $updated_project = [
        'agency_name' => $_POST['agency_name'],
        'brand_name' => $_POST['brand_name'],
        'client_name' => $_POST['client_name'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'date' => $_POST['date'],
        'status' => $_POST['status'],
        
        'type' => $_POST['type'],
        'budget' => $_POST['budget'],
        'payment_plan' => $_POST['payment_plan'],
        'requirements' => $_POST['requirements'],
        'deadline' => $_POST['deadline'],
    ];

    // Update project in the database (replace this with actual database update logic)
    // ...

    // Redirect to project details page
    header("Location: project-details.php?id=$project_id");
    exit;
}
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="text-primary mb-0"><b>Edit Project</b></h5>
                    <a href="project-details.php?id=<?php echo $project_id; ?>" class="btn btn-secondary">Back to Project Details</a>
                </div><hr>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="agency_name" class="form-label">Agency Name</label>
                            <input type="text" name="agency_name" id="agency_name" class="form-control" value="<?php echo $project['agency_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="brand_name" class="form-label">Brand Name</label>
                            <input type="text" name="brand_name" id="brand_name" class="form-control" value="<?php echo $project['brand_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Client Name</label>
                            <input type="text" name="client_name" id="client_name" class="form-control" value="<?php echo $project['client_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $project['phone']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $project['email']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?php echo $project['title']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" required><?php echo $project['description']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control" value="<?php echo $project['date']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="Active" <?php echo $project['status'] == 'Active' ? 'selected' : ''; ?>>Active</option>
                                <option value="Onboard" <?php echo $project['status'] == 'Onboard' ? 'selected' : ''; ?>>Onboard</option>
                                <option value="Completed" <?php echo $project['status'] == 'Completed' ? 'selected' : ''; ?>>Completed</option>
                                <option value="Cancelled" <?php echo $project['status'] == 'Cancelled' ? 'selected' : ''; ?>>Cancelled</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Project Type</label>
                            <input type="text" name="type" id="type" class="form-control" value="<?php echo $project['type']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="budget" class="form-label">Budget</label>
                            <input type="number" name="budget" id="budget" class="form-control" value="<?php echo $project['budget']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="payment_plan" class="form-label">Payment Plan</label>
                            <input type="text" name="payment_plan" id="payment_plan" class="form-control" value="<?php echo $project['payment_plan']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="requirements" class="form-label">Requirements</label>
                            <textarea name="requirements" id="requirements" class="form-control" rows="3" required><?php echo $project['requirements']; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="deadline" class="form-label">Deadline</label>
                            <input type="date" name="deadline" id="deadline" class="form-control" value="<?php echo $project['deadline']; ?>" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>