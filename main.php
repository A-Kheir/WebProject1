<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: ./login.php');
    exit;
}else $username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
<h1> Welcome, <?php echo $username; ?> </h1>
<a href="logout.php">Logout</a>

<div id="left-menu">
    <a class="menu-button" href="/My CV1/index.php">CV</a>
    <a class="menu-button" href="/gallery/index.php">Gallery</a>
    <a class="menu-button" href="/contact/contact.php">Contact me</a>
</div>



</body>
</html>
