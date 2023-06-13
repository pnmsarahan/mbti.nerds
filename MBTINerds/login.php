<?php
// Replace 'your_hostname', 'your_username', 'your_password', 'your_database' with your actual database credentials
$conn = new mysqli('name', 'email', 'password', 'cpassword');




// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Sanitize and validate data

// Prepare SQL statement
$sql = "SELECT * FROM user_form WHERE email = '$email'";

// Execute SQL statement
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found
    $user = $result->fetch_assoc();
    if ($password === $user['password']) {
        // Passwords match, perform login actions
        // For example, set session variables and redirect to a dashboard page
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        // Redirect to the dashboard or any other page
        header("Location: The_MBTI_Nerds.html");
        exit();
    } else {
        // Password is incorrect
        echo "Incorrect password.";
    }
} else {
    // User not found
    echo "User not found.";
}

// Close database connection
$conn->close();
?>
