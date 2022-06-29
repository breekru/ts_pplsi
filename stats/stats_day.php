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
<table class="center">

<?php
//$count=1;
$sel_query = "SELECT * FROM `stats` WHERE `date`=\"2022-06-28\"";
//$sel_query = "SELECT * FROM `stats`";
//$sel_query="SELECT `id`, `timeframe`, `date`, `day_of_week`, `received`, `abandoned`, `answered`, `providers`, `corporate`, `call_centers`, `vendors`, `front_desk` FROM `stats` WHERE `id`= '1'";
$result = mysqli_query($con,$sel_query);
//while($row = mysqli_fetch_assoc($result)) { 
$row = mysqli_fetch_assoc($result);
?>
<caption><h1>Weekly Call Data for <?php echo $row["day_of_week"]; ?> </h1></caption>
    <tr>
        <td>Calls Received</td>
        <td><?php echo $row["received"]; ?></td>
    </tr>
    <tr>
        <td>Abandoned Calls</td>
        <td><?php echo $row["abandoned"]; ?></td>
    </tr>
    <tr>
        <td>Calls Answered</td>
        <td><?php echo $row["answered"]; ?></td>
    </tr>
    <tr>
        <td>Providers</td>
        <td><?php echo $row["providers"]; ?></td>
    </tr>
    <tr>
        <td>Corporate</td>
        <td><?php echo $row["corporate"]; ?></td>
    </tr>
    <tr>
        <td>3rd Party Call Center</td>
        <td><?php echo $row["call_centers"]; ?></td>
    </tr>
    <tr>
        <td>Vendors</td>
        <td><?php echo $row["vendors"]; ?></td>
    </tr>
    <tr>
        <td>Transfers from Front Desk</td>
        <td><?php echo $row["front_desk"]; ?></td>
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