<?php

require('config.php');

?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PPLSI Technical Support Stats</title>
  <meta name="description" content="Technical Support Stats">
  <meta name="author" content="Brett Krumholz">

  <meta property="og:title" content="Technical Support Stats">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
  <meta property="og:description" content="Technical Support Stats">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="img/favicon.ico">
  <link rel="icon" href="img/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

<?php
$sql = "SELECT DATE_FORMAT(MAX(date), '%a %b %e, %Y') AS last_date FROM `stats` WHERE `timeframe` = \"day\"";
$result2 = mysqli_query($con,$sql);
$row2 = mysqli_fetch_assoc($result2);
?>
<h1>Technical Support Call Data</h1>
<h2>Last Day Entered:  <?php echo $row2["last_date"]; ?></h2>
<div id="day">
<form method="post" action="stats_day.php">
    <p> Single Day Data: <input id="datepicker" type="date" size="8" name="datepicker"/>
    <input type="submit" value="Go" name="day"/></p>
</form>
</div>

<div id="week">
 <!--   <form method="post" action="stats_week.php">
        <p> Weekly Data Choose a week: <select id="weekpicker" name="weekpicker">
            <option value="6/19 - 6/25">6/19 - 6/25</option>
            <option value="6/12 - 6/18">6/12 - 6/18</option>
</select>
<input type="submit" value="Submit" name="week"/>
</form>

<h2>Test Section</h2>
-->

    <form method="post" action="stats_week.php">
        <p> Weekly Data Choose a week: 
<select id="weekpicker" name="weekpicker">
<?php 
$sql = "SELECT `day_of_week` FROM `stats` WHERE `timeframe` = \"week\"";
$result = mysqli_query($con,$sql);
$count=1;
while($row = mysqli_fetch_assoc($result)):;
?>
    <option value="<?php echo $row["day_of_week"]; ?>"><?php echo $row["day_of_week"]; ?></option>

    <?php
    endwhile;
    ?>
</select>
<input type="submit" value="Go" name="week"/>
</form>
</div>

<div id="month">

    <form method="post" action="stats_month.php">
        <p> Monthly Data Choose a Month and Year: 
<select id="monthpicker" name="monthpicker">
<?php 
$sql_month = "select DISTINCT(MONTH(`date`)) AS Months FROM `stats` ORDER BY Months ASC";
$sql_year = "select DISTINCT(YEAR(`date`)) AS Years FROM `stats` ORDER BY Years ASC";
$result_m = mysqli_query($con,$sql_month);
$result_y = mysqli_query($con,$sql_year);
$count=1;
while($row = mysqli_fetch_assoc($result_m)):;
?>
    <option value="<?php echo $row["Months"]; ?>"><?php echo $row["Months"]; ?></option>

    <?php
    endwhile;
    ?>
</select>
<select id="yearpicker" name="yearpicker">
<?php
while($row = mysqli_fetch_assoc($result_y)):;
?>
    <option value="<?php echo $row["Years"]; ?>"><?php echo $row["Years"]; ?></option>

    <?php
    endwhile;
    ?>
</select>
<input type="submit" value="Go" name="month"/>
</form>
</div>



<div class="w3-container-sand" id="footer">
    <a href="stats_add_data.php" class="button">Add Data</a>
</div>
</body>
</html>