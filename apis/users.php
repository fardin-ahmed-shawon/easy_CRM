<?php
header('Content-Type: application/json');
// Include database connection file
require_once '../dbConnection.php';
require_once 'config.php';


// Set a custom error handler to return JSON for errors
set_exception_handler(function ($exception) {
    $response = array(
        "success" => false,
        "message" => $exception->getMessage()
    );
    echo json_encode($response);
    exit();
});


// Receive the action type
$action = $_GET['action'] ?? '';

// Check if the 'action' parameter is set in the URL
if ($action == '') {
    $response = array(
        "success" => false,
        "message" => "No action specified."
    );
    echo json_encode($response);
    exit();
}



//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Handle the 'add-user' action ///////////////////////////
////////////////////////////////////////////////////////////////////////////////////
if ($action == 'add-user') {

    $full_name = $_POST['full_name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';
    $status = $_POST['status'] ?? '';

    // Validate required fields
    if (empty($full_name) || empty($phone) || empty($email) || empty($password) || empty($role) || empty($status)) {
        $response = array(
            "success" => false,
            "message" => "All fields are required."
        );
        echo json_encode($response);
        exit();
    }

    // Prepare and execute the SQL statement to insert the user into the database
    $stmt = $con->prepare("INSERT INTO users (full_name, phone, email, password, role, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $full_name, $phone, $email, $password, $role, $status);
    if ($stmt->execute()) {
        $response = array(
            "success" => true,
            "message" => "User successfully added"
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to add user."
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////
//////////////////////// Handle the 'update-user' action ////////////////////////
////////////////////////////////////////////////////////////////////////////////
else if ($action == 'update-user') {

    $user_id = $_POST['user_id'] ?? '';

    if (empty($user_id)) {
        $response = array(
            "success" => false,
            "message" => "User ID is required."
        );
        echo json_encode($response);
        exit();
    }

    // Initialize an array to store the fields to update
    $fields = [];
    $params = [];
    $types = '';

    // Check each field and add it to the update query if it's provided
    if (!empty($_POST['full_name'])) {
        $fields[] = "full_name = ?";
        $params[] = $_POST['full_name'];
        $types .= 's';
    }
    if (!empty($_POST['phone'])) {
        $fields[] = "phone = ?";
        $params[] = $_POST['phone'];
        $types .= 's';
    }
    if (!empty($_POST['email'])) {
        $fields[] = "email = ?";
        $params[] = $_POST['email'];
        $types .= 's';
    }
    if (!empty($_POST['password'])) {
        $fields[] = "password = ?";
        $params[] = $_POST['password'];
        $types .= 's';
    }
    if (!empty($_POST['role'])) {
        $fields[] = "role = ?";
        $params[] = $_POST['role'];
        $types .= 's';
    }
    if (!empty($_POST['status'])) {
        $fields[] = "status = ?";
        $params[] = $_POST['status'];
        $types .= 's';
    }

    // Ensure there are fields to update
    if (empty($fields)) {
        $response = array(
            "success" => false,
            "message" => "No fields to update."
        );
        echo json_encode($response);
        exit();
    }

    // Add the user_id to the parameters
    $params[] = $user_id;
    $types .= 'i';

    // Build the SQL query dynamically
    $sql = "UPDATE users SET " . implode(", ", $fields) . " WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        $response = array(
            "success" => true,
            "message" => "User successfully updated"
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to update user."
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////
///////////////////////// Handle the 'delete-user' action /////////////////////////
//////////////////////////////////////////////////////////////////////////////////
else if ($action == 'delete-user') {

    $user_id = $_POST['user_id'] ?? '';

    // Validate required fields
    if (empty($user_id)) {
        $response = array(
            "success" => false,
            "message" => "User ID is required."
        );
        echo json_encode($response);
        exit();
    }

    // Prepare and execute the SQL statement to delete the user from the database
    $stmt = $con->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        $response = array(
            "success" => true,
            "message" => "User successfully deleted"
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to delete user."
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////
////////////////////////// Handle the 'get-user' action ///////////////////////////
//////////////////////////////////////////////////////////////////////////////////
else if ($action == 'get-user') {

    $user_id = $_POST['user_id'] ?? '';

    // Validate required fields
    if (empty($user_id)) {
        $response = array(
            "success" => false,
            "message" => "User ID is required."
        );
        echo json_encode($response);
        exit();
    }

    // Prepare and execute the SQL statement to fetch the user from the database
    $stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data) {
        $response = array(
            "success" => true,
            "message" => "User successfully retrieved",
            "user" => array(
                "id" => $data['id'],
                "full_name" => $data['full_name'],
                "phone" => $data['phone'],
                "email" => $data['email'],
                "role" => $data['role'],
                "status" => $data['status']
            )
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "User not found!"
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////


// Handle wrong/invalid action
else {
    $response = array(
        "success" => false,
        "message" => "Invalid action specified."
    );
    echo json_encode($response);
    exit();
}

?>