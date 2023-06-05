<?php
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$name = $_POST['Name_of_product'];
$manuf = $_POST["Manufacturer"];
$categ = $_POST["Categories"];
$amount = $_POST['Amount'];
$sex = $_POST['Sex'];
$size = $_POST['Size'];
$liters = $_POST['Liters'];
$length = $_POST['Length'];
$cost = $_POST['Cost'];

$db->Do("INSERT INTO `Items`(`ID_Items`, `Name_of_product`, `Manufacturer`, `Category`, `Amount`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, `Availability`)
VALUES (null, '$name', '$manuf', '$categ', '$amount', '$sex', '$size', '$liters', '$length', '$cost', null)");

echo '<script>window.location.href = "./rabtovar.php";</script>';

?>