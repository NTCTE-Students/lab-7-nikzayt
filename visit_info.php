<?php
session_start();

// Проверяем инициализирована ли сессия
if (!isset($_SESSION['first_visit_time'])) {
    header('Location: init_visit.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Информация о посещениях</title>
</head>
<body>
    <h2>Статистика посещений</h2>
    
    <p>Первое посещение: <?php echo $_SESSION['first_visit_time']; ?></p>
    <p>Последнее посещение: <?php echo $_SESSION['last_visit_time']; ?></p>
    
    <form action="update_visit.php" method="post">
        <button type="submit">Обновить время посещения</button>
    </form>
    
    <p><a href="init_visit.php">Перезапустить отслеживание</a></p>
</body>
</html>