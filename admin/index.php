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
  <header id="head" style="width: 100%;height: 100vh;">
    <br><br>
  <div class="container">
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
    <div class="col-md-5 ml-auto" style="margin-top: 50px;">
    <div class="panel panel-primary">
     <h3 class="text-center panel-heading" style="letter-spacing: 2px;margin-top: 0px;padding: 10px;">Log In</h3>
    <form method="post">
        <div class="panel-body">
           <div class="form-group">
            <label style="font-size: 18px;letter-spacing: 2px;">User Name:</label>
           <input type="text" name="un" class="form-control">
           </div>
          <div class="form-group">
            <label style="font-size: 18px;letter-spacing: 2px;">Password</label>
            <input type="password" name="pa" class="form-control">
          </div>
        </div>
        <div class="panel-footer" style="margin-bottom: 0;">
        <input type="submit" name="submitlogin" class="btn btn-danger btn-block" value="Log In" style="font-size: 20px;">
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
if(isset($_POST['submitlogin']))
{
$fna=$_POST['un'];
$pas=$_POST['pa'];
include("dbcon.php");$sql="SELECT * FROM `admin` WHERE `username`='$fna' AND `password`='$pas'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
  if($fna==$data['username'] && $pas==$data['password'])
  {
  ?>
  <script type="text/javascript">
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