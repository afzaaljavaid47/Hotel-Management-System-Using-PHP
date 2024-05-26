<?php
$id=$_GET['sid'];
$con=mysqli_connect("localhost","root","","hotal");
$sql="SELECT * FROM `room` WHERE `room_id`='$id'";
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="css/demo.css">
  </head>
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
  				<input type="text" placeholder="Room is Available (Unbooked)" disabled="" class="form-control" style="font-size: 18px;">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room No.</label>
  				<input type="text" name="no" value="<?php echo $data['room_id'];?>" class="form-control" style="font-size: 18px;">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Type</label>
  				<input type="text" name="ty" value="<?php echo $data['type'];?>" class="form-control" style="font-size: 18px;">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Capacity</label>
  				<input type="text" name="ca" value="<?php echo $data['capacity'];?>" class="form-control" style="font-size: 18px;">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Rent Per Day</label>
  				<input type="text" name="re" value="<?php echo $data['rent_per_day'];?>" class="form-control" style="font-size: 18px;">
  			</div>
            </div>
        </div>
    </div>
    	<div class="col-md-5">
    	<div class="panel panel-primary">
    		<div class="panel-heading text-center" style="font-size: 22px;letter-spacing: 2px;">Tourist Detail</div>
    		<div class="panel-body"><div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Your Name</label>
  				<input type="text" name="na" placeholder="Enter Name Here......" class="form-control" style="font-size: 18px;" required="">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Your Address</label>
  				<input type="text" name="ad" placeholder="Enter Address Here......" class="form-control" style="font-size: 18px;" required="">
  			</div>
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Contact No.</label><br>
  				<input id="phone" name="phone" type="tel" class="form-control" style="font-size: 18px;" required="">
  			</div>  			
  			<div class="form-group">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Enterance Date</label>
  				<input type="date" name="ed" class="form-control" style="font-size: 18px;" required="">
  			</div>
  			<div class="form-group" style="padding-bottom: 0;">
  				<label style="font-size: 20px;letter-spacing: 1px;">Room Departure Date</label>
  				<input type="date" name="dd" class="form-control" style="font-size: 18px;" required="">
  			</div>
  		</div>
    		<div class="panel-footer"><input type="submit" name="submita" class="btn btn-primary btn-block" value="Book" style="font-size: 22px;letter-spacing: 2px;"></div>  			
  		</div>
  <div class="col-md-1"></div>
</div>
</form>
</div>
<script src="build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      utilsScript: "build/js/utils.js",
    });
  </script>
</body>
</html>
<?php
if(isset($_POST['submita']))
{
	$type=$_POST['ty'];
	$capacity=$_POST['ca'];
	$no=$_POST['no'];
	$rent=$_POST['re'];
	$name=$_POST['na'];
	$address=$_POST['ad'];
	$ph=$_POST['phone'];
	$ed=$_POST['ed'];
	$dd=$_POST['dd'];
	$con=mysqli_connect("localhost","root","","hotal");
	$sql="INSERT INTO `bookedroom`(`room_id`, `type`, `capacity`, `rent_per_day`, `name`, `address`, `contact`, `enterence`, `departure`) VALUES ('$no','$type','$capacity','$rent','$name','$address','$ph','$ed','$dd')";
	$sql1="UPDATE `room` SET `status`='book' WHERE `room_id`='$no'";
	$run1=mysqli_query($con,$sql1);
  if($run1==TRUE)
  {
    ?>
    <script type="text/javascript">
      alert("Room Booked Successfully");
      window.location.href="book_a_room.php";
    </script>
    <?php
  }
  else
  {
    ?>
    <script type="text/javascript">
      alert("Some Error! Please Try Again");
    </script>
    <?php
  }
  
	$run=mysqli_query($con,$sql);
	if($run==TRUE)
	{
		?>
		<script type="text/javascript">
			alert("Room Booked Successfully");
			window.location.href="book_a_room.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Some Error! Please Try Again");
		</script>
		<?php
	}
	
}
?>