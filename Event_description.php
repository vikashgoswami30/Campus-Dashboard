<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
include('Connection.php'); // include 'Connection.php';

$event_id = $_REQUEST['event_id'];
$sql =  "select * from events_tb where event_id=$event_id";
$result = $con->query($sql);

$row = $result->fetch_assoc();
//$event_id = $row['event_id'];
$event_name = $row['event_name'];
$event_desc = $row['event_desc'];
$event_image = $row['event_image'];

?>

  <?php include 'header.php'; ?>
  <div class="container-fluid bg-warning">
    <div class="container p-5">
      <h1><?php echo $event_name;?></h1>
      <p><?php echo  $event_desc;?></p>
      <a href="#desc" class="btn btn-dark">Read More</a>
    </div>
  </div>

  
  
  <div class="container-fluid slider mt-2" style="margin-bottom:30px">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="pic/heck3.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="pic/heck5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="pic/sih22.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h1 class="text-center">Event Description</h1>

</div>

<div class="container text-center bg-info">
  <h2><?php echo $event_name; ?></h2>
  <div class="row">
    <div class="col">
      <img src="pic/5.jpeg" alt="" class="w-100" style="border:10px solid red  ">
    </div>
  </div>

  <div class="row" id="desc">
    <div class="col">
      <h1> <?php  echo $event_name;?></h1>
      <img src="<?php echo $event_image; ?>" alt="" class="w-100" style="border:20px solid red">
      <p style="font-size:25px text-align:justify;" ><?php echo $event_desc;?>
       Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis deleniti fugiat corporis natus saepe explicabo animi accusantium nisi? Suscipit iusto reiciendis eaque aspernatur sed molestiae recusandae sequi ullam in. Earum.
     </p>
    </div>
  </div>
</div>
<h1 class="text-center">Thanks for your time </h1>


<?php include 'footer.php'; ?>
</body>

</html>