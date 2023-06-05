<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Работа с товарами</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/shop.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
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
  </div><h2 class='u-text u-text-default u-text-1'>Работа с товарами</h2>";
}
else {
  echo "<script>window.location.href = './index.php';</script>";
}?>
        <a href='newtovar.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Добавить новый товар</a>
        <div class='u-expanded-width u-products'>
          <div class='u-repeater'><!--product_item-->
        <?php
require_once('./MySQL.php');
session_start();
$db = new MySQL();
$db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
$sql = "SELECT
`ID_Items`,
`Name_of_product`,
Items.Manufacturer AS Man,
Items.Category AS ItemCategory,
`Amount`,
`Sex`,
`Size_RUS`,
`Number_of_liters`,
`Length_CM`,
`Cost_per_piece`,
Manufacturers.Manufacturer AS Manufact,
Categories.Category AS Categ
FROM
`Items`
INNER JOIN
Manufacturers ON Items.Manufacturer = Manufacturers.ID_Manufacturer
INNER JOIN
Categories ON Items.Category = Categories.ID_Category
";
$workers = $db->Select($sql);

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
                        <div class='u-price' style='font-size: 1.25rem; font-weight: 700;'>".'Номер товара: '.$workers[$i]['ID_Items'].'<br>Производитель: '.$workers[$i]['Manufact'].'<br>Категория: '.$workers[$i]['Categ'].'<br>Количество:'.$workers[$i]['Amount'].'<br>Пол:'.$workers[$i]['Sex'].'<br>Размер(RUS):'.$workers[$i]['Size_RUS'].'<br>Литраж:'.$workers[$i]['Number_of_liters'].'<br>Длина:'.$workers[$i]['Length_CM'].'<br>Цена за штуку:'.$workers[$i]['Cost_per_piece']."</div>
                      </div>
                    </div><!--/product_price-->
                  </div>
                </div>
                <a href='redtovar.php?id=".$workers[$i]['ID_Items']."' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Редактировать</a>
                <a href='deltovar.php?id=".$workers[$i]['ID_Items']."' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Удалить</a>
              </div>
            </div>";
  }
?>
        </div>
</div>
</div>
    </section>
    
    <?php include 'footer2.php'; ?>
  
</body></html>