<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Edit Lead'; // Set the page title
require 'header.php';

// Fetch the lead ID from the query string
$lead_id = $_GET['id'] ?? '';

// Simulated lead data (replace this with a database query in production)
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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
}
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="text-primary mb-0"><b>Edit Lead</b></h5>
                    <a href="lead-details.php?id=<?php echo $lead_id; ?>" class="btn btn-secondary">Back to Lead Details</a>
                </div><hr>
                <div class="card-body">
                    <form action="edit-lead.php?id=<?php echo $lead_id; ?>" method="POST">
                        <div class="mb-3">
                            <label for="agency_name" class="form-label">Agency Name</label>
                            <input type="text" name="agency_name" id="agency_name" class="form-control" value="<?php echo htmlspecialchars($lead['agency_name']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="brand_name" class="form-label">Brand Name</label>
                            <input type="text" name="brand_name" id="brand_name" class="form-control" value="<?php echo htmlspecialchars($lead['brand_name']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="client_name" class="form-label">Client Name</label>
                            <input type="text" name="client_name" id="client_name" class="form-control" value="<?php echo htmlspecialchars($lead['client_name']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo htmlspecialchars($lead['phone']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($lead['email']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="<?php echo htmlspecialchars($lead['title']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" required><?php echo htmlspecialchars($lead['description']); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="Active" <?php echo $lead['status'] == 'Active' ? 'selected' : ''; ?>>Active</option>
                                <option value="Meeting" <?php echo $lead['status'] == 'Meeting' ? 'selected' : ''; ?>>Meeting</option>
                                <option value="Pending" <?php echo $lead['status'] == 'Pending' ? 'selected' : ''; ?>>Pending</option>
                                <option value="Onboard" <?php echo $lead['status'] == 'Onboard' ? 'selected' : ''; ?>>Onboard</option>
                                <option value="Reject" <?php echo $lead['status'] == 'Reject' ? 'selected' : ''; ?>>Reject</option>
                            </select>
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