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
<table class="center">

<?php
if(isset($_POST["month"])){
    $month = $_POST["monthpicker"];
    $year = $_POST["yearpicker"];
}
//$count=1;
//$sel_query = "select * FROM `stats` WHERE MONTH(`date`) = $month AND YEAR(`date`) = $year"; <--This is a working formula
$sel_query = "SELECT SUM(`received`) AS m_received, SUM(`abandoned`) AS m_abandoned, SUM(`answered`) AS m_answered, SUM(`providers`) AS m_providers, SUM(`corporate`) AS m_corporate, SUM(`call_centers`) AS m_call_centers, SUM(`vendors`) AS m_vendors, SUM(`front_desk`) AS m_front_desk FROM `stats` WHERE MONTH(`date`) = $month AND YEAR(`date`) = $year AND `timeframe` = \"day\"";
//$count=1;
//$sel_query = "SELECT * FROM `stats`";
//$sel_query="SELECT `id`, `timeframe`, `date`, `day_of_week`, `received`, `abandoned`, `answered`, `providers`, `corporate`, `call_centers`, `vendors`, `front_desk` FROM `stats` WHERE `id`= '1'";
$result = mysqli_query($con,$sel_query);
//while($row = mysqli_fetch_assoc($result)) { 
$row = mysqli_fetch_assoc($result);
?>
<caption><h1>Monthly Call Data for <?php echo $month;?>/<?php echo $year; ?> </h1></caption>
    <tr>
        <td>Calls Received</td>
        <td><?php echo $row["m_received"]; ?></td>
    </tr>
    <tr>
        <td>Abandoned Calls</td>
        <td><?php echo $row["m_abandoned"]; ?></td>
    </tr>
    <tr>
        <td>Calls Answered</td>
        <td><?php echo $row["m_answered"]; ?></td>
    </tr>
    <tr>
        <td>Providers</td>
        <td><?php echo $row["m_providers"]; ?></td>
    </tr>
    <tr>
        <td>Corporate</td>
        <td><?php echo $row["m_corporate"]; ?></td>
    </tr>
    <tr>
        <td>3rd Party Call Center</td>
        <td><?php echo $row["m_call_centers"]; ?></td>
    </tr>
    <tr>
        <td>Vendors</td>
        <td><?php echo $row["m_vendors"]; ?></td>
    </tr>
    <tr>
        <td>Transfers from Front Desk</td>
        <td><?php echo $row["m_front_desk"]; ?></td>
    </tr>
    </table>
    <?php //$count++; } ?>



<!--<h1>6/20-6/26 Call Review</h1>
<table class="center">
    <tr>
        <td>Calls Received</td>
        <td>NA</td>
    </tr>
    <tr>
        <td>Abandoned Calls</td>
        <td class="bad">NA</td>
    </tr>
    <tr>
        <td>Calls Answered</td>
        <td>376</td>
    </tr>
    <tr>
        <td>Providers</td>
        <td>176</td>
    </tr>
    <tr>
        <td>Corporate</td>
        <td>150</td>
    </tr>
    <tr>
        <td>3rd Party Call Center</td>
        <td>40</td>
    </tr>
    <tr>
        <td>Vendors</td>
        <td>3</td>
    </tr>
    <tr>
        <td>Transfers from Front Desk</td>
        <td>7</td>
    </tr>
</table>


<h1>Monday 6/28 Call Review</h1>
<table class="center">
    <tr>
        <td>Calls Received</td>
        <td>78</td>
    </tr>
    <tr>
        <td>Abandoned Calls</td>
        <td>4</td>
    </tr>
    <tr>
        <td>Calls Answered</td>
        <td>74</td>
    </tr>
    <tr>
        <td>Providers</td>
        <td>19</td>
    </tr>
    <tr>
        <td>Corporate</td>
        <td>45</td>
    </tr>
    <tr>
        <td>3rd Party Call Center</td>
        <td>9</td>
    </tr>
    <tr>
        <td>Vendors</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Transfers from Front Desk</td>
        <td>1</td>
    </tr>
</table>

-->

</body>
</html>