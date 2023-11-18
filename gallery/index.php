<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: ../login.php');
    exit;
}else $username = $_SESSION['username'];
?>






<!DOCTYPE html>
<html lang="en">
<head>

    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1 style="text-align: center; margin-right: 20px;"> Welcome, <?php echo $username; ?> </h1>
<a href="../logout.php">Logout</a>
<h1>Dynamic Gallery</h1>

<div class="gallery">
        <?php
        $galleryFilePath = 'gallery.txt';
        $galleryImages = file($galleryFilePath, FILE_IGNORE_NEW_LINES);

        foreach ($galleryImages as $imageURL) {
            echo "<img src='$imageURL' alt='Image'>";
        }
        ?>
    </div>
    <a id="back-button" href ="../main.php">Back</a>
  

    <div class="gallery">
        <div class="thumbnails">
            
            <a href="image1.html"  class="thumbnail">
                <img src="topg.png" >
            </a>
            <a href="image2.html"  class="thumbnail">
                <img src="Top T.jpg" >
            </a>
            <a href="image3.html"  class="thumbnail">
                <img src="https://random.dog/ace571c3-c47e-4c52-93f3-9e3247c62ca9.jpg" >
            </a>
            <a href="image4.html"  class="thumbnail">
                <img src="cvnpc.jpg" >
            </a>
            
            <a href="image5.html"  class="thumbnail">
                <img src="canecorso.jpg" >
            </a>
            <a href="image6.html"  class="thumbnail">
                <img src="https://random.dog/b775c9ae-205a-47ad-96e5-bea4d78628c5.jpg" >
            </a>
            <a href="image7.html" class="thumbnail">
                <img src="https://random.dog/image0_13.jpg" >
            </a>
            <a href="image8.html"  class="thumbnail">
                <img src="https://random.dog/7d76ab15-5cc1-4684-aa82-568617fed752.jpg" >
            </a>
        </div>
    </div>
</body>
</html>
