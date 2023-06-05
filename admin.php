<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Администрирование</title>
    <link rel="stylesheet" href="css/info.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <body class="u-body u-xl-mode" data-lang="ru">
    
  <?php include 'header2.php';

  $tt = $_SESSION['manag_id'];
  if($tt!=null){
    echo "<section class='u-align-center u-clearfix u-section-1' id='sec-c84b'>
    <div class='u-clearfix u-sheet u-sheet-1'>
        <h2 class=''>Выберите пункт</h2>
        <div class='u-align-center u-form-group u-form-submit u-block-6023-15'>
                    <a href='rabzakaz.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с заказами</a>
                    <a href='rabtovar.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с товарами</a>
                    <a href='rabcour.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с курьерами</a>
                    <a href='rabmanag.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Работа с менеджерами</a>
          </div>
</div>
    </section>";}
    else {
      echo "<script>window.location.href = './index.php';</script>";}
    ?>
    <?php include 'footer2.php'; ?>
  
</body></html>