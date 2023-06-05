<?php
ini_set('session.cookie_lifetime', 86400);
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$id = $_SESSION['user_id'];
$new = $_POST['NewAddress'];
//echo json_encode($_POST);

//$_SESSION['cart'] = $cart[0]['ID_Items'];
$db->Do("INSERT INTO `Address`(`ID_Address`, `ID_Client`, `Address_Client`) 
VALUES (null, '$id', '$new')");
echo '<script>window.location.href = "./lk.php?id='.$_SESSION['user_id'].'";</script>';
?>