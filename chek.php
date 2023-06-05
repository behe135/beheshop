<?php
session_start();
require('tfpdf.php');
require_once('./MySQL.php');
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');

$id = $_SESSION["user_id"];
$todate = date('Y-m-d');


$sql = "SELECT `ID_Orders`, `Date` AS Dat FROM `Orders` WHERE DATE(`Date`) = '$todate'";
$buy = $db->Select($sql2);

$sql4 = "SELECT `Last_name`, `First_name`, `Patronymic`, `Date`, `Payment_method`, `ID_O`, Order_Item.Amount AS kol, `Name_of_product`, `Cost_per_piece`
FROM (`Clients` INNER JOIN `Orders` ON Clients.Registration_number = Orders.Client) INNER JOIN (`Items` INNER JOIN `Order_Item` ON Items.ID_Items = Order_Item.ID_I) ON Orders.ID_Orders = Order_Item.ID_O WHERE ID_O = '".$buy[0]['ID_Orders']."'";
$chek = $db->Select($sql4);
echo json_encode($chek); exit();
$pdf = new tFPDF();
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);

$pdf->Cell( 0, 15, "1111", 0, 0, 'C' );

$pdf->Cell( 0, 15, "'.$chek[0]['First_Name'].'", 0, 0, 'C' );
$pdf->Cell( 0, 15, $chek[0]['Patronymic'], 0, 0, 'C' );
$pdf->Cell( 0, 15, $chek[0]['Date'], 0, 0, 'C' );
$pdf->Cell( 0, 15, $chek[0]['ID_O'], 0, 0, 'C' );
$pdf->Cell( 0, 15, $chek[0]['Payment_method'], 0, 0, 'C' );

$pdf->Output("test.pdf", "D");

//unset($_SESSION['cart']);
echo "<script>window.location.href = './cart.php';</script>";

?>