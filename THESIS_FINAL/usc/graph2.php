<?php 
$hostt = "localhost";
$userr = "u678040556_richganguser";
$passs = "richgangroot";
$dbname = "u678040556_richgangdb";
$dbport = "3306";
$dbnames = "mysql";

$connect = mysqli_connect($hostt, $userr, $passs, $dbname);
$query = "SELECT * FROM phdbb";
$query2 = "SELECT * FROM turbiditydbb";
$result = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);
$chart_data = '';
$chart_data2 = '';
// $chart_data3 = '';
// $chart_data4 = '';
// $chart_data5 = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ xtimephh:'".$row["xtimephh"]."', ydataphh:".$row["ydataphh"]."}, ";
}
while($row = mysqli_fetch_array($result2))
{
 $chart_data2 .= "{ xtimeturbidity:'".$row["xtimeturbidity"]."', ydataturbidity:".$row["ydataturbidity"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
$chart_data2 = substr($chart_data2, 0, -2);
// $chart_data3 = substr($chart_data3, 0, -2);
// $chart_data4 = substr($chart_data4, 0, -2);
// $chart_data5 = substr($chart_data5, 0, -2);
?>


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
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<head>
    
    <meta http-equiv="refresh" content="5">
	
</head>

<h4 class="w3-xxlarge w3-center">

	<b>Graph</b>

</h4>
<div class="container w3-center">

		<h4 class="w3-xxlarge w3-center"></h4>
			
  			<div class="w3-padding w3-hover-opacity-on">
	    		<a href="dashboard.php" style="width:10%" class="w3-button"><button style="background-color: rgb(240,240,240)">DATA</button></a>
	    		<a href="automation.php" style="width:20%" class="w3-button"><button style="background-color: rgb(240,240,240)">AUTOMATION CONTROL</button></a>
	    		<a href="connection.php" style="width:20%" class="w3-button"><button style="background-color: rgb(240,240,240)">CONNECTION</button></a>
	    		<a href="logout.php" style="width:10%" class="w3-button"><button style="background-color: rgb(240,240,240)">LOGOUT</button></a>
  			</div>
</div>
<body>
    <div class="container" style="width:500px">
   <h2 align="center">pH</h2>
   <div id="chart"></div> 
    </div>
     <div class="container" style="width:500px">
   <h2 align="center">Turbidity</h2>
   <div id="chartb"></div>
   <!-- </div>-->
   <!-- <div class="container" style="width:500px">-->
   <!--<h2 align="center">Turbidity</h2>-->
   <!--<div id="chartc"></div> -->
   <!-- </div>-->
   <!-- <div class="container" style="width:500px">-->
   <!--<h2 align="center">Salinity</h2>-->
   <!--<div id="chartd"></div> -->
   <!-- </div>-->
   <!-- <div class="container" style="width:500px">-->
   <!--<h2 align="center">Water level</h2>-->
   <!--<div id="charte"></div> -->
   <!-- </div>-->
</body>
</html>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'xtimephh',
 ykeys:['ydataphh'],
 labels:['Ph Level'],
 hideHover:'auto',
});
</script>
<script>
Morris.Line({
 element : 'chartb',
 data:[<?php echo $chart_data2; ?>],
 xkey:'xtimeturbidity',
 ykeys:['ydataturbidity'],
 labels:['Ph Level'],
 hideHover:'auto',
});
</script>
<!--<script>-->
<!--Morris.Line({-->
<!-- element : 'chartc',-->
<!-- data:[<?php echo $chart_data3; ?>],-->
<!-- xkey:'xtimephh',-->
<!-- ykeys:['ydataphh'],-->
<!-- labels:['Ph Level'],-->
<!-- hideHover:'auto',-->
<!--});-->
<!--</script>-->
<!--<script>-->
<!--Morris.Line({-->
<!-- element : 'chartd',-->
<!-- data:[<?php echo $chart_data4; ?>],-->
<!-- xkey:'xtimephh',-->
<!-- ykeys:['ydataphh'],-->
<!-- labels:['Ph Level'],-->
<!-- hideHover:'auto',-->
<!--});-->
<!--</script>-->
<!--<script>-->
<!--Morris.Line({-->
<!-- element : 'charte',-->
<!-- data:[<?php echo $chart_data5; ?>],-->
<!-- xkey:'xtimephh',-->
<!-- ykeys:['ydataphh'],-->
<!-- labels:['Ph Level'],-->
<!-- hideHover:'auto',-->
<!--});-->
<!--</script>-->





