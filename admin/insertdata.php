<?php
include("dbcon.php");
if(isset($_POST['submit']))
{
$type=$_POST['type'];
$capacity=$_POST['capacity'];
$rent=$_POST['rent'];
$sql="INSERT INTO `room`(`type`, `capacity`, `rent_per_day`) VALUES ('$type','$capacity','$rent')";
$run=mysqli_query($con,$sql);
if($run==TRUE)
{
	?>
	<script type="text/javascript">
		alert("Room Add Successfully");
		window.location.href="index1.php";
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