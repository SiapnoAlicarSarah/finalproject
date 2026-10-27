<?php
session_start();
if (!isset($_SESSION['name'])) { 
    header("Location: user.php"); 
    exit; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display:block; padding:30px;">
    <h1>Welcome, <?= $_SESSION['name'] ?>!</h1>
    <p>This is the User Dashboard.</p>
    <a href="logout.php" style="display:inline-block; margin-top:20px;">Logout</a>
</body>
</html>