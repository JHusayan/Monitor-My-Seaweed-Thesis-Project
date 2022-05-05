
<!DOCTYPE html>
<html>

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
    <meta http-equiv="refresh" content="10">
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
		th 
		{
			background-color: rgb(47,45,47);;
			color: white;
			text-align: center;
		}
		tr:nth-child(even) 
		{
		    background-color: #f2f2f2
		    
		}
		ul {
   list-style: none;
}

ul li:before {
   content: "•";
   font-size: 200%; /* or whatever */
   padding-right: 40px;
}
</style>
     
</head>
<h4 class="w3-xxlarge w3-center">

			<b>Automation Control</b>

		</h4>
<div class="container w3-center">

		<h4 class="w3-xxlarge w3-center">

	
		</h4>
			
  			<div class="w3-padding w3-hover-opacity-on">

	    		
	    		<a href="dashboard.php" class="w3-button"><button style="background-color: rgb(240,240,240)">DATA</button>
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
		require 'automationcrud.php'; 
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
// $dbname = "automfinal";
// $dbport = "3306";
// $dbnames = "mysql";

	$mysqli = new mysqli($hostt, $userr, $passs, $dbname) or die(mysqlie_error($mysqli));

	$result = $mysqli->query("SELECT * FROM automfin LIMIT 5");
	$results = $mysqli->query("SELECT * FROM user_status LIMIT 4");
		//pre_r($result);

	?>



	<div class="row justify-content-center">
		<table class="table">
			<thead>
				<tr>
					<th>Parameter</th>
					<th>Threshold High</th>
					<th>Threshold Low</th>
					<th>Change Threshold High</th>
					<th>Change Threshold Low</th>
				</tr>
			</thead>

<?php 
	
	while ($row = $result->fetch_assoc()): ?>
		<tr>
			<td><?php echo $row['parameterfin']; ?></td>
			<td><?php echo $row['threshhigh']; ?></td>
			<td><?php echo $row['threshlow']; ?></td>
			<td>
			    <form action="automationcrud.php" method="POST">
<a href="automation.php?edit=<?php echo $row['id']; ?>" class="btn btn-info w3-small">CHANGE
				</a>	<button type="submit" class="btn btn-info w3-small" name="update">UPDATE</button>
			    
				<input type="hidden" name="id" value="<?php echo $id; ?>">

				    
			    <input type="number" name="threshhigh" class="form-control" value="<?php echo $threshhigh;?>" placeholder="Enter new threshold">

			</td>
			<td>
			    
<a href="automation.php?edit=<?php echo $row['id']; ?>" class="btn btn-info w3-small">CHANGE
				</a>	<button type="submit" class="btn btn-info w3-small" name="update">UPDATE</button>
			    
				<input type="hidden" name="id" value="<?php echo $id; ?>">

				    
			    <input type="number" name="threshlow" class="form-control" value="<?php echo $threshlow;?>" placeholder="Enter new threshold">

			</td>
		</tr></form>
	<?php endwhile; ?>
	
	<?php 
	
	while ($row = $result->fetch_assoc()): ?>
		<tr>
			<td><?php echo $row['parameterfin']; ?></td>
			<td><?php echo $row['threshhigh']; ?></td>
			<td><?php echo $row['threshlow']; ?></td>
		</tr>
	<?php endwhile; ?>
	
</div>
	
	<div class="row justify-content-center">
			<thead>
				<tr>
					<th>Automation</th>
					<th>Status</th>
					<th>Action</th>	
				</tr>
			</thead>
<?php 

	while ($row = $results->fetch_assoc()): ?>
		<tr>

			<td><?php echo $row['automationc'];?></td>
			<td><ul><?php 
			if($row['status']==1)
			{
			echo "<li id=str".$row['id']." style='color:green'></li>";
			}
			else
			{
			echo "<li id=str".$row['id']." style='color:red'></li>";
			}
				?></ul>
			</td>
			<td>	
					<div class="row justify-content-center">
					<form action="change.php" method="POST">
					<button onclick="active_disactive_user(this.value,<?php echo $row['id'];?>)" value="1" class="btn btn-success">On</button>
					<button onclick="active_disactive_user(this.value,<?php echo $row['id'];?>)" value="0" class="btn btn-danger">Off</button>
			</td>
			</tr>
		<!-- put	?php ? here -->
			</form>



	<?php endwhile; ?>


</table>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function active_disactive_user(val, id)
{
$.ajax(
{
	type:'post',
	url:'change.php',
	data:{val:val,id:id},
	success: function(results)
	{
		if(results==1)
		{
			$('#str'+id).html('On');
		}
		else
		{
			$('#str'+id).html('Off');
		}
	}
});
}
</script>



