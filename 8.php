<?php

setcookie("font_size", "16px", time() + 86400, "/");
setcookie("layout", "sidebar", time() + 86400, "/");
setcookie("color_scheme", "blue", time() + 86400, "/");

echo "<h2>Все куки</h2>";
if(!empty($_COOKIE)) {
    echo "<ul>";
    foreach($_COOKIE as $name => $value) {
        echo "<li><strong>$name</strong>: $value</li>";
    }
    echo "</ul>";
} else {
    echo "Куки не установлены. Обновите страницу.";
}
?>