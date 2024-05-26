<?php

$id=$_GET['sid'];
include("dbcon.php");
$sql="SELECT * FROM `bookedroom` WHERE `room_id`='$id'";
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
<body style="background-color: wheat;">
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgba(0,0,0,0.6);">
    <div class="container">
    <a href="index.php" class="navbar-brand">TAJ PALACE</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaraid">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbaraid">
    <ul class="navbar-nav ml-auto text-center pull-right">
      <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
      <li class="nav-item"><a class="nav-link" href="#services">SERVICES</a></li>
      <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
      <li class="nav-item"><a class="nav-link active" href="book_a_room.php">BOOK A ROOM</a></li>
   </ul>
  </div>
  </div>
  </nav>
  <div class="container">
  <form method="post">
  <div class="row">
  	<div class="col-md-1"></div>
  	<div class="col-md-5">
  		<div class="panel panel-primary">
  			<div class="panel-heading text-center" style="font-size: 22px;letter-spacing: 2px;">Room Details</div>
  			<div class="panel-body">
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Status</label>
  				<input type="text" placeholder="Room is Available (Unbooked)" disabled="" class="form-control" style="font-size: 18px;"  value="<?php echo $data['status'];?>">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room No.</label>
  				<input type="text" disabled="" name="no" value="<?php echo $data['room_id'];?>" class="form-control" style="font-size: 18px;">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Type</label>
  				<input type="text" disabled="" name="ty" value="<?php echo $data['type'];?>" class="form-control" style="font-size: 18px;">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Capacity</label>
  				<input type="text" disabled="" name="ca" value="<?php echo $data['capacity'];?>" class="form-control" style="font-size: 18px;">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Rent Per Day</label>
  				<input type="text" disabled="" name="re" value="<?php echo $data['rent_per_day'];?>" class="form-control" style="font-size: 18px;">
  			</div>
            </div>
        </div>
    </div>
    	<div class="col-md-5">
    	<div class="panel panel-primary">
    		<div class="panel-heading text-center" style="font-size: 22px;letter-spacing: 2px;">Tourist Detail</div>
    		<div class="panel-body"><div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Your Name</label>
  				<input type="text" disabled="" name="na" class="form-control" style="font-size: 18px;" value="<?php echo $data['name'];?>">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Your Address</label>
  				<textarea disabled="" name="ad" class="form-control" style="font-size: 18px;"><?php echo $data['address'];?></textarea>
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Contact No.</label><br>
  				<input id="phone" disabled="" name="phone" type="tel" class="form-control" style="font-size: 18px;" value="<?php echo $data['contact'];?>">
  			</div>  			
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Enterance Date</label>
  				<input type="date" disabled="" name="ed" class="form-control" style="font-size: 18px;" value="<?php echo $data['enterence'];?>">
  			</div>
  			<div class="form-group" style="padding-bottom: 0;">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Departure Date</label>
  				<input type="date" disabled="" name="dd" class="form-control" style="font-size: 18px;" value="<?php echo $data['departure'];?>">
  			</div>
  		</div>
    		<div class="panel-footer"><a href="booked.php" class="btn btn-primary btn-block" style="font-size: 22px;letter-spacing: 2px;">OK</a></div>  			
  		</div>
  <div class="col-md-1"></div>
</div>
</form>
</div>
</body>
</html>
