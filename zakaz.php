<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Мои заказы </title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/shop.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <body class="u-body u-xl-mode" data-lang="ru">
    
  <?php include 'header3.php';

  $tt = $_SESSION['cour_id'];
  if($tt!=null){
    echo "<section class='u-align-center u-clearfix u-section-1' id='sec-c84b'>
    <div class='u-clearfix u-sheet u-sheet-1'>
        <h2 class=''>Ожидается доставка</h2><!--products--><!--products_options_json--><!--{'type':'Recent','source':'','tags':'','count':''}--><!--/products_options_json-->
        <div class='u-align-center u-form-group u-form-submit u-block-6023-15'>
                    <a href='./zakaz.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Все заказы</a>
                    <a href='./zakaz1.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Доставленные заказы</a>
                    <a href='./zakaz2.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Не доставленные заказы</a>
          </div>
          <div class='u-repeater'>";}
          else {
            echo "<script>window.location.href = './index.php';</script>";
          }?>
        <?php

require_once('./MySQL.php');
session_start();
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$cour_id = $_SESSION["cour_id"];
$sql = "SELECT `ID_Delivery`, `Order_number`, `Courier`, `Address`, `Date`, `Result` FROM `Delivery` WHERE Courier = $cour_id";
$zakaz = $db->Select($sql);

$tt = $_SESSION['cour_id'];
if($tt!=null){

for ($i = 0; $i < count($zakaz); $i++)
{
echo "
<div class='card1 mb-4 shadow-sm'>

<div class='card-header'>

<h4 class='my-0 font-weight-normal'>".'Заказ номер: '.$zakaz[$i]['Order_number']."</h4>
<a href='curzakaz.php?id=".$zakaz[$i]['Order_number']."' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Просмотр заказа</a>
</div>

</div>

";
}}

else {
  echo "<script>window.location.href = './auth.php';</script>";
}
?></div>
        </div>
</div>
    </section>
    
    <?php include 'footer2.php'; ?>
  
</body></html>