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
<body style="background-color: rgba(0,0,0,0.5);">
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
      <li class="nav-item"><a class="nav-link active" href="messages.php">Messages&nbsp;<span class="badge badge-warning"><?php echo $data['total'];?></span></a></li>
      <li class="nav-item text-center"><a href="admindesign.php" class="btn nav-link">Admin<img src="img/admn.png" style="width: 20px;height: 20px;"></a>
      </li>
   </ul>
  </div>
  </nav>
  <header id="head" style="width: 100%;height: 100vh;">
    <br><br><br><br><br><br>
    <div class="container">
  <form method="POST">
   <table class="table table-striped table-hover table-bordered table-responsive-md bg-light">
      <thead class="bg-light">
        <tr style="letter-spacing: 2px;">
          <th class="text-center">No.</th>
          <th class="text-center">Name</th>
          <th class="text-center">E-mail</th>
          <th class="text-center">Message</th>
          <th class="text-center">Your Reply</th>
          <th class="text-center">Send</th>
        </tr>
      </thead>
  <style type="text/css">
    #head
    {
      background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)),url(img/b1.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .navbar
    {
      background-color: rgba(0,0,0,0.7);
    }
  </style> 
<?php
include("dbcon.php");
$sql="SELECT * FROM `messages` WHERE `status`='No Reply'";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run))
{
  ?>
  <tbody>
    <tr style="font-size: 18px;">
      <td class="text-center" style="padding-top: 30px;"><?php echo $data['no'];?></td>
      <input type="hidden" name="id" value="<?php echo $data['no'];?>">
      <td class="text-center" style="padding-top: 30px;"><?php echo $data['name'];?></td>
      <td class="text-center" style="padding-top: 30px;"><?php echo $data['email'];?></td>
      <td class="text-center"><textarea disabled=""><?php echo $data['message'];?></textarea></td>
      <td class="text-center"><textarea placeholder="Enter Your Reply Here" name="rep"></textarea></td>
      <td class="text-center" style="padding-top: 30px;"><input type="submit" name="submitmess" class="btn btn-primary" value="Send"></td>
    </tr>
  <?php
}
?>
</tbody>
</table>
</form>
</div>
<div class="container">
<table class="table table-striped table-hover table-bordered table-responsive-md bg-light">      <thead class="bg-light">
        <tr style="letter-spacing: 2px;">
          <th class="text-center">No.</th>
          <th class="text-center">Name</th>
          <th class="text-center">E-mail</th>
          <th class="text-center">Message</th>
          <th class="text-center">Your Reply</th>
          <th class="text-center">Status</th>
        </tr>
      </thead>
      <?php
      $con=mysqli_connect("localhost","root","","hotal");
      $sql="SELECT * FROM `messages` WHERE `status`='Reply'";
      $run=mysqli_query($con,$sql);
      while($data=mysqli_fetch_assoc($run))
      {
        ?>
        <tbody>
        <tr>
          <td class="text-center" style="padding-top: 30px;"><?php echo $data['no'];?></td>
          <td class="text-center" style="padding-top: 30px;"><?php echo $data['name'];?></td>
          <td class="text-center" style="padding-top: 30px;"><?php echo $data['email'];?></td>
          <td class="text-center">
           <textarea disabled=""><?php echo $data['message'];?></textarea></td>
          <td class="text-center"><textarea disabled=""><?php echo $data['reply'];?></textarea></td>
          <td class="text-center" style="padding-top: 30px;"><?php echo $data['status'];?></td>
        </tr>
        <?php
      }
      ?>
</tbody>
</table>
</div>
</header>
</body>
</html>

<?php
if(isset($_POST['submitmess']))
{
  $re=$_POST['rep'];
  $ide=$_POST['id'];
include("dbcon.php");
  $sql1="UPDATE `messages` SET `reply`='$re',`status`='Reply' WHERE `no`='$ide'";
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



