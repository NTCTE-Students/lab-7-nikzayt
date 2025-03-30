<?php

$cookieName = "country";
$cookieValue = "Russia";
$expiry = time() + (86400 * 30); // 30 дней

setcookie($cookieName, $cookieValue, $expiry, "/");

echo "<h2>Приветствие</h2>";
if(isset($_COOKIE[$cookieName])) {
    $country = $_COOKIE[$cookieName];
    $greetings = [
        "Russia" => "Здравствуйте!",
        "USA" => "Hello!",
        "Germany" => "Guten Tag!"
    ];
    
    echo $greetings[$country] ?? "Привет! (Страна: $country)";
} else {
    echo "Куки страны не установлены. Обновите страницу.";
}
?>