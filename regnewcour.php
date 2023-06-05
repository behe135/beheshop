<?php
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$last_name = $_POST['Last_name'];
$first_name = $_POST['First_name'];
$patronymic = $_POST['Patronymic'];
$phone_number = $_POST['Phone_number'];
$email = $_POST['Email'];  
$pass = $_POST['Password'];
$sql = "SELECT `ID_Couriers`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password` FROM `Couriers`";
$reg = $db->Select($sql);
for($i = 0; $i < count($reg); $i++){
if($reg[$i]['Email'] == $email){
    echo 'Данный емайл уже занят'; exit();
    
}

if($reg[$i]['Phone_number'] == $phone_number){
    echo 'Данный номер телефона уже занят'; exit();
}
}
$db->Do("INSERT INTO `Couriers`(`ID_Couriers`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password`)
VALUES (null, '$last_name', '$first_name', '$patronymic', '$phone_number', '$email', '$pass')");

echo '<script>window.location.href = "./rabcour.php";</script>';

?>