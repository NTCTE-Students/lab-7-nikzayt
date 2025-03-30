<?php

$cookieName = 'user';
$cookieValue = 'guest';
$expiry = time() + (86400);

setcookie($cookieName, $cookieValue, $expiry, '/');

if (isset($_COOKIE[$cookieName])) {
    echo "Куки '$cookieName' изменены на: " . $_COOKIE[$cookieName];
} else {
    echo "Куки '$cookieName' еще не установлены. Обновите страницу.";
}
?>