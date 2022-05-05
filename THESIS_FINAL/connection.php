
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<head>
 
	<title></title>
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
			text-align: center;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<h4 class="w3-xxlarge w3-center">

			<b>Connection</b>

		</h4>
<div class="container w3-center">

		<h4 class="w3-xxlarge w3-center">

		</h4>
			
  			<div class="w3-padding w3-hover-opacity-on">

	    		
	    		<a href="dashboard.php" class="w3-button"><button style="background-color: rgb(240,240,240)">DATA</button>
	    		</a>
	    		<a href="automation.php" class="w3-button"><button style="background-color: rgb(240,240,240)">AUTOMATION CONTROL</button>
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
$hostt = "localhost";
$userr = "u678040556_richganguser";
$passs = "richgangroot";
$dbname = "u678040556_richgangdb";
$dbport = "3306";
$dbnames = "mysql";

	$mysqli = new mysqli($hostt, $userr, $passs, $dbname) or die(mysqlie_error($mysqli));
	$result1 = $mysqli->query("SELECT * FROM node_status LIMIT 1");
	$result2 = $mysqli->query("SELECT * FROM node2_status LIMIT 1");
	$result3 = $mysqli->query("SELECT * FROM node3_status LIMIT 1");

?>



	<div class="row justify-content-center">
		<table class="table">


			<thead>

				<tr>

					<th>Node</th>
					<th>Status</th>

				</tr>

			</thead>

	<?php 
	
		while ($row = $result1->fetch_assoc()): 

	?>
		<tr>
			<td><?php echo $row['node']; ?></td>
			<td><?php 
			if($row['status']==1)
			{
			echo "<span id=".$row['id']." class='label label-success'>On</span>";
			}
			else
			{	
			echo "<span id=".$row['id']." class='label label-danger'>Off</span>";
			}
				?></td>
		</tr>

	<?php 

		endwhile; 

	?>	

	</div>

	<div class="row justify-content-center">


			<thead>

				<tr>
					
					<th>Node</th>
					<th>Status</th>

				</tr>

			</thead>
	<?php 
	
		while ($row = $result2->fetch_assoc()): 

	?>
		<tr>
			<td><?php echo $row['node']; ?></td>
			<td><?php 
			if($row['status']==1)
			{
			echo "<span id=".$row['id']." class='label label-success'>On</span>";
			}
			else
			{	
			echo "<span id=".$row['id']." class='label label-danger'>Off</span>";
			}
				?></td>
		</tr>

	<?php 

		endwhile; 

	?>	

	</div>

	<div class="row justify-content-center">


			<thead>

				<tr>
					
					<th>Node</th>
					<th>Status</th>


				</tr>

			</thead>
	<?php 
	
		while ($row = $result3->fetch_assoc()): 

	?>
		<tr>
			<td><?php echo $row['node']; ?></td>
			<td><?php 
			if($row['status']==1)
			{
			echo "<span id=".$row['id']." class='label label-success'>On</span>";
			}
			else
			{	
			echo "<span id=".$row['id']." class='label label-danger'>Off</span>";
			}
				?></td>
		</tr>

	<?php 

		endwhile; 

	?>	

	</div>

	


</table>
</body>
</html>




