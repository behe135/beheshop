<?php
session_start();
require('tfpdf.php');
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');

$pay = $_POST["pay"];
$address = $_POST["address"];
$id = $_SESSION["user_id"];
$todate = date('Y-m-d H:i:s');



//echo json_encode($address); exit();

$sql = "SELECT `ID_Orders`, `Client`, `Manager`, `Date`, `Payment_method` FROM `Orders`";
$t = $db->Select($sql);


if($pay == 1){
$db->Do("INSERT INTO `Orders`(`ID_Orders`, `Client`, `Manager`, `Date`, `Payment_method`)
VALUES (null, '$id', null, '$todate', 'Картой')");
}
else {
$db->Do("INSERT INTO `Orders`(`ID_Orders`, `Client`, `Manager`, `Date`, `Payment_method`)
VALUES (null, '$id', null, '$todate', 'Наличными')");
}

$sql2 = "SELECT `ID_Orders`, `Date` AS Dat FROM `Orders` WHERE `Date` = '$todate'";
$buy = $db->Select($sql2);

$kkk = $buy[0]['ID_Orders'];

$db->Do("INSERT INTO `Delivery`(`ID_Delivery`, `Order_number`, `Courier`, `Address`, `Date`, `Result`)
VALUES (null, '".$buy[0]['ID_Orders']."', null, '$address', null, 'Не доставлено')");


foreach($_SESSION['cart'] as $product => $amount)
{
$sql3 = "SELECT `ID_Items` FROM `Items` WHERE $product = ID_Items";
$item = $db->Select($sql3);
//echo json_encode($am);
$db->Do("INSERT INTO `Order_Item`(`ID_O_I`, `ID_O`, `ID_I`, `Amount`)
VALUES (null, '".$buy[0]['ID_Orders']."', '$product', '$amount')");
}
//session_destroy($_SESSION['cart']);

$sql4 = "SELECT `Last_name`, `First_name`, `Patronymic`, `Date`, `Payment_method`, `ID_O`, Order_Item.Amount AS kol, `Name_of_product`, `Cost_per_piece`
FROM (`Clients` INNER JOIN `Orders` ON Clients.Registration_number = Orders.Client) INNER JOIN (`Items` INNER JOIN `Order_Item` ON Items.ID_Items = Order_Item.ID_I) ON Orders.ID_Orders = Order_Item.ID_O WHERE ID_O = '".$buy[0]['ID_Orders']."'";
$chek = $db->Select($sql4);

foreach($_SESSION['cart'] as $product => $amount){
    $sql5 = "SELECT `ID_Items`, `Name_of_product`, Items.Manufacturer AS Man, `Category`, `Amount`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, Manufacturers.Manufacturer AS Manufact FROM `Items` 
                      INNER JOIN Manufacturers ON Items.Manufacturer=Manufacturers.ID_Manufacturer 
                      WHERE ID_Items = $product";
                      $tov = $db->Select($sql5);
                      $subtotal = $tov[0]['Cost_per_piece'] * $amount;
                      $total += $subtotal;
}
$sql6 = "SELECT `ID_Address`, `ID_Client`, `Address_Client` FROM `Address` WHERE ID_Address = $address";
$ad = $db->Select($sql6);
//echo json_encode($chek); exit();
$pdf = new tFPDF();
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);

$pdf->Cell( 0, 15, "Чек №".$chek[0]['ID_O'], 0, 0, 'C' );
$pdf->Ln(10);
$pdf->Cell( 0, 15, 'Покупатель: '.$chek[0]['Last_name'].' '.$chek[0]['First_name'].' '.$chek[0]['Patronymic'], 0, 0, 'L' );
//$pdf->Cell( 0, 15, $chek[0]['First_name'], 0, 0, 'L' );
//$pdf->Cell( 0, 15, $chek[0]['Patronymic'], 0, 0, 'L' );
$pdf->Ln(10);
$pdf->Cell( 0, 15, 'Дата покупки: '.$chek[0]['Date'].' Метод оплаты: '.$chek[0]['Payment_method'], 0, 0, 'C' );
$pdf->Ln(10);
$pdf->Cell( 0, 15, 'Состав заказа:', 0, 0, 'C' );
$pdf->Ln(10);
$pdf->Cell( 0, 15, 'Наименование товара/Количество/Цена за штуку', 0, 0, 'C' );
for($i=0;$i<count($chek);$i++){
$pdf->Ln(10);
$pdf->Cell( 0, 15, $chek[$i]['Name_of_product'].' '.$chek[$i]['kol'].' '.$chek[$i]['Cost_per_piece'], 0, 0, 'C' );}
$pdf->Ln(10);
$pdf->Cell( 0, 15, 'Итоговая стоимость: '.$total, 0, 0, 'C' );
$pdf->Ln(10);
$pdf->Cell( 0, 15, 'Адрес доставки: '.$ad[0]['Address_Client'], 0, 0, 'C' );

$pdf->Output("test.pdf", "D");

unset($_SESSION['cart']);
echo "<script>window.location.href = './cart.php';</script>";

?>