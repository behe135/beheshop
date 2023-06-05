    <?php 
      require_once('./MySQL.php');
      session_start();
      $db = new MySQL();
      $db->Connect('localhost', 'daniils8_store', 'Qazxswedc1.', 'daniils8_store');
      $id = $_GET['id'];
      $last_name = $_POST['lastname'];
      $first_n = $_POST['firstname'];
      $patr = $_POST['Patronymic'];
      $phone = $_POST['Phone_num'];
      $mail = $_POST['Email'];
      $pass = $_POST['Password'];

      $db->Do("UPDATE `Couriers` SET `ID_Couriers`=$id, `Last_name`='$last_name', `First_name`='$first_n', `Patronymic`='$patr', `Phone_number`='$phone', `Email`='$mail', `Password`='$pass' WHERE ID_Couriers = $id");


      echo "<script>window.location.href = './redcour.php?id=$id';</script>";
      //echo "<script>window.location.reload();</script>";
    ?>