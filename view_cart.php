<?php
session_start();

if (!isset($_SESSION['user_cart']) || empty($_SESSION['user_cart'])) {
    $cartItems = [];
} else {
    $cartItems = $_SESSION['user_cart'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ваша корзина</title>
</head>
<body>
    <h2>Содержимое корзины</h2>
    <?php if (empty($cartItems)): ?>
        <p>Ваша корзина пуста</p>
    <?php else: ?>
        <ul>
            <?php foreach ($cartItems as $item): ?>
                <li>
                    Товар #<?php echo $item; ?>
                    <button onclick="removeFromCart(<?php echo $item; ?>)">Удалить</button>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="products_page.html">Продолжить покупки</a>

    <script>
        function removeFromCart(productId) {
            fetch(`cart_operations.php?action=remove&product_id=${productId}`)
                .then(response => window.location.reload());
        }
    </script>
</body>
</html>