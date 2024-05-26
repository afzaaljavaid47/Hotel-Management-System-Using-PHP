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
  </head>
<body style="background-color: wheat;">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(0,0,0,0.6);">
    <div class="container">
    <a href="index.php" class="navbar-brand"><img src="img/g2.jpg" style="width: 70px;height: 70;border-radius: 10px;">&nbsp;&nbsp;&nbsp;TAJ PALACE</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbaraid">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbaraid">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
      <li class="nav-item"><a class="nav-link" href="#services">SERVICES</a></li>
      <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
      <li class="nav-item"><a class="nav-link active" href="book_a_room.php">BOOK A ROOM</a></li>
   </ul>
  </div>
  </div>
  </nav>
  <br><br><br><br>
  <header>
    <form method="post">
      <div class="row container-fluid">
       <div class="col-md-4"></div>
       <div class="col-md-4">
        <p style="font-size: 23px;">Enter Room Type:</p>
        <select class="form-control" name="type">
          <option>Choose Room Type</option>
          <?php
          include("dbcon.php");
          $sql="SELECT DISTINCT type FROM `room`";
          $run=mysqli_query($con,$sql);
          while($data=mysqli_fetch_assoc($run))
          {
            ?>
            <option value="<?php echo $data['type'];?>"><?php echo $data['type'];?></option>
            <?php
          }
          ?>
        </select><br>
        <p style="font-size: 23px;">Enter Room Capacity:</p>
        <select class="form-control" name="capacity">
          <option>Choose Room Capacity</option>
          <?php
          $sql="SELECT DISTINCT `capacity` FROM `room`";
          $run=mysqli_query($con,$sql);
          while($data=mysqli_fetch_assoc($run))
          {
            ?>
            <option value="<?php echo $data['capacity'];?>"><?php echo $data['capacity'];?></option>
            <?php
          }
          ?>
        </select><br>  
         <input type="submit" name="submit" class="btn btn-primary btn-block" value="Check Availability" style="font-size: 23px;">  
       </div>
       <div class="col-md-4"></div>       
    </form>
  </header> 
<?php

if(isset($_POST['submit']))
{
  $t=$_POST['type'];
  $c=$_POST['capacity'];
  ?>
  <br>
  <div class="container">
    <form method="get">
  <table class="table table-striped">
    <thead style="background-color: rgba(0,0,0,0.5);color: white;font-size: 20px;letter-spacing: 2px;">
      <tr>
        <th class="text-center">Room No</th>
        <th class="text-center">Room Type</th>
        <th class="text-center">Room Capacity</th>
        <th class="text-center">Room Rent Per Day</th>
        <th class="text-center">Room Status</th>
        <th class="text-center">Book</th>
      </tr>
    </thead>
  <?php
  $sql="SELECT * FROM `room` WHERE `type`='$t' and `capacity`='$c' AND `status`='unbook'";
  $run=mysqli_query($con,$sql);
  while($data=mysqli_fetch_assoc($run))
  {
    ?>
    <tbody style="background-color: rgba(0,0,0,0.1);">
      <tr>
        <td class="text-center" style="padding-top: 20px;"><?php echo $data['room_id'];?></td>
        <td class="text-center" style="padding-top: 20px;"><?php echo $data['type'];?></td>
        <td class="text-center" style="padding-top: 20px;"><?php echo $data['capacity'];?></td>
        <td class="text-center" style="padding-top: 20px;"><?php echo $data['rent_per_day'];?></td>
        <td class="text-center" style="padding-top: 20px;"><?php echo $data['status'];?></td>
        <td class="text-center"><a class="btn btn-primary" href="goto.php?sid=<?php echo $data['room_id'];?>" style="font-size: 20px;">Book</a></td>
      </tr>
    <?php
  }
}
?>
</tbody>
</table>
</form>
</div>
</div>
</header>
</body>
</html>