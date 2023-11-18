<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginUsername = $_POST['login_username'];
    $loginPassword = $_POST['login_password'];

    $users = json_decode(file_get_contents('users.json'), true) ?? [];

    foreach ($users as $user) {
        if ($user['username'] === $loginUsername && password_verify($loginPassword, $user['password'])) {
            #echo "Login successful! Welcome, " . $user['fullname'];

            $_SESSION['authenticated'] = true;

          
            $_SESSION['username'] = $user['username']; 
        

            header('Location: main.php');
            exit;
        }
    }

    echo "Invalid username or password.";
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>User Registration & Login</title>
</head>
<body>
    <div class="container">
        <form action="register.php" method="post">
            <h2>Register</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <label for="sex">Sex:</label>
            <select name="sex" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" required>
            <button type="submit">Register</button>
        </form>

        <form action="login.php" method="post">
            <h2>Login</h2>
            <label for="login_username">Username:</label>
            <input type="text" name="login_username" required>
            <label for="login_password">Password:</label>
            <input type="password" name="login_password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

