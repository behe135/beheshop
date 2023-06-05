    <?php 
      require_once('./MySQL.php');
      session_start();
      $db = new MySQL();
      $db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
      $id = $_GET['id'];
      $name = $_POST['Name_of_product'];
      $manuf = $_POST["Manufac"];
      $categ = $_POST["Categ"];
      $amount = $_POST['Amount'];
      $sex = $_POST['Sex'];
      $size = $_POST['Size'];
      $liters = $_POST['Liters'];
      $length = $_POST['Length'];
      $cost = $_POST['Cost'];
      $db->Do("UPDATE `Items` SET `ID_Items`=$id,`Name_of_product`='$name',`Manufacturer`='$manuf',`Category`='$categ',`Amount`='$amount',`Sex`='$sex',`Size_RUS`='$size',`Number_of_liters`='$liters',`Length_CM`='$length',`Cost_per_piece`='$cost',`Availability`='1' WHERE ID_Items = $id");


      echo "<script>window.location.href = './redtovar.php?id=$id';</script>";
      //echo "<script>window.location.reload();</script>";
    ?>