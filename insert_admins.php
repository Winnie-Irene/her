<?php
require 'db.php'; 

$name = "Winnie Irene";
$email = "irene.wanjiru.winnie@gmail.com";
$password = password_hash("Winnie@2004", PASSWORD_DEFAULT); // Hashed password
$role = "super_admin";

$stmt = $conn->prepare("INSERT INTO admins (name, email, password, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $password, $role);

if ($stmt->execute()) {
    echo "Admin added successfully!";
} else {
    echo "Error: " . $stmt->error;
}
?>
