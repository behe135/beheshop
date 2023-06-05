<?php
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$id = $_GET['id'];
$db->Do("DELETE FROM `Delivery` WHERE Order_number = $id");

$sql="SELECT `ID_O_I`, `ID_O`, `ID_I`, `Amount` FROM `Order_Item` WHERE ID_O = $id";
$del=$db->Select($sql);

for($i=0; $i<count($del); $i++){
$db->Do("DELETE FROM `Order_Item` WHERE ID_O = $id");
}
$db->Do("DELETE FROM `Orders` WHERE ID_Orders = $id");
echo '<script>window.location.href = "./rabzakaz.php";</script>';

?>