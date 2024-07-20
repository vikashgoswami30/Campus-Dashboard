<?php
      include('../Connection.php'); // include 'Connection.php';

      $id = $_REQUEST['participant_id'];

      $sql = "delete from participants_tb where id=$id";

      $result = $con->query($sql);

      if($result){
         echo 'Data delete succesfully..';
        header('location:DisplayParticipants.php');
       }
       else
         echo 'Delete Failed...';        
    ?>
  