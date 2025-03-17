<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "her";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$organization_name = trim($_POST['organization_name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

// Prepare and bind
$sql = "INSERT INTO partners (organization_name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sss", $organization_name, $email, $message);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
} else {
    echo "error";
}

// Close connection
$conn->close();
?>
