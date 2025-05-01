<?php

$cookieName = 'preferences';
$cookieValue = 'dark_mode';
$expiry = time() + (7 * 86400); // 7 дней

setcookie($cookieName, $cookieValue, $expiry, '/');

if (isset($_COOKIE[$cookieName])) {
    echo "Предпочтения: " . $_COOKIE[$cookieName];
} else {
    echo "Предпочтения не установлены. Обновите страницу.";
}
?>