<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Каталог</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/shop.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <body class="u-body u-xl-mode" data-lang="ru">
    
  <?php include 'header.php'; ?>

    <section class="u-align-center u-clearfix u-section-1" id="sec-c84b">
      <div class="u-clearfix u-sheet">
        <h2 class="u-text u-text-default u-text-1">Каталог товаров</h2><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class="btn-group">
          <button type="button" class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16' data-category="0" class="btn btn-default active js-category" onclick="document.location='./shop.php'">Все категории</button>
          <button type="button" class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16' data-category="1" class="btn btn-default js-category" onclick="document.location='./shop1.php'">Сноуборды</button>
          <button type="button" class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16' data-category="2" class="btn btn-default js-category" onclick="document.location='./shop2.php'">Лыжи</button>
          <button type="button" class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16' data-category="3" class="btn btn-default js-category" onclick="document.location='./shop3.php'">Обувь</button>
          <button type="button" class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16' data-category="4" class="btn btn-default js-category" onclick="document.location='./shop4.php'">Рюкзаки</button>
          <button type="button" class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16' data-category="3" class="btn btn-default js-category" onclick="document.location='./shop5.php'">Ролики</button>
          <button type="button" class='u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-4-base u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-block-6023-16' data-category="4" class="btn btn-default js-category" onclick="document.location='./shop6.php'">Велосипеды</button>
        </div>
        <div class='u-expanded-width u-products'>
          <div class='u-repeater'><!--product_item-->
        <?php
        session_start();
        require_once ('./MySQL.php');
        $db = new MySQL();
        $db -> Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
        $id = $_GET['id'];
        $sql = "SELECT `ID_Items`, `Name_of_product`, `Manufacturer`, `Category`, `Amount`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, `Availability` FROM `Items` WHERE Category = 2";
        $tovar = $db->Select($sql);
        for ($i = 0; $i < count($tovar); $i++){
            echo "
            <div class='u-align-center u-container-style u-products-item u-repeater-item'>
              <div class='u-container-layout u-similar-container u-valign-bottom-sm u-container-layout-3'><!--product_image-->
                <img alt='' class='u-expanded-width u-image u-image-default u-product-control u-image-2' src='/images/shop".$tovar[$i]['ID_Items'].".jpg''><!--/product_image-->
                <div class='u-align-center u-container-style u-grey-10 u-group u-group-2'>
                  <div class='u-container-layout u-valign-middle u-container-layout-4'><!--product_title-->
                    <h4 class='u-product-control u-text u-text-default u-text-3'>
                      <a class='u-product-title-link' href='product.php?id=".$tovar[$i]['ID_Items']."'><!--product_title_content-->".$tovar[$i]['Name_of_product']."<!--/product_title_content--></a>
                    </h4><!--/product_title--><!--product_price-->
                    <div class='u-product-control u-product-price u-product-price-2'>
                      <div class='u-price-wrapper u-spacing-10'><!--product_old_price-->
                        <div class='u-hide-price u-old-price'><!--product_old_price_content-->12;<!--/product_old_price_content--></div><!--/product_old_price--><!--product_regular_price-->
                        <div class='u-price u-text-palette-2-base' style='font-size: 1.25rem; font-weight: 700;'><!--product_regular_price_content-->".$tovar[$i]['Cost_per_piece']." Рублей<!--/product_regular_price_content--></div><!--/product_regular_price-->
                      </div>
                    </div><!--/product_price-->
                  </div>
                </div>
              </div>
            </div>";    
        }
        ?>
        </div>
            </div>
      </div>
    </section>
    
    <?php include 'footer.php'; ?>
  
</body></html>