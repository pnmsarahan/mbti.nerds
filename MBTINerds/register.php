<?php
// Replace 'your_hostname', 'your_username', 'your_password', 'your_database' with your actual database credentials
$conn = new mysqli('your_hostname', 'your_username', 'your_password', 'your_database');

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

// Sanitize and validate data

// Prepare SQL statement
$sql = "INSERT INTO users (name, email, password, cpassword) VALUES ('$name', '$email', '$password', '$cpassword')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    // Registration successful
    echo "Registered Successfully<br>";
    echo '<a href="The_MBTI_Nerds.html">Proceed to Main Page</a>';
} else {
    // Registration failed
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
