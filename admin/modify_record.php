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
   <header id="head" style="width: 100%;height: 100vh;"><br><br><br><br>
    <div class="container">
    <form method="get">
    <table class="table table-striped table-responsive-md table-bordered">
      <thead class="bg-light">
        <tr>
          <th class="text-center" style="font-size: 20px;padding-top: 8px;">Room Id</th>
          <th class="text-center" style="font-size: 20px;padding-top: 8px;">Room Type</th>
          <th class="text-center" style="font-size: 20px;padding-top: 8px;">Room Capacity</th>
          <th class="text-center" style="font-size: 20px;padding-top: 8px;">Rent Per Day</th>
          <th class="text-center" style="font-size: 20px;padding-top: 8px;">Room Status</th>
          <th class="text-center" style="font-size: 20px;padding-top: 8px;">Edit</th>
          <th class="text-center" style="font-size: 20px;padding-top: 8px;">Delete</th>
        </tr>
      </thead>
  <style type="text/css">
    #head
    {
      background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/bms.jpg);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .navbar
    {
      background-color: rgba(0,0,0,0.5);
    }
  </style> 

<?php
include("dbcon.php");
$sql="SELECT * FROM `room` WHERE `status`='unbook'";
$run=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($run))
{
  ?>
  <tbody style="background-color: rgba(0,0,0,0.2);color:white;font-size: 20px;font-weight: bold;letter-spacing: 2px;">
  <tr>
    <td class="text-center"><?php echo $data['room_id'];?></td>
    <td class="text-center"><?php echo $data['type'];?></td>
    <td class="text-center"><?php echo $data['capacity'];?></td>
    <td class="text-center"><?php echo $data['rent_per_day'];?></td>
    <td class="text-center"><?php echo $data['status'];?></td>
    <td class="text-center"><a href="editdata.php?id=<?php echo $data['room_id']; ?>" class="btn btn-primary"><img src="img/edit.png"></a></td>
    <td class="text-center"><a href="delete_data.php?sid=<?php echo $data['room_id']; ?>" class="btn btn-primary"><img src="img/delete.png"></a></td>
  </tr>
  <?php
}
?>
</div>
</header> 
</tbody>
</table>
</form>














