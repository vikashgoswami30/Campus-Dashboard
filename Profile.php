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
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

</head>

<body style="background-image: linear-gradient(orange, white, green);">
  <?php include 'Dashheader.php';
  //  echo 'Welcome Mr. ' . $_SESSION['username'];

  ?>

  <div class="container w-50 mb-4">
    <h2 class="text-center">User Profile</h2>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Key</th>
          <th scope="col">Value</th>
        </tr>
      </thead>
      <tbody>
        <?php
    
          include('../Connection.php'); // include 'Connection.php';

          $uname = $_SESSION['username'];

          $sql = "select * from registration where username='$uname'";

          $result = $con->query($sql);

          while($row = $result->fetch_assoc()){
        
          $id       = $row['id'];
          $uname     = $row['username'];
          $password  = $row['password'];
          $email   = $row['email'];
          $age   = $row['age'];
          
          echo '
        <tr>
          <th scope="row">User Id</th>
          <td>'. $id .'</td>
        </tr>  
        <tr>
          <th scope="row">User Name</th>
          <td>'. $uname .'</td>
        </tr>  
        <tr>
          <th scope="row">Password</th>
          <td>'. $password .'</td>
        </tr>  
        <tr>
          <th scope="row">Email Id</th>
          <td>'. $email .'</td>
        </tr>  
        <tr>
          <th scope="row">User Age</th>
          <td>'. $age .'</td>
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