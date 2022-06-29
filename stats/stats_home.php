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
<h1>Technical Support Call Data</h1>
<div id="day">
    <!--
<form method="post" action="stats_day.php">
    <p> Single Day Data: <input id="datepicker" type="date" size="8" name="datepicker"/>
    <input type="submit" value="Submit" name="day"/></p>
</form>
</div>

<div id="week">
    <form method="post" action="stats_week.php">
        <p> Weekly Data Choose a week: <select id="weekpicker" name="weekpicker">
            <option value="6/19 - 6/25">6/19 - 6/25</option>
            <option value="6/12 - 6/18">6/12 - 6/18</option>
</select>
<input type="submit" value="Submit" name="week"/>
</form>
-->
<h2>Test Section</h2>


<div id="week">
    <form method="post" action="stats_week.php">
        <p> Weekly Data Choose a week: 
<select id="test" name="test">
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
<input type="submit" value="Submit" name="week"/>
</form>
</div>
</body>
</html>