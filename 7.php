<?php

$cookieName = "theme";
$expiry = time() + (86400 * 365); // 1 год

// Обработка формы
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $theme = $_POST["theme"];
    setcookie($cookieName, $theme, $expiry, "/");
    header("Location: ".$_SERVER["PHP_SELF"]);
    exit();
}

// Получение текущей темы
$currentTheme = $_COOKIE[$cookieName] ?? "light";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body.light { background: white; color: black; }
        body.dark { background: #333; color: white; }
    </style>
</head>
<body class="<?php echo $currentTheme; ?>">
    <h2>Выбор темы</h2>
    <p>Текущая тема: <?php echo $currentTheme; ?></p>
    
    <form method="post">
        <select name="theme">
            <option value="light" <?php if($currentTheme == "light") echo "selected"; ?>>Светлая</option>
            <option value="dark" <?php if($currentTheme == "dark") echo "selected"; ?>>Темная</option>
        </select>
        <button type="submit">Применить</button>
    </form>
</body>
</html>