<?php
ini_set('session.cookie_lifetime', 86400);
session_start();
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');


$sql = "SELECT `Registration_number`, `Email`, `Password` FROM `Clients` WHERE Email='".$_POST['email']."'";
$auth_info = $db->Select($sql);

if ($auth_info[0]['Password'] != $_POST['password']) {
    $sql2 = "SELECT `ID_Couriers`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password` FROM `Couriers` WHERE Email='".$_POST['email']."'";
    $auth_info2 = $db->Select($sql2);
    
    if ($auth_info2[0]['Password'] != $_POST['password']) {
        $sql3 = "SELECT `ID_Manager`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password` FROM `Managers` WHERE Email='".$_POST['email']."'";
        $auth_info3 = $db->Select($sql3);
        
        if ($auth_info3[0]['Password'] != $_POST['password']) {
            echo 'Логин или пароль введены неправильно!';
        }
        else{
            $_SESSION['manag_id'] = $auth_info3[0]['ID_Manager'];
            echo '<script>window.location.href = "./manager.php?id='.$_SESSION['manag_id'].'";</script>';
            exit();
        }
    }
    else{
        $_SESSION['cour_id'] = $auth_info2[0]['ID_Couriers'];
        echo '<script>window.location.href = "./courier.php?id='.$_SESSION['cour_id'].'";</script>';
        exit();
    }
}
else{
    $_SESSION['user_id'] = $auth_info[0]['Registration_number'];
    echo '<script>window.location.href = "./lk.php?id='.$_SESSION['user_id'].'";</script>';
    exit();
}
//$_SESSION['user_id'] = $auth_info[0]['Registration_number'];
//session_write_close();
//setcookie('user_id', $auth_info[0]['Registration_number']);
/*
if ($_SESSION['user_id'] != '') {
echo '<script>window.location.href = "./lk.php?id='.$_SESSION['user_id'].'";</script>';
}
if ($_SESSION['cour_id'] != '') {
    echo '<script>window.location.href = "./lk.php?id='.$_SESSION['cour_id'].'";</script>';
    }
    if ($_SESSION['manag_id'] != '') {
        echo '<script>window.location.href = "./lk.php?id='.$_SESSION['manag_id'].'";</script>';
        }*/
?>