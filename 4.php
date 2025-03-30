<?php

$cookieName = 'language';
$cookieValue = 'English';
$expiry = time() + (7200); // 2 часа = 7200 секунд

setcookie($cookieName, $cookieValue, $expiry, '/');

if (isset($_COOKIE[$cookieName])) {
    echo "Язык интерфейса: " . $_COOKIE[$cookieName];
} else {
    echo "Язык не установлен. Обновите страницу.";
}
?>