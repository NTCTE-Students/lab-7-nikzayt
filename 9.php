<?php

$cookieName = "loggedin";
$cookieValue = "true";
$expiry = time() + 3600; // 1 час

// Установка куки для примера
setcookie($cookieName, $cookieValue, $expiry, "/");

// Проверка куки
if(!isset($_COOKIE[$cookieName])) {
    header("Location: login.php");
    exit();
}

echo "<h2>Личный кабинет</h2>";
echo "<p>Вы успешно авторизованы!</p>";
?>