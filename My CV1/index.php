<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: ../login.php');
    
   
 
    exit;
} else $username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html>
<head>

  <title>My CV</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <a id="back-button" href ="../main.php">Back</a>


  <div class="container">
    <div class="sidebar">
      <div class="profile-pic">
        <img src="mycvpic.jpg" alt="Profile Picture">
      </div>
      <a href="../logout.php">Logout</a>
      <h1>Ahmad Abo Al Kheir</h1>
      <p>Web Developer</p>
      
      
      <a href = "mailto: ahmad_k2001@hotmail.com">ahmad_k2001@hotmail.com</a>
        
      <a href="tel:+96170048296">Phone: +96170048296</a>
        <hr>
        <a href="https://github.com/A-Kheir?tab=repositories">My GitHub</a>
      
    </div>
    <div class="main-content">
    <h1> Welcome, <?php echo $username; ?> </h1>
      <h1>Ahmad Abo Al Kheir</h1>
      <h2>About me:</h2>
      <p class ="about"> As a dedicated computer science student with a passion for technology and problem-solving, 
        I bring a strong foundation in programming languages and software development.
    
        Beyond academics, I lead an active lifestyle, demonstrating my commitment to sports which 
        instills discipline and teamwork.
    
        Additionally, my love for dogs underscores my nature and responsibility towards 
        these loyal companions.
    
        </p>
      
      <h2>Education</h2>
      <p>Bachelor's Degree in Computer Science</p>
      <p>Lebanese American University</p>
      <p>Year: 2020-present</p>
      
      <h2>Projects</h2>
      <p>Website created using HTML, CSS and JS:</p>
      <a href="https://roukozelie.com">Portfolio Project</a>

      
      <h2>Skills</h2>
      <ul>
      <li>HTML</li>
      <li>CSS</li>
      <li>JavaScript</li>
      <li>Java</li>
      <li>SQL</li>
      </ul>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 My CV. All rights reserved.</p>
  </footer>
</body>
</html>