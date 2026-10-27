<?php
session_start();
if (!isset($_SESSION['name']) || $_SESSION['role'] !== 'admin') { 
    header("Location: user.php"); 
    exit; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="display:block; padding:30px;">
    <h1>Admin Dashboard</h1>
    <p>Welcome Staff: <?= $_SESSION['name'] ?></p>
    <a href="logout.php" style="display:inline-block; margin-top:20px;">Logout</a>
</body>
</html>