<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Личный кабинет</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/button.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <body class="u-body u-xl-mode" data-lang="ru">
    
  <?php include 'header3.php'; ?>

    <section class="" id="sec-3103">
      <div class="u-clearfix u-sheet u-valign-middle u-block-6023-2">
        <div class="u-clearfix u-sheet u-valign-middle u-block-6023-2">
                <div class='u-align-center u-container-style u-group u-shape-rectangle u-block-6023-3'>
                    <div class='u-container-layout u-valign-bottom u-block-6023-4'>
                            <div class='u-container-layout u-valign-bottom u-block-6023-4'><h2 class='u-text u-text-body-alt-color-black u-text-default u-block-6023-5'>Информация о курьере</h2><div class='u-form u-login-control u-block-6023-6'>
                        
        <?php
        session_start();
        //echo json_encode($_SESSION);
        require_once ('./MySQL.php');
        $db = new MySQL();
        $db -> Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
        $cour_id = $_SESSION["cour_id"];
        $sql = "SELECT `ID_Couriers`, `Last_name`, `First_name`, `Patronymic`, `Phone_number`, `Email`, `Password` FROM `Couriers` WHERE $cour_id = ID_Couriers";
        $info = $db->Select($sql);
        //echo $info;
        //echo json_encode($info);
        //if($_COOKIE == $info[0].['Registration_number']){
            echo "<p class='u-text u-text-2'>Фамилия: ".$info[0]['Last_name']."</p>
                <p class='u-text u-text-2'>Имя: ".$info[0]['First_name']."</p>
                <p class='u-text u-text-2'>Отчество: ".$info[0]['Patronymic']."</p>
                <p class='u-text u-text-2'>Номер телефона: ".$info[0]['Phone_number']."</p>
                <p class='u-text u-text-2'>E-mail: ".$info[ 0]['Email']."</p>
                <form action='logout.php' method='POST' class='u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form' source='custom' name='form' style='padding: 0px;' data-services=''>
                  <div class='u-align-center u-form-group u-form-submit u-block-6023-15'>
                    <a href='logout.php' class='u-active-palette-2-light-3 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-1 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color-red u-text-hover-palette-2-base u-block-6023-16'>Выход</a>
                    <input type='submit' value='submit' class='u-form-control-hidden'>
                  </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
      </div>";?>
    </section>
    
  <?php include 'footer3.php'; ?>
  
</body></html>