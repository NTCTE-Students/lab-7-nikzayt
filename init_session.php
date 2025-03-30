<?php
session_start();
$_SESSION['current_user'] = 'student';
header('Location: show_session.html');
exit();
?>