<?php

$cookieName = 'visited';
$expiry = time() + (30 * 86400); // 30 дней

if (isset($_COOKIE[$cookieName])) {
    $count = $_COOKIE[$cookieName] + 1;
} else {
    $count = 1;
}

setcookie($cookieName, $count, $expiry, '/');

echo "Вы посетили эту страницу $count раз(а)";
?>