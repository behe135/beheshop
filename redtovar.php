<html style='font-size: 16px;' lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Редактирование товара</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/button.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"></head>
  <body class="u-body u-xl-mode" data-lang="ru">
    <?php include 'header2.php';

$tt = $_SESSION['manag_id'];
if($tt!=null){
  echo "<section class='u-align-center u-clearfix u-section-1' id='sec-c84b'>
  <div class='u-clearfix u-sheet u-sheet-1'>
  <div class='u-align-center u-form-group u-form-submit u-block-6023-15'>
                  <a href='rabzakaz.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с заказами</a>
                  <a href='rabtovar.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с товарами</a>
                  <a href='rabcour.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с курьерами</a>
                  <a href='rabmanag.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с менеджерами</a>
  </div>";
}
else {
  echo "<script>window.location.href = './index.php';</script>";
}?>
            <div class='u-container-layout u-valign-bottom u-block-6023-4'>
              <h2 class=''>Редактирование товара</h2>
                <?php 
                  require_once('./MySQL.php');
                  session_start();
                  $db = new MySQL();
                  $db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
                  $id = $_GET['id'];
                  $sql = "SELECT `ID_Items`, `Name_of_product`, `Manufacturer`, `Category`, `Amount`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, `Availability` FROM `Items` WHERE ID_Items = $id";
                  $item = $db->Select($sql);
                  $name = $item[0]['Name_of_product'];
                  $manuf = $item[0]["Manufacturer"];
                  $categ = $item[0]["Category"];
                  $amount = $item[0]['Amount'];
                  $sex = $item[0]['Sex'];
                  $size = $item[0]['Size_RUS'];
                  $liters = $item[0]['Number_of_liters'];
                  $length = $item[0]['Length_CM'];
                  $cost = $item[0]['Cost_per_piece'];

                  echo "
                  <form action='./redtovar2.php?id=$id' method='POST' class='u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form' source='custom' name='form' style='padding: 0px;' data-services=''>
                    <div class='u-form-group u-form-name u-block-6023-7'>
                      <label for='lastname-a30d' class='u-label u-text-black-5 u-block-6023-8'>Наименование</label>
                      <input type='text' placeholder='Введите наименование' id='lastname-a30d' name='Name_of_product' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value='$name' required=''>
                    </div>
                    <div class='u-form-group u-form-password u-block-6023-7'>
                      <label for='firstname-a30d' class='u-label u-text-black-5 u-block-6023-11'>Производитель</label>
                      <input type='text' placeholder='Введите производителя' id='firstname-a30d' name='Manufac' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-12' value='$manuf' required=''>
                    </div>
                    <div class='u-form-group u-form-name u-block-6023-7'>
                      <label for='username-a30d' class='u-label u-text-black-5 u-block-6023-8'>Категория</label>
                      <input type='text' placeholder='Введите категорию' id='patronymic-a30d' name='Categ' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value = '$categ' required=''>
                    </div>
                    <div class='u-form-group u-form-name u-block-6023-7'>
                      <label for='username-a30d' class='u-label u-text-black-5 u-block-6023-8'>Количество</label>
                      <input type='text' placeholder='Введите количество' id='phone-a30d' name='Amount' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value = '$amount' required=''>
                    </div>
                    <div class='u-form-group u-form-name u-block-6023-7'>
                      <label for='username-a30d' class='u-label u-text-black-5 u-block-6023-8'>Пол</label>
                      <input type='text' placeholder='Введите пол' id='email-a30d' name='Sex' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value = '$sex' required=''>
                    </div>
                    <div class='u-form-group u-form-name u-block-6023-10'>
                      <label for='username-a30d' class='u-label u-text-black-5 u-block-6023-8'>Размер(RUS)</label>
                      <input type='text' placeholder='Введите размер RUS' id='pass-a30d' name='Size' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value = '$size' required=''>
                    </div>
                    <div class='u-form-group u-form-name u-block-6023-10'>
                      <label for='username-a30d' class='u-label u-text-black-5 u-block-6023-8'>Литраж</label>
                      <input type='text' placeholder='Введите литраж' id='pass-a30d' name='Liters' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value = '$liters' required=''>
                    </div>
                    <div class='u-form-group u-form-name u-block-6023-10'>
                      <label for='username-a30d' class='u-label u-text-black-5 u-block-6023-8'>Длина в СМ</label>
                      <input type='text' placeholder='Введите длину в СМ' id='pass-a30d' name='Length' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value = '$length' required=''>
                    </div>
                    <div class='u-form-group u-form-name u-block-6023-10'>
                      <label for='username-a30d' class='u-label u-text-black-5 u-block-6023-8'>Цена за штуку</label>
                      <input type='text' placeholder='Введите цену за штуку' id='pass-a30d' name='Cost' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9' value = '$cost' required=''>
                    </div>
                    <div class='u-align-left u-form-group u-form-submit u-block-6023-15'>
                      <input type='submit' value='Применить изменения' class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16'>
                    </div>
                  </form>";
                ?>
            </div>
          </div>
      </div>
    </section>
    <?php include 'footer2.php'; ?>
  
  </body>
</html>