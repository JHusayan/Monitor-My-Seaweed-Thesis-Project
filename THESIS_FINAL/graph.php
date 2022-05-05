<?php 
$hostt = "localhost";
$userr = "u678040556_richganguser";
$passs = "richgangroot";
$dbname = "u678040556_richgangdb";
$dbport = "3306";
$dbnames = "mysql";

$connect = new mysqli($hostt, $userr, $passs, $dbname) or die(mysqlie_error($mysqli));
$query = "SELECT * FROM tempdbb";
$query2 = "SELECT * FROM phdbb";
$query3 = "SELECT * FROM turbiditydbb";
$query4 = "SELECT * FROM salinitydbb";
$query5 = "SELECT * FROM waterleveldbb";
$result = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);
$chart_data = '';
$chart_data2 = '';
$chart_data3 = '';
$chart_data4 = '';
$chart_data5 = '';
while($row = $result->fetch_array())
{
 $chart_data .= "{ TimeS1:'".$row["TimeS1"]."', ydatatempp:".$row["ydatatempp"]."}, ";
}
while($row = mysqli_fetch_array($result2))
{
 $chart_data2 .= "{ TimeS2:'".$row["TimeS2"]."', ydataphh:".$row["ydataphh"]."}, ";
}
while($row = mysqli_fetch_array($result3))
{
 $chart_data3 .= "{ TimeS3:'".$row["TimeS3"]."', ydataturbidity:".$row["ydataturbidity"]."}, ";
}
while($row = mysqli_fetch_array($result4))
{
 $chart_data4 .= "{ TimeS4:'".$row["TimeS4"]."', ydatasalinity:".$row["ydatasalinity"]."}, ";
}
while($row = mysqli_fetch_array($result5))
{
 $chart_data5 .= "{ TimeS5:'".$row["TimeS5"]."', ydatawater:".$row["ydatawater"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
$chart_data2 = substr($chart_data2, 0, -2);
$chart_data3 = substr($chart_data3, 0, -2);
$chart_data4 = substr($chart_data4, 0, -2);
$chart_data5 = substr($chart_data5, 0, -2);
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
    
    <meta http-equiv="refresh" content="3600">
	
</head>

<h4 class="w3-xxlarge w3-center">

	<b>Graph</b>

</h4>
<div class="container w3-center">

		<h4 class="w3-xxlarge w3-center"></h4>
			
  			<div class="w3-padding w3-hover-opacity-on">
	    		<a href="dashboard.php" class="w3-button"><button style="background-color: rgb(240,240,240)">DATA</button></a>
	    		<a href="automation.php" class="w3-button"><button style="background-color: rgb(240,240,240)">AUTOMATION CONTROL</button></a>
	    		<a href="connection.php" class="w3-button"><button style="background-color: rgb(240,240,240)">CONNECTION</button></a>
	    		<a href="logout.php" class="w3-button"><button style="background-color: rgb(240,240,240)">LOGOUT</button></a>
  			</div>
</div>
<body>
    
    <div class="container" style="width:70%; height:50%">
    <h2 align="center">Temperature</h2>
    <div id="chart"></div> 
    </div>
    <div class="container" style="width:70%; height:50%">
    <h2 align="center">pH</h2>
    <div id="charta"></div> 
    </div>
    <div class="container" style="width:70%; height:50%">
    <h2 align="center">Turbidity</h2>
    <div id="chartb"></div>
    </div>
    <div class="container" style="width:70%; height:50%">
    <h2 align="center">Salinity</h2>
    <div id="chartc"></div>
    </div>
    </div>
    <div class="container" style="width:70%; height:50%">
    <h2 align="center">Water level</h2>
    <div id="chartd"></div>
    </div>
 
</body>
</html>
<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'TimeS1',
 ykeys:['ydatatempp'],
 labels:['Temperature'],
 hideHover:'auto',
 xLabelFormat: function (d) {
    var weekdays = new Array(7);
    weekdays[0] = "SUN";
    weekdays[1] = "MON";
    weekdays[2] = "TUE";
    weekdays[3] = "WED";
    weekdays[4] = "THU";
    weekdays[5] = "FRI";
    weekdays[6] = "SAT";

    return weekdays[d.getDay()] + '-' + 
           ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
           ("0" + (d.getDate())).slice(-2);
  },
  resize: true
});
</script>
<script>
Morris.Line({
 element : 'charta',
 data:[<?php echo $chart_data2; ?>],
 xkey:'TimeS2',
 ykeys:['ydataphh'],
 labels:['pH Level'],
 hideHover:'auto',
 xLabelFormat: function (d) {
    var weekdays = new Array(7);
    weekdays[0] = "SUN";
    weekdays[1] = "MON";
    weekdays[2] = "TUE";
    weekdays[3] = "WED";
    weekdays[4] = "THU";
    weekdays[5] = "FRI";
    weekdays[6] = "SAT";

    return weekdays[d.getDay()] + '-' + 
           ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
           ("0" + (d.getDate())).slice(-2);
  },
  resize: true
});
</script>
<script>
Morris.Line({
 element : 'chartb',
 data:[<?php echo $chart_data3; ?>],
 xkey:'TimeS3',
 ykeys:['ydataturbidity'],
 labels:['Turbidity'],
 hideHover:'auto',
 xLabelFormat: function (d) {
    var weekdays = new Array(7);
    weekdays[0] = "SUN";
    weekdays[1] = "MON";
    weekdays[2] = "TUE";
    weekdays[3] = "WED";
    weekdays[4] = "THU";
    weekdays[5] = "FRI";
    weekdays[6] = "SAT";

    return weekdays[d.getDay()] + '-' + 
           ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
           ("0" + (d.getDate())).slice(-2);
  },
  resize: true
});
</script>
<script>
Morris.Line({
 element : 'chartc',
 data:[<?php echo $chart_data4; ?>],
 xkey:'TimeS4',
 ykeys:['ydatasalinity'],
 labels:['Salinity'],
 hideHover:'auto',
 xLabelFormat: function (d) {
    var weekdays = new Array(7);
    weekdays[0] = "SUN";
    weekdays[1] = "MON";
    weekdays[2] = "TUE";
    weekdays[3] = "WED";
    weekdays[4] = "THU";
    weekdays[5] = "FRI";
    weekdays[6] = "SAT";

    return weekdays[d.getDay()] + '-' + 
           ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
           ("0" + (d.getDate())).slice(-2);
  },
  resize: true
});
</script>
<script>
Morris.Line({
 element : 'chartd',
 data:[<?php echo $chart_data5; ?>],
 xkey:'TimeS5',
 ykeys:['ydatawater'],
 labels:['Water level'],
 hideHover:'auto',
 xLabelFormat: function (d) {
    var weekdays = new Array(7);
    weekdays[0] = "SUN";
    weekdays[1] = "MON";
    weekdays[2] = "TUE";
    weekdays[3] = "WED";
    weekdays[4] = "THU";
    weekdays[5] = "FRI";
    weekdays[6] = "SAT";

    return weekdays[d.getDay()] + '-' + 
           ("0" + (d.getMonth() + 1)).slice(-2) + '-' + 
           ("0" + (d.getDate())).slice(-2);
  },
  resize: true
});
</script>






