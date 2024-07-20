<?php
 session_start();
 if(!isset($_SESSION['username'])){
  header('location:../Login.php');
 }
// echo 'Welcome Mr. ' . $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

</head>
<body style="background-image: linear-gradient(orange, white, green);">
  <?php include 'Dashheader.php'; 
//  echo 'Welcome Mr. ' . $_SESSION['username'];

  ?>

<div class="container w-50 mb-4">
    <h2 class="text-center">Add Participants</h2>
    <?php
      $success = 0;
      $error = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      include('../Connection.php'); // include 'Connection.php';

      $name     = $_REQUEST['name'];
      $colname  = $_REQUEST['colname'];
      $branch   = $_REQUEST['branch'];
      $mobile   = $_REQUEST['mobile'];
      $city     = $_REQUEST['city'];
      $age      = $_REQUEST['age'];
      $gender   = $_REQUEST['gender'];
      

      $sql = "insert into participants_tb (name, collegename, branch, mobile, city, age, gender) values ('$name', '$colname', '$branch', '$mobile', '$city', $age, '$gender')";

      $result = $con->query($sql);

     if($result){
      // echo 'Data Inserted succesfully..';
      $success = 1;
     }
     else
          $error = 1;
       //echo 'Insert Failed...';
     }       
  ?>

   <?php
      if($error)
      echo '<div class="alert alert-danger" role="alert">
        <strong>Sorry</strong> Error has occured...</div>';
      if($success)
        echo '<div class="alert alert-success" role="alert">
          <strong>Congrats</strong> Participant Added Successfully...</div>';
   ?>

    <form method="post">
      <div class="mb-3">
        <label class="form-label">Participant Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">College Name</label>
        <input type="text" class="form-control" name="colname" placeholder="Enter college name here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Branch</label>
        <input type="text" class="form-control" name="branch" placeholder="Enter branch here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile No</label>
        <input type="number" class="form-control" name="mobile" placeholder="Enter mobile here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" class="form-control" name="city" placeholder="Enter city here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Age</label>
        <input type="number" class="form-control" name="age" placeholder="Enter Age here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Gender</label>
        <input type="radio" class="form-check-input" name="gender" value="m"> Male
        <input type="radio" class="form-check-input" name="gender" value="f"> Female
        <input type="radio" class="form-check-input" name="gender" value="o"> Others
      </div>
      
      <button type="submit" class="btn btn-primary">Add Participant</button>
    </form>

  </div>



<?php include 'Dashfooter.php'; ?>

</body>
</html>