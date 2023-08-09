-<?php
    session_start();

    $db = new mysqli('localhost', 'root', '', 'admin_login');

    $username = $db->real_escape_string($_POST["user_name"]);
    $password = $db->real_escape_string($_POST["password"]);

    $result = $db->query("SELECT * FROM admin WHERE admin_name='$username'");

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($password === $user['password_hash']) {
            header('Location: ../edit_labs/index.php');
            exit();
        } else {
            header('Location: index.php?error=1');
        }
    } else {
        header('Location: index.php?error=1');
    }
    $db->close();

    ?>