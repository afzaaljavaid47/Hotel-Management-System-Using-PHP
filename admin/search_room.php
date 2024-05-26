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
      <li class="nav-item"><a class="nav-link active" href="search_room.php">Search a Room</a></li>
      <li class="nav-item"><a class="nav-link" href="messages.php">Messages&nbsp;<span class="badge badge-warning"><?php echo $data['total'];?></span></a></li>
      <li class="nav-item text-center"><a href="admindesign.php" class="btn nav-link">Admin<img src="img/admn.png" style="width: 20px;height: 20px;"></a>
      </li>
   </ul>
  </div>
  </nav>
  <header id="head" style="width: 100%;height: 100vh;">
    <br><br><br><br><br>
    <div class="form-group container">
      <label style="font-size: 25px;">Enter Data to Search :</label>
      <input type="text" name="tex" id="sea" class="form-control">
      <br>
    <div id="placedata"></div>
  </div>
 </header>
 <script type="text/javascript">
   $(document).ready(function(){
    $('#sea').keyup(function(){
      var dataupper=$('#sea').val();
      $.ajax({
         url:'search_data.php',
         type:'post',
         data:{datago:dataupper},
         success:function(data)
         {
          $('#placedata').html(data);
         }
      });
    });
   });
 </script> 
  <style type="text/css">
    #head
    {
      background-image: url(img/b1.jpg);
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