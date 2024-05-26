<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>
<?php
if(isset($_POST['submitmess']))
{
  $re=$_POST['rep'];
  $ide=$_POST['id'];
  include("dbcon.php");$sql1="UPDATE `messages` SET `reply`='$re',`status`='Reply' WHERE `no`='$ide'";
  $run1=mysqli_query($con,$sql1);
  if($run1==TRUE)
{
  ?>
  <script type="text/javascript">
    alert("Message Reply Successfully");
    window.location.href="messages.php"
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
