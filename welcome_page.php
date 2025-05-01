<?php
session_start();

if (!isset($_SESSION['user_auth']) || !$_SESSION['user_auth']) {
    header('Location: auth_form.html');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Добро пожаловать</title>
</head>
<body>
    <h2>Приветствуем, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
    <p>Вы успешно вошли в систему.</p>
    <a href="auth_form.html">Выйти</a>
</body>
</html>