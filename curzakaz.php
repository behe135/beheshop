<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Заказ</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/shop.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  
  </head>
    <body class="u-body u-xl-mode" data-lang="ru">
    
  <?php include 'header3.php'; ?>

    <section class="u-align-center u-clearfix u-section-1" id="sec-3103">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-sheet u-valign-middle u-block-6023-2">
                        
        <?php
        session_start();
        require_once ('./MySQL.php');
        $db = new MySQL();
        $db -> Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
        $id = $_GET['id'];
        $cour_id = $_SESSION["cour_id"];

        echo "<h2 class=''>Заказ №$id</h2><div class='u-form u-login-control u-block-6023-6'>
        <div class='u-repeater'>";

        $sql = "SELECT Orders.ID_Orders, Items.ID_Items, Orders.Payment_method, Items.Name_of_product, Delivery.Result, Order_Item.Amount, Address.Address_Client, Delivery.Result, Order_Item.Amount AS Am
        FROM Couriers INNER JOIN (Address INNER JOIN ((Orders INNER JOIN (Items INNER JOIN Order_Item ON Items.ID_Items = Order_Item.ID_I) ON Orders.ID_Orders = Order_Item.ID_O) INNER JOIN Delivery ON Orders.ID_Orders = Delivery.Order_number) ON Address.ID_Address = Delivery.Address) ON Couriers.ID_Couriers = Delivery.Courier 
        WHERE ID_Couriers = $cour_id AND Order_number = $id";
        $info = $db->Select($sql);

        $res = $info[0]['Result'];

        for($i=0; $i<count($info); $i++){
            echo "<div class='u-align-center u-container-style u-products-item u-repeater-item'>
            <div class='u-container-layout u-similar-container u-valign-bottom-sm u-container-layout-3'><!--product_image-->
              <img alt='' class='u-expanded-width u-image u-image-default u-product-control u-image-2' src='/images/shop".$info[$i]['ID_Items'].".jpg''><!--/product_image-->
              <div class='u-align-center u-container-style u-grey-10 u-group u-group-2'>
                <div class='u-container-layout u-valign-middle u-container-layout-4'><!--product_title-->
                  <h4 class='u-product-control u-text u-text-default u-text-3'>
                    <a class='u-product-title-link'><!--product_title_content-->".$info[$i]['Name_of_product']."<!--/product_title_content--></a>
                  </h4><!--/product_title--><!--product_price-->
                  <div class='u-product-control u-product-price u-product-price-2'>
                    <div class='u-price-wrapper u-spacing-10'><!--product_old_price-->
                      <div class='u-hide-price u-old-price'></div>
                      <div class='u-price' style='font-size: 1.25rem; font-weight: 700;'>".'Номер товара: '.$info[$i]['ID_Items'].'<br>Количество:'.$info[$i]['Am']."</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>";}

                echo"</div></div></div>";
            if ($res == 'Доставлено'){
              echo "<h2 class=''>Заказ доставлен или возвращен</h2><div class='u-form u-login-control u-block-6023-6'>";
            }

            else if ($res == 'Не доставлено'){
              echo "<a href='dost.php?id=".$info[0]['ID_Orders']."'><button type='button' class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16'>Заказ доставлен</button></a>
              <a href='vozr.php?id=".$info[0]['ID_Orders']."'><button type='button' class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16'>Возврат заказа</button></a>";
            }
            ?>
    </section>
    
  <?php include 'footer3.php'; ?>
  
</body></html>
