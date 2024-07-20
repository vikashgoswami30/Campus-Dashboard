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
<body>
  <?php include 'Dashheader.php';?>

<div class="container bg-warning mb-5">
    <div class="container p-5">
      <h2>Welcome:<?php echo $_SESSION['username'];?></h2>
      <h2>Hello. Here in this dashboard </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse a natus cumque, laudantium placeat itaque in dicta suscipit laborum sed! Consectetur rem asperiores, dolore quia provident incidunt quisquam reprehenderit totam.
      </p>
      <h3 class="bg-danger">Operation you can handle here are as follows </h3>
      <ul>
        <li>Add Participants</li>
        <li>Display Participants</li>
        <li>Update Participants</li>
        <li>Delete Participants</li>
        <li>View Participants</li>
      </ul>

    </div>
</div>

<?php include 'Dashfooter.php'; ?>

</body>
</html>