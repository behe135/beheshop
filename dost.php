    <?php 
      require_once('./MySQL.php');
      session_start();
      $db = new MySQL();
      $db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
      $id = $_GET['id'];

      $date = date('Y-m-d');

      $db->Do("UPDATE `Delivery` SET `Date`='$date', `Result` = 'Доставлено' WHERE Order_number = $id");


      echo "<script>window.location.href = './curzakaz.php?id=$id';</script>";
      //echo "<script>window.location.reload();</script>";
    ?>