    <?php 
      require_once('./MySQL.php');
      session_start();
      $db = new MySQL();
      $db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
      $manag = $_SESSION['manag_id'];
      $id = $_GET['id'];
      $cour = $_POST['courid'];
      $db->Do("UPDATE `Orders` SET `Manager`=$manag WHERE ID_Orders = $id");

      $db->Do("UPDATE `Delivery` SET `Courier`=$cour WHERE Order_number = $id");

      echo "<script>window.location.href = './checkzak.php?id=$id';</script>";
      //echo "<script>window.location.reload();</script>";
    ?>