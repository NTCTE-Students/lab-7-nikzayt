<?php

$cookieName = "session_id";

// Установка куки для примера
setcookie($cookieName, "abc123", time() + 3600, "/");

// Удаление куки
setcookie($cookieName, "", time() - 3600, "/");

echo "<h2>Удаление куки</h2>";
if(isset($_COOKIE[$cookieName])) {
    echo "Куки '$cookieName' все еще существует: " . $_COOKIE[$cookieName];
} else {
    echo "Куки '$cookieName' успешно удалена.";
}
?>