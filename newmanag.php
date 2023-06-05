<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Добавление менеджера</title>
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
        <h2 class="">Добавление нового менеджера</h2><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class='u-clearfix u-sheet u-valign-middle u-block-6023-2'><div class='u-align-center u-container-style u-group u-shape-rectangle u-block-6023-3'>
    <form action="regnewmanag.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;" data-services="">
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="lastname-a30d" class="u-label u-text-black-5 u-block-6023-8">Фамилия</label>
    <input type="text" placeholder="Введите фамилию" id="lastname-a30d" name="Last_name" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
  </div>
  <div class="u-form-group u-form-password u-block-6023-10">
    <label for="firstname-a30d" class="u-label u-text-black-5 u-block-6023-11">Имя</label>
    <input type="text" placeholder="Введите имя" id="firstname-a30d" name="First_name" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-12" required>
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="patronymic-a30d" class="u-label u-text-black-5 u-block-6023-8">Отчество</label>
    <input type="text" placeholder="Введите отчество" id="patronymic-a30d" name="Patronymic" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="phone-a30d" class="u-label u-text-black-5 u-block-6023-8">Номер телефона</label>
    <input type="text" placeholder="Введите номер телефона" id="phone-a30d" name="Phone_number" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="email-a30d" class="u-label u-text-black-5 u-block-6023-8">E-mail</label>
    <input type="email" placeholder="Введите почту" id="email-a30d" name="Email" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
  </div>
  <div class="u-form-group u-form-name u-block-6023-7">
    <label for="pass-a30d" class="u-label u-text-black-5 u-block-6023-8">Пароль</label>
    <input type="text" placeholder="Введите пароль" id="pass-a30d" name="Password" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-9" required>
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