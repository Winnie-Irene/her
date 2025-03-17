<?php
session_start();
require 'db.php'; 

if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch counts from the database
$contacts_count = $conn->query("SELECT COUNT(*) AS total FROM contacts")->fetch_assoc()['total'];
$partners_count = $conn->query("SELECT COUNT(*) AS total FROM partners")->fetch_assoc()['total'];
$donations_count = $conn->query("SELECT COUNT(*) AS total FROM donations")->fetch_assoc()['total'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>HER Foundation</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="partners.php">Partners</a></li>
            <li><a href="donations.php">Donations</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="logout.php" class="logout">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Welcome, <?php echo $_SESSION['admin_name']; ?>!</h1>
        <p>Here’s a quick summary of the submitted forms:</p>

        <div class="card-container">
            <div class="card">
                <h3>Contact Requests</h3>
                <p><?php echo $contacts_count; ?> messages received</p>
            </div>

            <div class="card">
                <h3>Partnership Requests</h3>
                <p><?php echo $partners_count; ?> requests received</p>
            </div>

            <div class="card">
                <h3>Donations</h3>
                <p><?php echo $donations_count; ?> donations made</p>
            </div>

        </div>

    </div>

</body>
</html>
