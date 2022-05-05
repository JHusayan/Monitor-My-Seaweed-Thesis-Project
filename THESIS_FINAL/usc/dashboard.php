<!DOCTYPE html>
<html>
<!-- LINKS -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
    <meta http-equiv="refresh" content="10">
	<title>TABLE WITH DATABASE</title>
	<style type="text/css">
		table
		{

			border-collapse: collapse;
			width: 100%;
			color: #1f5380;
			font-family: monospace;
			font-size: 25px;
			text-align: center;

		}
		th {
			background-color: rgb(47,45,47);;
			color: white;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<h4 class="w3-xxlarge w3-center">

			<b>Data 	Dashboard</b>

		</h4>
<!-- <div class="w3-center w3-padding w3-hover-opacity-on">
<a href="home.php" style="width:10%;" class="" ><button style="background-color: rgb(240,240,240)">Home</button></a>
</div> -->
<div class="container w3-center">

		<h4 class="w3-xxlarge w3-center">

	
		</h4>
			
  			<div class="w3-padding w3-hover-opacity-on">

	    		<!-- <a href="dashboard.php" style="width:10%" class="w3-button"><button style="background-color: rgb(240,240,240)">DATA</button>
	    		</a> -->
	    		<a href="automation.php" class="w3-button"><button style="background-color: rgb(240,240,240)">AUTOMATION CONTROL</button>
	    		</a>
	    		<a href="connection.php" class="w3-button"><button style="background-color: rgb(240,240,240)">CONNECTION</button>
	    		</a>
	    		<a href="graph.php" class="w3-button"><button style="background-color: rgb(240,240,240)">GRAPH</button>
	    		</a>
	    		<a href="logout.php" class="w3-button"><button style="background-color: rgb(240,240,240)">LOGOUT</button>
	    		</a>

  			</div>
	</div>
<body>


<table>





	
	<?php
		require 'dashboardcrud.php'; 
		if(isset($_SESSION['message'])): ?>

	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php
		echo $_SESSION['message'];
		unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


	<?php


// $hostt = "localhost";
// $userr = "id12735165_test123";
// $passs = "testroot";
// $dbname = "id12735165_test";
// $dbport = "3306";
// $dbnames = "mysql";

$hostt = "localhost";
$userr = "u678040556_richganguser";
$passs = "richgangroot";
$dbname = "u678040556_richgangdb";
$dbport = "3306";
$dbnames = "mysql";

// $hostt = "127.0.0.1";
// $userr = "root";
// $passs = "";
// $dbname = "datafinal";
// $dbport = "3306";
// $dbnames = "mysql";

	$mysqli = new mysqli($hostt, $userr, $passs, $dbname) or die(mysqlie_error($mysqli));

	$result = $mysqli->query("SELECT * FROM datafin LIMIT 6");
		//pre_r($result);

	?>



	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Parameter</th>
					<th>Data</th>
					<th>Optimal Value</th>
					<th>Date and Time</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
	<?php 
	
	while ($row = $result->fetch_assoc()): ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['parameterfin']; ?></td>
			<td><?php echo $row['datafin']; ?></td>
			<td><?php echo $row['optimalfin']; ?></td>
			<td><?php echo $row['timefin']; ?></td>
			<td>
				<a href="dashboard.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">CHANGE OPTIMAL
				</a>
				<a href="dashboard.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a>
			</td>
		</tr>
	<?php endwhile; ?>

	</div>

 <?php

	while($row = $result->fetch_assoc()) : ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['parameterfin']; ?></td>
			<td><?php echo $row['datafin']; ?></td>
			<td><?php echo $row['optimalfin']; ?></td>
			<td><?php echo $row['timefin']; ?></td>

			
		</tr>

<?php endwhile; ?>
	<?php
		function pre_r($array)
		{
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	?>

	<div class="row justify-content-center">

		<form action="dashboardcrud.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label>New Parameter</label>	
				<input type="text" name="parameterfin" class="form-control" value="<?php echo $parameterfin;?>" placeholder="Enter parameter">
		    </div>
		    <div class="form-group">
				<label>Optimal Level</label>	
				<input type="number" name="optimalfin" class="form-control" value="<?php echo $optimalfin;?>" placeholder="Enter optimal value">
			</div>
				<div>
				<br>
				<?php 
				if($update == true):

					?>
             
					<button type="submit" class="btn btn-info" name="update">UPDATE</button>
				</div>
				<?php 
				else: ?>
				<button type="submit" class="btn btn-primary" name="save">SAVE</button>
	</div>
			<?php endif; ?>



</table>	
</body>
</html>
 