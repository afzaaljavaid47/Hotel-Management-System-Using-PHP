<?php
$id=$_GET['sid'];
include("dbcon.php");
$sql="DELETE FROM `room` WHERE `room_id`='$id'";
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
?>