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

  <link rel="stylesheet" href="css/stats.css">

</head>

<body>
<a href=stats_home.php>Return to Home Page</a>
<h1>Add Data to the DB</h1>
  <?php
$sql = "SELECT MAX(`date`) FROM `stats` WHERE timeframe = \"day\"";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

echo $row["day_of_week"];
?>
<h2>Last Date Entered <?php echo $row; ?></h2>
<div class="divcenter">
<form action="control_table.php" method="post">
    <label for="timeframe">Month/Week/Day</label><br>
    <select id="timeframe" name="timeframe">
        <option value="month">Month</option>
        <option value="week">Week</option>
        <option value="day" selected>Day</option>
    </select>
    <br>
    <label>Date (If week/month enter starting date of time period)</label>
    <br>
    <input type="date" name="date">
    <br>
    <label>Day of Week Month Name or Week Range</label>
    <br>
    <input type="text" name="day_of_week">
    <br>
    <label>Total Calls Received</label>
    <br>
    <input type="text" name="received">
    <br>
    <label>Total Calls Abandoned</label>
    <br>
    <input type="text" name="abandoned">
    <br>
    <label>Total Calls Answered</label>
    <br>
    <input type="text" name="answered">
    <br>
    <label>Total Calls From Providers</label>
    <br>
    <input type="text" name="providers">
    <br>
    <label>Total Calls From Corporate Employees</label>
    <br>
    <input type="text" name="corporate">
    <br>
    <label>Total Calls From 3rd Party Call Centers</label>
    <br>
    <input type="text" name="call_centers">
    <br>
    <label>Total Calls From Vendors</label>
    <br>
    <input type="text" name="vendors">
    <br>
    <label>Total Calls Transfered from Front Desk</label>
    <br>
    <input type="text" name="front_desk">
    <br>
    <input type="submit" value="Add" name="add">
    <input type="reset" value="Reset Form">
</form>
</div>
</body>
</html>