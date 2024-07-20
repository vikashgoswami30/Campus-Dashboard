<!DOCTYPE html>
<html lang="en">

<head>
  <title>ABESIT EVENT DASHBOARD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid slider mt-2">
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

  <div class="container" id="about">
    <h1 class="text-center m-4" id="heading">About Us</h1>
    <div class="row">
      <div class="col-md-4">
        <img src="pic/heck5.jpg" alt="" style='width:90%'>
      </div>
      <div class="col-md-8">
        <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quo. Molestias magni animi consequatur facilis. Cum officiis vitae dolorem, laborum dolor repellat debitis in numquam, quae fuga sed asperiores nisi? Corrupti, cupiditate earum, soluta vitae quam similique officiis doloribus deserunt omnis, quo veritatis ullam at ipsam qui neque quis harum id dicta. Corporis sequi at earum fuga ullam, ipsa laborum odio dolorem rem dolor, consequatur, quibusdam veritatis cum maiores libero officia! Eligendi est consequuntur commodi recusandae eos laudantium assumenda natus, aut error perferendis. Beatae eveniet deserunt dolor ut neque laborum, atque voluptatum hic ratione. Beatae, facere praesentium tempora error quas amet, eveniet ad sint nihil libero necessitatibus quis iste blanditiis illum suscipit nesciunt dolores accusamus, nobis voluptatum est impedit officiis aut? Error, saepe optio omnis repudiandae, debitis, recusandae dolore numquam autem alias eligendi ex molestiae eveniet blanditiis impedit minima quod architecto reprehenderit nam quam ipsam doloribus ipsum. Impedit, ab voluptates?</p>
      </div>
    </div>
    <hr class="border border-dark border-2 opacity-50">
  </div>

  <div class="container" id="event">
    <h1 class="text-center m-4" id="heading">My Events</h1>
    <div class="row">

      <?php
         include('Connection.php');

         $sql = 'select * from events_tb';
         $result = $con->query($sql);
 
         while($row = $result->fetch_assoc()){
          $id= $row['event_id'];
            echo '
      <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
          <img src=' . $row['event_image'] .' class="card-img-top" alt="..."
          style="width:100%; height:150px;">
          <div class="card-body">
            <h5 class="card-title">'. $row['event_name'].'</h5>
            <p class="card-text">'. substr($row['event_desc'],0,65)   .'</p>
            <a href="Event_description.php?event_id='.$id.'" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>';

         }

      ?>    
    </div>
    <hr class="border border-dark border-2 opacity-50">
  </div>

  <div class="container" id="contact">
    <h1 class="text-center m-4" id="heading">Contact Us</h1>
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.8715650334752!2d77.44511047550083!3d28.63361117566426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee3d4e3485ed%3A0xe0fe1689b57c7d2e!2sABESIT%20GROUP%20OF%20INSTITUTIONS!5e0!3m2!1sen!2sin!4v1719807647099!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> 
    <hr class="border border-dark border-2 opacity-50">
  </div>
 
  <?php include 'footer.php'; ?>
</body>

</html>