<?php
// Обновление времени последнего посещения
session_start();

if (!isset($_SESSION['first_visit_time'])) {
    die('Сессия не инициализирована');
}

// Обновляем только время последнего посещения
$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');

// Возвращаем обновленные данные
header('Location: visit_info.php');
exit();
?>