<?php
// Инициализация сессии и установка временных меток
session_start();

if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date('Y-m-d H:i:s');
}

// Обновляем время последнего посещения
$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');

// Перенаправляем на страницу с информацией
header('Location: visit_info.php');
exit();
?>