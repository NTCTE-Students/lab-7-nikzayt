<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['user_login'];
    $password = $_POST['user_password'];
    
    // Простая проверка (в реальном приложении нужно проверять с базой данных)
    if (!empty($login) && !empty($password)) {
        $_SESSION['user_auth'] = true;
        $_SESSION['user_name'] = $login;
        header('Location: welcome_page.php');
        exit();
    } else {
        header('Location: auth_form.html?error=1');
        exit();
    }
}
?>