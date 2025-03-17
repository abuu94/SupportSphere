<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Zanzibar Mail</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>You are logged into the Revolutionary Government of Zanzibar Mailing System.</p>
    <img src="1.jpg" height="500px" width="500px"><br>
    <a href="logout.php">Logout</a>
</body>
</html>
