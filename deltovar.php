<?php
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$id = $_GET['id'];

$db->Do("DELETE FROM `Items` WHERE ID_Items = $id");

echo '<script>window.location.href = "./rabtovar.php";</script>';

?>