<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userData = [
        'username' => $_POST['username'],
        'fullname' => $_POST['fullname'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'sex' => $_POST['sex'],
        'dob' => $_POST['dob'],
    ];

    $users = json_decode(file_get_contents('users.json'), true) ?? [];
    $users[] = $userData;
    file_put_contents('users.json', json_encode($users));

    header('Location: login.php');
   exit;
}
?>