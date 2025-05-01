<?php
session_start();

$action = $_GET['action'] ?? '';
$productId = $_GET['product_id'] ?? 0;

if (!isset($_SESSION['user_cart'])) {
    $_SESSION['user_cart'] = [];
}

switch ($action) {
    case 'add':
        if (!in_array($productId, $_SESSION['user_cart'])) {
            $_SESSION['user_cart'][] = $productId;
        }
        break;
    case 'remove':
        $_SESSION['user_cart'] = array_diff($_SESSION['user_cart'], [$productId]);
        break;
}

header('Content-Type: application/json');
echo json_encode(['status' => 'success']);
?>