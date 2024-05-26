<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Data</title>
  <link rel="icon" type="img/icon" href="img/LOGO.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script></head>
<body>
		<?php
		if(isset($_POST['datago']) && !empty($_POST['datago']))
		{
			?>
			<table class="table table-striped">
		<thead class="bg-light" style="color: black;">
			<tr>
				<th class="text-center">Room id</th>
				<th class="text-center">Room Type</th>
				<th class="text-center">Room Capacity</th>
				<th class="text-center">Rent Per Day</th>
				<th class="text-center">Status</th>
			</tr>
		</thead>
	    	<?php
			$data=$_POST['datago'];
			include("dbcon.php");
			$sql="SELECT * FROM `room` WHERE `room_id` LIKE '%$data%' OR `type` LIKE '%$data%' OR `capacity` LIKE '%$data%' OR `rent_per_day` LIKE '%$data%' OR `status` LIKE '%$data%'";
			$run=mysqli_query($con,$sql);
			if(mysqli_num_rows($run)>0)
			{
				while($data=mysqli_fetch_assoc($run))
				{
					?>
					<tbody style="background-color:#D5DDD8;color:black;">
						<tr>
							<td class="text-center"><?php echo $data['room_id'];?></td>
							<td class="text-center"><?php echo $data['type'];?></td>
							<td class="text-center"><?php echo $data['capacity'];?></td>
							<td class="text-center"><?php echo $data['rent_per_day'];?></td>
							<td class="text-center"><?php echo $data['status'];?></td>
						</tr>
					<?php
				}
			}
			?>
			</tbody>
			</table>
			</body>
			</html>
			<?php
		}
		?>