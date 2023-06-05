<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Добавление нового товара</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/button.css" media="screen">
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
                  <a href='rabzakaz.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с заказами</a>
                  <a href='rabtovar.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с товарами</a>
                  <a href='rabcour.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с курьерами</a>
                  <a href='rabmanag.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с менеджерами</a>
  </div>";
}
else {
  echo "<script>window.location.href = './index.php';</script>";
}?>
        <h2 class="">Добавление нового товара</h2><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class='u-clearfix u-sheet u-valign-middle u-block-6023-2'><div class='u-align-center u-container-style u-group u-shape-rectangle u-block-6023-3'>
    <form action="regnewitem.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;" data-services="">
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="lastname-a30d" class="u-label u-text-black-5 u-block-6023-8">Наименование</label>
    <input type="text" placeholder="Введите наименование" id="lastname-a30d" name="Name_of_product" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
  </div>
  <div class="u-form-group u-form-password u-block-6023-10">
  <label for="firstname-a30d" class="u-label u-text-black-5 u-block-6023-11">Производитель</label>
  <select name='Manufacturer'>
                    <option name='1' value='1'>Jones</option>
                    <option name='2' value='2'>NIDECKER</option>
                    <option name='3' value='3'>Alphina</option>
                    <option name='4' value='4'>ELAN</option>
                    <option name='5' value='5'>Season</option>
                    <option name='6' value='6'>SALOMON</option>
                    <option name='7' value='7'>Bjorn Daehlie</option>
                    <option name='8' value='8'>Maier Sports</option>
                    <option name='9' value='9'>Deuter</option>
                    <option name='10' value='10'>Rocky Mountain</option>
                    <option name='11' value='11'>Scott</option>
                    <option name='12' value='12'>Rollerblade</option>
                    <option name='13' value='13'>Powerslide</option>
                  </select>  
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="patronymic-a30d" class="u-label u-text-black-5 u-block-6023-8">Категория</label>
    <select name='Categories'>
                    <option name='1' value='1'>Сноуборды</option>
                    <option name='2' value='2'>Лыжи</option>
                    <option name='3' value='3'>Обувь</option>
                    <option name='4' value='4'>Рюкзаки</option>
                    <option name='5' value='5'>Ролики</option>
                    <option name='6' value='6'>Велосипеды</option>
                    </select> 
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="phone-a30d" class="u-label u-text-black-5 u-block-6023-8">Количество</label>
    <input type="text" placeholder="Введите количество" id="phone-a30d" name="Amount" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="email-a30d" class="u-label u-text-black-5 u-block-6023-8">Пол</label>
    <input type="text" placeholder="Введите пол" id="email-a30d" name="Sex" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9">
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="pass-a30d" class="u-label u-text-black-5 u-block-6023-8">Размер(RUS)</label>
    <input type="text" placeholder="Введите размер(RUS)" id="pass-a30d" name="Size" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9">
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="pass-a30d" class="u-label u-text-black-5 u-block-6023-8">Литраж</label>
    <input type="text" placeholder="Введите литраж" id="pass-a30d" name="Liters" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9">
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="pass-a30d" class="u-label u-text-black-5 u-block-6023-8">Длина в см</label>
    <input type="text" placeholder="Введите длину в СМ" id="pass-a30d" name="Length" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9">
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="pass-a30d" class="u-label u-text-black-5 u-block-6023-8">Цена за штуку</label>
    <input type="text" placeholder="Введите цену" id="pass-a30d" name="Cost" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
  </div>
  <div class="u-align-left u-form-group u-form-submit u-block-6023-15">
    <input type="submit" value="Добавить" class="u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16">
  </div>
</form>

</div>
</div>
</div>
    </section>
    
    <?php include 'footer2.php'; ?>
  
</body></html>