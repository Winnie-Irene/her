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

// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$amount = $_POST['amount'];

// Insert into database
$sql = "INSERT INTO donations (name, phone, email, amount) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssd", $name, $phone, $email, $amount);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

// Close connection
$stmt->close();
$conn->close();
?>
