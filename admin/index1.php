<?php
include("dbcon.php");
$sql="SELECT COUNT(no) AS total FROM messages WHERE status='No Reply' ";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotal Management System</title>
  <link rel="icon" type="img/icon" href="img/LOGO.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script></head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a href="index1.php" class="navbar-brand"><img src="img/g2.jpg" style="width: 70px;height: 70;border-radius: 10px;">&nbsp;&nbsp;&nbsp;TAJ PALACE</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaraid">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbaraid">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item"><a class="nav-link active" href="index1.php">Add New Room</a></li>
      <li class="nav-item"><a class="nav-link" href="booked.php">Booked Room List</a></li>
      <li class="nav-item"><a class="nav-link" href="unbooked.php">UnBooked Room List</a></li>
      <li class="nav-item"><a class="nav-link" href="modify_record.php">Modify a Room Record</a></li>
      <li class="nav-item"><a class="nav-link" href="search_room.php">Search a Room</a></li>
      <li class="nav-item"><a class="nav-link" href="messages.php">Messages&nbsp;<span class="badge badge-warning"><?php echo $data['total'];?></span></a></li>
      <li class="nav-item text-center"><a href="admindesign.php" class="btn nav-link">Admin<img src="img/admn.png" style="width: 20px;height: 20px;"></a>
      </li>
   </ul>
  </div>
  </nav>
  <header id="head" style="width: 100%;height: 100vh;">
    <br><br><br><br>
    <div class="container">
      <form method="post" action="insertdata.php">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
          <div class="form-group">
            <label style="font-size: 25px;">Enter Room Type:</label>
            <select class="form-control col-md-12" name="type">
              <option>Choose Room Type</option>
              <option value="AC">AC</option>
              <option value="Non AC">Non AC</option>
              <option value="AC Furnished">AC Furnished</option>
              <option value="Local">Local</option>
            </select>
          </div>
          <div class="form-group">
            <label style="font-size: 23px;">Capacity of Room</label>
            <select class="form-control col-md-12" name="capacity">
              <option>Choose Members</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="4">4</option>
              <option value="Family">Family</option>
            </select>
          </div>
          <div class="form-group">
            <label style="font-size: 21px;">Rent Per Day</label>
            <input type="text" name="rent" class="form-control col-md-12">
          </div>
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Add Room" style="font-size: 20px;">
          </div>
          </div>
        </form>
    </div>
  </header> 
  <style type="text/css">
    #head
    {
      background-image: url(img/bed.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .navbar
    {
      background-color: rgba(0,0,0,0.7);
    }
  </style> 
  </body>
</html>

















