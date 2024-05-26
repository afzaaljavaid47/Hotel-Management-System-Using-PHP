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
      <li class="nav-item"><a class="nav-link" href="index1.php">Add New Room</a></li>
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
    <ul class="nav-tabs nav nav-justified">
   <li class="nav-item"><a href="#record" class="nav-link active" data-toggle="tab" style="font-size: 22px;color:black;font-weight: bold;">Record</a></li>
   <li class="nav-item"><a href="#modify" class="nav-link" data-toggle="tab" style="font-size: 22px;color:black;font-weight: bold;">Modify</a></li>
  <li class="nav-item"><a href="index.php" class="nav-link" style="font-size: 22px;color:black;font-weight: bold;">Log Out</a></li>
    </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="record">
          <br><br><br>
          <table class="table table-striped table-responsive-md table-bordered">
            <thead style="color:white;background-color: rgba(0,0,0,0.6);font-size: 20px;letter-spacing: 2px;">
              <tr>
                <th class="text-center">First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">User Name</th>
                <th class="text-center">E-Mail</th>
                <th class="text-center">Password</th>
              </tr>
            </thead>
            <?php
      include("dbcon.php");
      $sql="SELECT * FROM `admin`";
      $run=mysqli_query($con,$sql);
      while($data=mysqli_fetch_assoc($run))
      {
        ?>
        <tbody style="color:white;background-color: rgba(0,0,0,0.3);font-size: 18px;letter-spacing: 2px;">
          <tr>
            <td class="text-center"><?php echo $data['first_name'];?></td>
            <td class="text-center"><?php echo $data['last_name'];?></td>
            <td class="text-center"><?php echo $data['username'];?></td>
            <td class="text-center"><?php echo $data['email'];?></td>
            <td class="text-center"><?php echo $data['password'];?></td>
          </tr>
        <?php
      }
       ?>
     </tbody>
      </table>
      </div>
      <div class="tab-pane" id="modify">
      <?php
      include("dbcon.php");
      $sql="SELECT * FROM `admin`";
      $run=mysqli_query($con,$sql);
      $data=mysqli_fetch_assoc($run);
      ?>
        <form method="post">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="form-group">
              <label style="font-size: 20px;color:white;">First Name</label>
            <input type="text" class="form-control" name="fn" value="<?php echo $data['first_name'];?>">
            </div>
            <div class="form-group">
              <label style="font-size: 20px;color:white;">Last Name</label>
            <input type="text" class="form-control" name="ln" value="<?php echo $data['last_name'];?>">
            </div>
            <div class="form-group">
              <label style="font-size: 20px;color:white;">User Name</label>
            <input type="text" class="form-control" name="un" value="<?php echo $data['username'];?>">
            </div>
            <div class="form-group">
              <label style="font-size: 20px;color:white;">E-Mail</label>
            <input type="email" class="form-control" name="em" value="<?php echo $data['email'];?>">
            </div>
            <div class="form-group">
              <label style="font-size: 20px;color:white;">Password</label>
            <input type="text" class="form-control" name="pa" value="<?php echo $data['password'];?>">
            </div>
            <input type="submit" name="submitupdate" value="Update" class="btn btn-primary btn-block" style="font-size: 20px;">
            </div>
<?php

if(isset($_POST['submitupdate']))
{
    $f=$_POST['fn'];
    $l=$_POST['ln'];
    $u=$_POST['un'];
    $e=$_POST['em'];
    $p=$_POST['pa'];
    include("dbcon.php");
$sql="UPDATE `admin` SET `first_name`='$f',`last_name`='$l',`username`='$u',`email`='$e',`password`='$p'";
$run=mysqli_query($con,$sql);
if($run==TRUE)
{
  ?>
  <script type="text/javascript">
    alert("Record Updated Successfully");
    window.location.href="admindesign.php";
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
            <div class="col-md-2"></div>

          
        </div>
        </form>
      </div>
      </div>
    </div>
  </header> 
  <style type="text/css">
    #head
    {
      background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(img/bed.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .navbar
    {
      background-color: rgba(0,0,0,0.5);
    }
  </style> 
  </body>
</html>

















