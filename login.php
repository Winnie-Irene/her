<?php
session_start();
require 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password, role FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['name'];
            $_SESSION['admin_role'] = $admin['role'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid credentials.";
        }
    } else {
        $error = "No account found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="login">
<div class="auth-login-container">
    <h2 class="auth-title">Admin Login</h2>
    <?php if (isset($error)) echo "<p class='auth-error'>$error</p>"; ?>
   
    <form method="post" id="auth-loginForm" class="auth-form">
        <div class="auth-input-group">
            <label for="email" class="auth-label">Email address</label>
            <input type="email" id="email" name="email" class="auth-input" placeholder="Enter your email" required>
        </div>

        <div class="auth-input-group">
            <label for="password" class="auth-label">Password</label>
            <input type="password" id="password" name="password" class="auth-input" placeholder="Log in Password" required>
        </div>

        <button type="submit" class="auth-btn">Login</button>

        <p class="auth-info-text">Admin access only. Log in to continue </p>
    </form>
</div>

</body>
</html>
