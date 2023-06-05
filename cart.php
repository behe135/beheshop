<html style="font-size: 16px;" lang="ru"><head>
    <meta charset="utf-8">
    <title>BEHE-SHOP | Корзина</title>
    <link rel="stylesheet" href="css/page.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <body class="u-body u-xl-mode" data-lang="ru"></head>
    
  <?php include 'header.php'; ?>


        <section>      
          <div class="u-clearfix u-sheet u-block-5930-2">
            <div class="u-cart u-block-5930-6">
              <div class="u-cart-products-table u-table u-table-responsive u-block-5930-7">
                <div class="u-cart-button-container">
                  <a href="/shop.php" class="u-active-none u-btn u-button-style u-cart-continue-shopping u-hover-none u-none u-text-body-color u-block-5930-58"><span class="u-icon u-block-5930-59"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" data-color="#000000" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712    L143.492,221.863z"></path>
                  </g></g></svg></span>&nbsp;Продолжить покупки
                  </a>
                </div>

                <table class="u-table-entity u-block-5930-12">
                  <colgroup>
                    <col width='750px'>
                    <col width='13%'>
                    <col width='10%'>
                    <col width='13%'>
                  </colgroup>

                  <thead class="u-table-header u-block-5930-13">
                    <tr>
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-14">Товар </th>
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-15">Цена за штуку </th>
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-16">Количество </th>
                      <th class="u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-17">Стоимость </th>
                    </tr>
                  </thead>

                </table>
                  <div class=''>
                    <div class='u-cart-products-table u-table u-table-responsive u-block-5930-7'>
                      <?php
                      session_start();
                      //echo json_encode($_SESSION);
                      require_once ('./MySQL.php');
                      $db = new MySQL();
                      $db -> Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
                      foreach($_SESSION['cart'] as $product => $amount)
                      {
                          //$id_i = $product;
                          //$kol = $amount
                          //echo "id $product";
                      //$id_i = $_SESSION['cart'][$ids];
                      $sql = "SELECT `ID_Items`, `Name_of_product`, Items.Manufacturer AS Man, `Category`, `Amount`, `Sex`, `Size_RUS`, `Number_of_liters`, `Length_CM`, `Cost_per_piece`, Manufacturers.Manufacturer AS Manufact FROM `Items` 
                      INNER JOIN Manufacturers ON Items.Manufacturer=Manufacturers.ID_Manufacturer 
                      WHERE ID_Items = $product";
                      $tov = $db->Select($sql);
                      //echo "Название: ".$tov[0]['Name_of_product']."";
                      $subtotal = $tov[0]['Cost_per_piece'] * $amount;
                      $total += $subtotal;
                      echo "
                        <table class='u-table-entity u-block-5930-12'>
                          <colgroup>
                            <col width='750px'>
                            <col width='13%'>
                            <col width='10%'>
                            <col width='13%'>
                          </colgroup>
                      <tbody class='u-table-body u-block-5930-18'>

                        <tr>
                          <td class='u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-14'><span class='u-cart-remove-item u-icon u-block-5930-20'>
                          <a href='clear2.php?id=$product'><img class='' src='/images/trash.png'></a>
                            <img class='u-cart-product-image u-image u-image-default u-product-control u-block-5930-21' src='/images/shop".$tov[0]['ID_Items'].".jpg'>
                            <h6 class='u-cart-product-title u-product-control u-text u-block-5930-22'>
                              <a class='u-product-title-link' href='/product.php?id=".$tov[0]['ID_Items']."'>".$tov[0]['Name_of_product']."</a>
                            </h6>
                            <h6 class='u-cart-product-title u-product-control u-text u-block-5930-22'>
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
                            <!--/product_variation-->";}
                          echo "</div></td></h6>
                          
                          <td class='u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-23'>
                            <div class='u-cart-product-price u-product-control u-product-price u-block-5930-24'>
                              <div class='u-price-wrapper'>
                                <div class='u-price'>".$tov[0]['Cost_per_piece']." Руб.</div>
                              </div>
                            </div>
                          </td>

                          <td class='u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-25'>
                                <a class='disabled minus u-button-style u-hidden u-quantity-button'>
                                  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'><path d='m 4 8 h 8' fill='none' stroke='currentColor' stroke-width='1' fill-rule='evenodd'></path></svg>
                                </a>
                                  <div class='u-price'>$amount</div>
                          </td>

                          <td class='u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-28'>
                            <div class='u-cart-product-subtotal u-product-control u-product-price u-block-5930-29'>
                              <div class='u-price-wrapper'>
                                <div class='u-price' style='font-weight: 700;'>$subtotal Руб.</div>
                              </div>
                            </div>
                          </td>
                        </tr>
                        </tbody>
                        </table>
                      </div>";}
                      echo "
                      </div>
                  </div>";

      echo"<div class='u-align-right u-cart-block-content u-text u-block-5930-70'>
      <div class='u-cart-totals-table u-table u-table-responsive u-block-5930-71'>
      <a href='/clear.php' class='u-btn u-button-style u-cart-checkout-btn u-block-5930-89'>Очистить корзину</a>
    </div>
      <div class='u-cart-blocks-container'>
        <div class='u-cart-block u-indent-30'>
        </div>
        <div class='u-cart-block u-cart-totals-block u-indent-30'>
          <div class='u-cart-block-container u-clearfix'>
            <h2 class='u-cart-block-header u-text u-block-5930-69'>Итого:</h2>
            <div class='u-align-right u-cart-block-content u-text u-block-5930-70'>
              <div class='u-cart-totals-table u-table u-table-responsive u-block-5930-71'>
                <table class='u-table-entity u-block-5930-75'>
                  <colgroup>
                    <col width='50%'>
                    <col width='50%'>
                  </colgroup>
                  <tbody class='u-align-right u-table-body u-block-5930-80'>
                    <tr>
                      <td class='u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-block-5930-83'>Стоимость</td>
                      <td class='u-border-1 u-border-grey-dark-1 u-table-cell u-block-5930-84'>$total рублей</td>
                    </tr>
                  </tbody>
                </table>
              </div>";
              
              if($_SESSION['cart'] != Null){
              echo "<a href='./buy.php' class='u-btn u-button-style u-cart-checkout-btn u-block-5930-89'>Купить</a>";}
              else{
              echo "<a href='' class='u-btn u-button-style u-cart-checkout-btn u-block-5930-89'>Купить</a>";}
            
            echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div></section>";?>

<?php include 'footer.php'; ?>
      
</body></html>