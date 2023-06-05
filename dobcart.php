<?php
ini_set('session.cookie_lifetime', 86400);
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$id = $_GET['id'];
$kol = $_POST['Amount'];
//echo json_encode($_POST);
$sql = "SELECT `ID_Items`, `Name_of_product`, `Manufacturer`, `Category`, `Amount`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, `Availability` FROM `Items` WHERE ID_Items = $id";
$cart = $db->Select($sql);
//$_SESSION['cart'] = $cart[0]['ID_Items'];
if (in_array($id, array_keys($_SESSION['cart']))){
    $_SESSION['cart'][$id] += $kol;
}
else {
    $_SESSION['cart'][$id] = $kol;
}

echo '<script>window.location.href = "./cart.php?id='.$_SESSION['cart'].'";</script>';
?>