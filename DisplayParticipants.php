<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../Login.php');
}
// echo 'Welcome Mr. ' . $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Display Participants</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

</head>

<body style="background-image: linear-gradient(orange, white, green);">
  <?php include 'Dashheader.php';
  //  echo 'Welcome Mr. ' . $_SESSION['username'];

  ?>

  <div class="container w-100 mb-4">
    <h2 class="text-center">Display Participants</h2>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">College Name</th>
          <th scope="col">Branch</th>
          <th scope="col">Mobile</th>
          <th scope="col">City</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>






        <?php
    
          include('../Connection.php'); // include 'Connection.php';

          $sql = "select * from participants_tb";

          $result = $con->query($sql);

          while($row = $result->fetch_assoc()){
        
          $id       = $row['id'];
          $name     = $row['name'];
          $collegename  = $row['collegename'];
          $branch   = $row['branch'];
          $mobile   = $row['mobile'];
          $city     = $row['city'];
          $age      = $row['age'];
          $gender   = $row['gender'];
          
          switch($gender){
            case 'm': $gender='Male'; break;
            case 'f': $gender='Female'; break;
            case 'o': $gender='Other'; break;
          }

          echo '
        <tr>
          <th scope="row">'. $id .'</th>
          <td>'. $name .'</td>
          <td>'. $collegename .'</td>
          <td>'. $branch .'</td>
          <td>'. $mobile .'</td>
          <td>'. $city .'</td>
          <td>'. $age .'</td>
          <td>'. $gender .'</td>
          <td>
          <button class="btn btn-primary"> 
          <a href="Update.php?participant_id='.$id.'" class="text-white">Update</a> </button> 
          <button class="btn btn-primary"> 
          <a href="Delete.php?participant_id='.$id.'" class="text-white">Delete</a> </button> 
          
          </td>
        </tr>
          ';


        }    
        ?>

      </tbody>
    </table>
  </div>
  <?php include 'Dashfooter.php'; ?>
</body>

</html>