<?php

$cookieName = 'user';
$cookieValue = 'admin';
$expiry = time() + (86400); // 1 день = 86400 секунд

setcookie($cookieName, $cookieValue, $expiry, '/');

if (isset($_COOKIE[$cookieName])) {
    echo "Куки '$cookieName' установлены со значением: " . $_COOKIE[$cookieName];
} else {
    echo "Куки '$cookieName' еще не установлены. Обновите страницу.";
}
?>