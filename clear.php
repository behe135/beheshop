<?php
session_start();
unset($_SESSION['cart']);
//session_destroy($_SESSION['cart']);
echo "<script>window.location.href = './cart.php';</script>"
?>