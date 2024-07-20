<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="container">
    <h1 class="text-center">Login Page</h1>
    <?php
      $success = 0;
      $invalid = 0;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      include('Connection.php'); // include 'Connection.php';

      $username = $_REQUEST['uname'];
      $password = $_REQUEST['password'];
   
$sql =  "select * from registration where username='$username' and password='$password'";
$result = $con->query($sql);

if(mysqli_num_rows($result)>0){
 // echo 'Congrats Login Success..';

  $success= 1;
 session_start();
 $_SESSION['username'] = $username;

 header('location:Dashboard/Event_Dashboard.php');


}
else{
//  echo 'Login faild due to invalid User Name & Password.. Try Again..';
  $invalid = 1;
}       

}
            ?>

   <?php
      if($success)
      echo '<div class="alert alert-info" role="alert">
        <strong>Congrats</strong> Login Success...</div>';
      if($invalid)
        echo '<div class="alert alert-danger" role="alert">
          <strong>Sorry</strong> Login Failed due to invalid credentails... try again...</div>';
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
      <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
    <p> Not Register Yet? Kindly <a href="Registration.php">register here</a> </p>


  </div>
  <?php include 'footer.php'; ?>


</body>

</html>