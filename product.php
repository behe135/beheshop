<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Информация о товаре</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <link rel="stylesheet" href="css/product.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <body class="u-body u-xl-mode" data-lang="ru">
    
  <?php include 'header.php'; ?>

    <section class="u-clearfix u-section-1" id="sec-1980">
      <div class="u-clearfix u-sheet u-sheet-1"><!--product--><!--product_options_json--><!--{"source":""}--><!--/product_options_json--><!--product_item-->
        <div class="u-container-style u-expanded-width u-product u-product-1">
        <?php
        session_start();
        require_once ('./MySQL.php');
        $db = new MySQL();
        $db -> Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
        $id = $_GET['id'];
        $sql = "SELECT `ID_Items`, `Name_of_product`, Items.Manufacturer AS Man, `Category`, `Amount`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, Manufacturers.Manufacturer AS Manufact FROM `Items` 
        INNER JOIN Manufacturers ON Items.Manufacturer=Manufacturers.ID_Manufacturer
        WHERE ID_Items = $id";
        $tov = $db->Select($sql);   
          echo 
          "<div class='u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1'><!--product_gallery--><!--options_json--><!--{'maxItems':''}--><!--/options_json-->
            <div class='u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-right u-gallery-1' data-interval='5000' data-u-ride='carousel' id='carousel-3c55'>
              <div class='u-carousel-inner u-gallery-inner' role='listbox'><!--product_gallery_item-->
                <div class='active u-active u-carousel-item u-gallery-item'>
                  <div class='u-back-slide'>
                    <img class='u-back-image u-expanded' src='/images/shop".$tov[0]['ID_Items'].".jpg'>
                  </div>
                  <div class='u-over-slide u-over-slide-1'>
                    <h3 class='u-gallery-heading'>Sample Title</h3>
                    <p class='u-gallery-text'>Sample Text</p>
                  </div>
                </div><!--/product_gallery_item--><!--product_gallery_item-->
              </div>
              <a class='u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-grey-60 u-text-hover-grey-75 u-white u-carousel-control-1' href='#carousel-3c55' role='button' data-u-slide='prev'>
                <span aria-hidden='true'>
                  <svg viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'></path></svg>
                </span>
                <span class='sr-only'>
                  <svg viewBox='0 0 477.175 477.175'><path d='M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z'></path></svg>
                </span>
              </a>
              <a class='u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-grey-60 u-text-hover-grey-75 u-white u-carousel-control-2' href='#carousel-3c55' role='button' data-u-slide='next'>
                <span aria-hidden='true'>
                  <svg viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'></path></svg>
                </span>
                <span class='sr-only'>
                  <svg viewBox='0 0 477.175 477.175'><path d='M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z'></path></svg>
                </span>
              </a>
            </div><!--/product_gallery--><!--product_title-->
            <h2 class='u-product-control u-text u-text-default u-text-1'>
              <a class='u-product-title-link'><!--product_title_content-->".$tov[0]['Name_of_product']."<!--/product_title_content--></a>
            </h2><!--/product_title--><!--product_price-->
            <div class='u-product-control u-product-price u-product-price-1'>
              <div class='u-price-wrapper u-spacing-10'><!--product_old_price-->
                <div class='u-price u-text-palette-2-base' style='font-size: 1.5rem; font-weight: 700;'><!--product_regular_price_content-->".$tov[0]['Cost_per_piece']." Рублей<!--/product_regular_price_content--></div><!--/product_regular_price-->
              </div>
            </div><!--/product_price--><!--product_variations-->
            <div class='u-product-control u-product-variations u-product-variations-1'><!--product_variation-->
              <div class='u-product-variant'>
              <li><label id='myLabel1' for='product-variant-select-1' class='u-label'><!--product_variation_label_content-->Производитель: ".$tov[0]['Manufact']."<!--/product_variation_label_content--></label></li>";
                if ($tov[0]['Sex'] != null){
                echo "<li><label id='myLabel1' for='product-variant-select-1' class='u-label'><!--product_variation_label_content-->Пол: ".$tov[0]['Sex']."<!--/product_variation_label_content--></label></li>";}
                if ($tov[0]['Size_RUS'] != null){
                echo "<li><label id='myLabel2' for='product-variant-select-1' class='u-label'><!--product_variation_label_content-->Размер RUS: ".$tov[0]['Size_RUS']."<!--/product_variation_label_content--></label></li>";}
                if ($tov[0]['Number_of_liters'] != null){
                echo"
                <li><label id='myLabel3' for='product-variant-select-1' class='u-label'><!--product_variation_label_content-->Объем: ".$tov[0]['Number_of_liters']."<!--/product_variation_label_content--></label></li>";}
                if ($tov[0]['Length_CM'] != null){
                echo"<li><label id='myLabel4' for='product-variant-select-1' class='u-label'><!--product_variation_label_content-->Длина в сантиметрах: ".$tov[0]['Length_CM']."<!--/product_variation_label_content--></label></li>
              </div><!--/product_variation-->";}

                if($_SESSION['user_id'] != ''){
                echo"<form action='./dobcart.php?id=".$tov[0][ID_Items]."' method='POST' class='u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form' source='custom' name='form' style='padding: 0px;' data-services=''> 
                <div class='u-form-group u-form-password u-block-6023-10'>
                  <label for='password-a30d' class='u-label u-text-black-5 u-block-6023-11'>Количество:</label>
                  <input type='text' placeholder='Введите количество' name='Amount' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-12' required=''>
                  <input type='submit' value='Добавить в корзину' class='u-black u-btn u-button-style u-product-control u-btn-1' style='margin: 25px 0 0 0!important'>
                </div>
            </form>";}
                else {
                    echo"<form action='./auth.php' method='POST' class='u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form' source='custom' name='form' style='padding: 0px;' data-services=''> 
                <div class='u-form-group u-form-password u-block-6023-10'>
                  <label for='password-a30d' class='u-label u-text-black-5 u-block-6023-11'>Количество:</label>
                  <input type='text' placeholder='Введите количество' name='Amount' class='u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-block-6023-12' required=''>
                  <input type='submit' value='Добавить в корзину' class='u-black u-btn u-button-style u-product-control u-btn-1' style='margin: 25px 0 0 0!important'>
                </div>
            </form>";
                }
            echo "</div><!--/product_variations--><!--product_content-->
        </div><!--/product_item--><!--/product-->
      </div>";
      ?>
    </section>
    
  <?php include 'footer.php'; ?>
  
</body></html>