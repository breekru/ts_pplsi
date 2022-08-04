<?php
    require('config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>Test</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.charts.load('current', {'packages':['corechart']});
 google.charts.load("current", {packages: ['annotationchart']});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Day','Count'],
 <?php 
			$sql = "SELECT `day_of_week` AS \"Day\", SUM(`received`) AS \"Count\" FROM `stats` GROUP BY `day_of_week`ORDER BY CASE WHEN `day_of_week` = \"Monday\" then 1 WHEN `day_of_week` = \"Tuesday\" then 2 WHEN `day_of_week` = \"Wednesday\" then 3 WHEN `day_of_week` = \"Thursday\" then 4 WHEN `day_of_week` = \"Friday\" then 5 WHEN `day_of_week` = \"Saturday\" then 6 WHEN `day_of_week` = \"Sunday\" then 7 END ASC";


			 $exec = mysqli_query($con,$sql);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['Day']."',".$row['Count']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Total Calls by Day',
 legend: 'none',
 pointSize: 10,
 displayAnnotations: true
 };
 var chart = new google.visualization.LineChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>

</body>
</html>
