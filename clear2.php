<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['cart'][$id]);
echo "<script>window.location.href = './cart.php';</script>"
?>