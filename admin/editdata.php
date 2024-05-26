<?php
$id=$_GET['id'];
include("dbcon.php");
$sql="SELECT * FROM `room` WHERE `room_id`='$id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<?php
include("dbcon.php");
$sql1="SELECT COUNT(no) AS total FROM messages WHERE status='No Reply' ";
$run1=mysqli_query($con,$sql1);
$data1=mysqli_fetch_assoc($run1);
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
   <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
    <a href="index1.php" class="navbar-brand">TAJ PALACE</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaraid">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbaraid">
    <ul class="navbar-nav ml-auto text-center pull-right">
      <li class="nav-item"><a class="nav-link active" href="index1.php">Add New Room</a></li>
      <li class="nav-item"><a class="nav-link" href="booked.php">Booked Room List</a></li>
      <li class="nav-item"><a class="nav-link" href="unbooked.php">UnBooked Room List</a></li>
      <li class="nav-item"><a class="nav-link" href="modify_record.php">Modify a Room Record</a></li>
      <li class="nav-item"><a class="nav-link" href="search_room.php">Search a Room</a></li>
      <li class="nav-item"><a class="nav-link" href="messages.php">Messages&nbsp;<span class="badge badge-warning"><?php echo $data1['total'];?></span></a></li>
      <li class="nav-item text-center"><a href="admindesign.php" class="btn nav-link">Admin<img src="img/admn.png" style="width: 20px;height: 20px;"></a>
      </li>
   </ul>
  </div>
  </nav>
	<header id="head" style="width: 100%;height: 100vh;">
	<div class="container">
		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<div class="col-md-5 ml-auto" style="margin-top: 50px;">
      <br><br><br>
		<div class="panel panel-primary">
			<div class="panel-heading"><h3 class="text-center" style="letter-spacing: 2px;">Update Data</h3></div>
		<form method="post">
        <div class="panel-body">
         
            <div class="form-group">
            <label style="font-size: 18px;letter-spacing: 2px;">Room Type:</label>
            <select class="form-control col-md-12" name="typ">
              <option value="<?php echo $data['type'];?>"><?php echo $data['type'];?></option>
              <option value="AC">AC</option>
              <option value="Non AC">Non AC</option>
              <option value="AC Furnished">AC Furnished</option>
              <option value="Local">Local</option>
            </select>
           </div><br><br>
          <div class="form-group">
            <label style="font-size: 18px;letter-spacing: 2px;">Capacity of Room</label>
            <select class="form-control col-md-12" name="cap">
              <option value="<?php echo $data['capacity'];?>"><?php echo $data['capacity'];?></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="4">4</option>
              <option value="Family">Family</option>
            </select>
          </div><br><br>
            <div class="form-group">
            <label style="font-size: 18px;letter-spacing: 2px;">Rent Per Day</label>
            <input type="text" name="ren" class="form-control col-md-12" value="<?php echo $data['rent_per_day'] ?>">
          </div><br>
        </div>
        <div class="panel-footer" style="margin-bottom: 0;">
        <input type="submit" name="submitedit" class="btn btn-danger btn-block" value="Update" style="font-size: 20px;">
        </div>
        </form>
        </div>
    </div>
    </div>
</div>
</header> 
  <style type="text/css">
    #head
    {
      background-image: url(img/bms.jpg);
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
<?php
if(isset($_POST['submitedit']))
{
	$rt=$_POST['typ'];
	$c=$_POST['cap'];
	$r=$_POST['ren'];
include("dbcon.php");$sql="UPDATE `room` SET `type`='$rt',`capacity`='$c',`rent_per_day`='$r' WHERE `room_id`='$id'";
$run=mysqli_query($con,$sql);
if($run==TRUE)
{
	?>
	<script type="text/javascript">
		window.location.href="modify_record.php";
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