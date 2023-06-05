<?php
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$id = $_GET['id'];

$db->Do("DELETE FROM `Couriers` WHERE ID_Couriers = $id");

echo '<script>window.location.href = "./rabcour.php";</script>';

?>