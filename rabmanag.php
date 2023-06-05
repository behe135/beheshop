<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Работа с менеджерами</title>
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
                  <a href='rabzakaz.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с заказами</a>
                  <a href='rabtovar.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с товарами</a>
                  <a href='rabcour.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с курьерами</a>
                  <a href='rabmanag.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base'>Работа с менеджерами</a>
  </div>";
}
else {
  echo "<script>window.location.href = './index.php';</script>";
}?>

        <h2 class="u-text u-text-default u-text-1">Работа с менеджерами</h2><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <a href='newmanag.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Добавить нового менеджера</a>
        
        <div class='u-repeater'> 

          <?php 
            require_once('./MySQL.php');
            session_start();
            $db = new MySQL();
            $db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
            $sql = "SELECT `ID_Manager`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password` FROM `Managers`";
            $workers = $db->Select($sql);

            for ($i = 0; $i < count($workers); $i++){
            echo "
            <div class=''>
              <h4 class='my-0 font-weight-normal'>".$workers[$i]['Last_name'].' '.$workers[$i]['First_name'].' '.$workers[$i]['Patronymic']. "</h4>
              <h5 class='card-title pricing-card-title'>Номер менеджера: <small class='text-muted'>".$workers[$i]['ID_Manager']."</small></h1>
              <h5 class='card-title pricing-card-title'>Номер телефона: <small class='text-muted'>".$workers[$i]['Phone_number']."</small></</h2>
              <h5 class='card-title pricing-card-title'>E-mail: <small class='text-muted'>".$workers[$i]['Email']."</small></h3>
              <h5 class='card-title pricing-card-title'>Пароль: <small class='text-muted'>".$workers[$i]['Password']."</small></h3>
              <a href='redmanag.php?id=".$workers[$i]['ID_Manager']."' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Редактировать</a>
              <a href='delmanag.php?id=".$workers[$i]['ID_Manager']."' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Удалить</a>
            </div>";}
          ?>
        </div>
      </div>
    </section>
    
    <?php include 'footer2.php'; ?>
  
  </body>
</html>