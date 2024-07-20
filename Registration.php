<!DOCTYPE html>
<html lang="en">

<head>
  <title>Registration Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'header.php'; ?>

  <div class="container">
    <h1 class="text-center">Registration Page</h1>
    <?php
      $success = 0;
      $user = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      include('Connection.php'); // include 'Connection.php';

      $username = $_REQUEST['uname'];
      $password = $_REQUEST['password'];
      $email    = $_REQUEST['email'];
      $age      = $_REQUEST['age'];

$sql =  "select * from registration where username='$username'";
$result = $con->query($sql);

if(mysqli_num_rows($result)>0){
  //echo 'User Name Already Exist..';
  $user = 1;
}
else{
      $sql = "insert into registration (username, password, email, age) values ('$username', '$password', '$email', $age)";

      $result = $con->query($sql);

     if($result){
      // echo 'Data Inserted succesfully..';
      $success = 1;
     }
     else
       echo 'Insert Failed...';

}
        

}
            ?>

   <?php
      if($user)
      echo '<div class="alert alert-danger" role="alert">
        <strong>Sorry</strong> User already exist...</div>';
      if($success)
        echo '<div class="alert alert-success" role="alert">
          <strong>Congrats</strong> User Registered Successfully...</div>';
   ?>

    <form method="post">
      <div class="mb-3">
        <label class="form-label">User Name</label>
        <input type="text" class="form-control" name="uname" placeholder="Enter Username here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter password here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Email Id here" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Age</label>
        <input type="number" class="form-control" name="age" placeholder="Enter Age here" required>
      </div>

      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
     <p> Have an Acoount? Kindly <a href="Login.php">login here</a> </p>

  </div>

  <?php include 'footer.php'; ?>

</body>

</html>