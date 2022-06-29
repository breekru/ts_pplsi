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

<h1>Add Data to the DB</h1>
<form action="control_table.php" method="post">
    <label for="timeframe">Month/Week/Day</label>
    <select id="timeframe" name="timeframe">
        <option value="month">Month</option>
        <option value="week">Week</option>
        <option value="day">Day</option>
    </select>

    <label>Date (If week/month enter starting date of time period)</label>
    <input type="date" name="date">

    <label>Day of Week Month Name or Week Range</label>
    <input type="text" name="day_of_week">

    <label>Total Calls Received</label>
    <input type="text" name="received">

    <label>Total Calls Abandoned</label>
    <input type="text" name="abandoned">

    <label>Total Calls Answered</label>
    <input type="text" name="answered">

    <label>Total Calls From Providers</label>
    <input type="text" name="providers">

    <label>Total Calls From Corporate Employees</label>
    <input type="text" name="corporate">

    <label>Total Calls From 3rd Party Call Centers</label>
    <input type="text" name="call_centers">

    <label>Total Calls From Vendors</label>
    <input type="text" name="vendors">

    <label>Total Calls Transfered from Front Desk</label>
    <input type="text" name="front_desk">

    <input type="submit" value="Add" name="add">
    <input type="reset" value="Reset Form">
</form>
</body>
</html>