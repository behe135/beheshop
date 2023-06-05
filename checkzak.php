<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Просмотр заказа</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/shop.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  
  </head>
  <body class="u-body u-xl-mode" data-lang="ru">

  <?php include 'header2.php';

$tt = $_SESSION['manag_id'];
if($tt!=null){
  echo "<section class='u-align-center u-clearfix u-section-1' id='sec-c84b'>
  <div class='u-clearfix u-sheet u-sheet-1'>
    <div class='u-align-center u-form-group u-form-submit u-block-6023-15'>
                  <a href='rabzakaz.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с заказами</a>
                  <a href='rabtovar.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с товарами</a>
                  <a href='rabcour.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с курьерами</a>
                  <a href='rabmanag.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с менеджерами</a>
    </div>";
}
else {
  echo "<script>window.location.href = './index.php';</script>";
}?>
          <?php 
          $id=$_GET['id'];
              echo "<h2 class='u-text u-text-default u-text-1'>Просмотр состава заказа №$id</h2>";?>
    <div class="u-clearfix u-sheet u-sheet-1">
    <?php
require_once('./MySQL.php');
session_start();
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$id = $_GET['id'];
$sql = "SELECT
`ID_Items`,`ID_Orders`, Orders.Date AS ODat, `Payment_method`, `ID_O_I`, Order_Item.Amount AS Am, `Name_of_product`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, Manufacturers.Manufacturer AS Man, Categories.Category AS Cat,
`Registration_number`, Clients.Last_name AS Client_last, Clients.First_name AS Client_first, Clients.Patronymic AS Client_patronymic, Clients.Phone_number AS Client_phone, Delivery.Date AS DDat, `Result`, Couriers.Last_name AS Courier_last, Couriers.First_name AS Courier_first, Couriers.Patronymic AS Courier_patronymic, Couriers.Phone_number AS Courier_phone
FROM Orders JOIN Order_Item ON Orders.ID_Orders = Order_Item.ID_O
JOIN Items ON Order_Item.ID_I = Items.ID_Items
JOIN Manufacturers ON Items.Manufacturer = Manufacturers.ID_Manufacturer
JOIN Categories ON Items.Category = Categories.ID_Category
JOIN Clients ON Orders.Client = Clients.Registration_number 
LEFT JOIN Delivery ON Orders.ID_Orders = Delivery.Order_number
LEFT JOIN Couriers ON Delivery.Courier = Couriers.ID_Couriers  WHERE ID_Orders = $id";
$workers = $db->Select($sql);
$cour = $workers[0]['Courier_last'];
$sql2 = "SELECT `Address` FROM `Delivery` WHERE Order_number = $id";
$id_address = $db->Select($sql2);

$sql3 = "SELECT `Address_Client` FROM `Address` WHERE ID_Address = '".$id_address[0]['Address']."'";
$abc = $db->Select($sql3);

echo "

        <div class='u-expanded-width u-products'>
          <div class='u-repeater'><!--product_item-->";


for ($i = 0; $i < count($workers); $i++)
{
echo "

            <div class='u-align-center u-container-style u-products-item u-repeater-item'>
              <div class='u-container-layout u-similar-container u-valign-bottom-sm u-container-layout-3'><!--product_image-->
                <img alt='' class='u-expanded-width u-image u-image-default u-product-control u-image-2' src='/images/shop".$workers[$i]['ID_Items'].".jpg''><!--/product_image-->
                <div class='u-align-center u-container-style u-grey-10 u-group u-group-2'>
                  <div class='u-container-layout u-valign-middle u-container-layout-4'><!--product_title-->
                    <h4 class='u-product-control u-text u-text-default u-text-3'>
                      <a class='u-product-title-link'><!--product_title_content-->".$workers[$i]['Name_of_product']."<!--/product_title_content--></a>
                    </h4><!--/product_title--><!--product_price-->
                    <div class='u-product-control u-product-price u-product-price-2'>
                      <div class='u-price-wrapper u-spacing-10'><!--product_old_price-->
                        <div class='u-hide-price u-old-price'></div>
                        <div class='u-price' style='font-size: 1.25rem; font-weight: 700;'>".'Номер товара: '.$workers[$i]['ID_Items'].'<br>Производитель: '.$workers[$i]['Man'].'<br>Категория: '.$workers[$i]['Cat'].'<br>Количество:'.$workers[$i]['Am'].'<br>Пол:'.$workers[$i]['Sex'].'<br>Размер(RUS):'.$workers[$i]['Size_RUS'].'<br>Литраж:'.$workers[$i]['Number_of_liters'].'<br>Длина:'.$workers[$i]['Length_CM'].'<br>Цена за штуку:'.$workers[$i]['Cost_per_piece']."</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
  }
      echo "</div>
</div><a href='deltovzak.php?id=".$workers[0]['ID_Orders']."'><button type='button' class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16'>Удалить заказ</button></a>
";
echo "<div class='u-price' style='font-size: 1.25rem; font-weight: 700;'>".'Назначенный курьер: '.$workers[0]['Courier_last'].' '.$workers[0]['Courier_first'].' '.$workers[0]['Courier_patronymic'].'<br>Номер телефона:'.$workers[0]['Courier_phone'].'<br>Клиент: '.$workers[0]['Client_last'].' '.$workers[0]['Client_first'].' '.$workers[0]['Client_patronymic'].'<br>Номер телефона:'.$workers[0]['Client_phone'].'<br>Адрес доставки: <br>'.$abc[0]['Address_Client']."</div>";

$sql4 = "SELECT `ID_Couriers`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password` FROM `Couriers`";
$ttt = $db->Select($sql4);
if ($cour == null){
echo "
<div class='u-price' style='font-size: 1.25rem; font-weight: 700;'>Выбрать курьера:</div>
<form action='./courzakaz.php?id=".$workers[0]['ID_Orders']."' method='POST' class='' source='custom' name='form' style='padding: 0px;' data-services=''>
  <select name='courid'>";
for ($j = 0; $j < count($ttt); $j++)
{
                   echo "<option value=".$ttt[$j]['ID_Couriers'].">".$ttt[$j]['Last_name'].' '.$ttt[$j]['First_name'].' '.$ttt[$j]['Patronymic']."</option>";
}
                    echo " </select>
                    <button type='submit' class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16'>Назначить курьера</button>
                  </a>
                </form>
                    ";}

?>

</div>
    </section>
    <?php include 'footer2.php'; ?>
  
</body></html>