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
$address = $_POST['Address'];
$sql = "SELECT `Registration_number`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password` FROM `Clients`";
$reg = $db->Select($sql);
for($i = 0; $i < count($reg); $i++){
if($reg[$i]['Email'] == $email){
    echo 'Данный емайл уже занят'; exit();
    
}

if($reg[$i]['Phone_number'] == $phone_number){
    echo 'Данный номер телефона уже занят'; exit();
}
}
$db->Do("INSERT INTO `Clients`(`Registration_number`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password`) 
VALUES (null, '$last_name', '$first_name', '$patronymic', '$phone_number', '$email', '$pass')");

$sql2 = "SELECT `Registration_number` FROM `Clients` WHERE $phone_number = Phone_number";
$reg2 = $db->Select($sql2);

$db->Do("INSERT INTO `Address`(`ID_Address`, `ID_Client`, `Address_Client`) 
VALUES (null, ".$reg2[0]['Registration_number'].", '$address')");
echo '<script>window.location.href = "./auth.php";</script>';

?>