<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: ../login.php');
    exit;
}else $username = $_SESSION['username'];
?>







<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>

    <a id="back-button" href ="../main.php">Back</a>

    <div class="container">
    <a href="../logout.php">Logout</a>
    <h1> Welcome, <?php echo $username; ?> </h1>
    
        <h1>Contact Information</h1>
        
        <div class="contact-info">
            <p><strong>Name:</strong> Ahmad Abo Al Kheir</p>
            <p><strong>Email:</strong> ahmad_k2001@hotmail.com</p>
            <p><strong>Phone:</strong> +96170048296</p>
            <p><strong>Address:</strong> Lebanon, Saida</p>
            <p><strong>GitHub:</strong> <a href="https://github.com/A-Kheir?tab=repositories" target="_blank">GitHub Profile</a></p>
        </div>
    </div>
</body>
</html>
