    <?php 
      require_once('./MySQL.php');
      session_start();
      $db = new MySQL();
      $db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
      $id = $_GET['id'];

      $date = date('Y-m-d H-i-s');


      $db->Do("INSERT INTO `Return`(`ID_Return`, `Date_Return`) 
      VALUES (null, '$date')");

      $sql = "SELECT `ID_Return` FROM `Return` WHERE Date_Return = '$date'";
      $id_return = $db->Select($sql);
      $id_ret = $id_return[0]['ID_Return'];

      $db->Do("UPDATE `Orders` SET `Num_Return`= '$id_ret' WHERE ID_Orders = $id");

      $db->Do("UPDATE `Delivery` SET `Date`= '$date', `Result`='Доставлено' WHERE Order_number = $id");


      echo "<script>window.location.href = './curzakaz.php?id=$id';</script>";
    ?>