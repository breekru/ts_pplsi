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
    <h1>Daily Call Data for <?php echo $row["day_of_week"];?> <?php echo $row["date"]; ?> </h1>
<div class="row">
    <div class="column">
<table class="center">

<?php
if(isset($_POST["day"])){
    $date = $_POST["datepicker"];
}
//$count=1;
//$sel_query = "SELECT * FROM `stats` WHERE `date`='$date'";
$sel_query = "SELECT * FROM `stats` WHERE `date` = '$date' && `timeframe` = \"day\"";
//$sel_query = "SELECT * FROM `stats`";
//$sel_query="SELECT `id`, `timeframe`, `date`, `day_of_week`, `received`, `abandoned`, `answered`, `providers`, `corporate`, `call_centers`, `vendors`, `front_desk` FROM `stats` WHERE `id`= '1'";
$result = mysqli_query($con,$sel_query);
//while($row = mysqli_fetch_assoc($result)) { 
$row = mysqli_fetch_assoc($result);
$formated_date = $row["date"];
?>

<caption><h1>Call Total Counts</h1></caption>

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
</div>
<div class="column">
<table class="center">
   <tr>
   <caption><h1>Incomming calls By Hour</h1><caption>
</tr>
    <tr>
        <td>0000-0100</td>
        <td><?php echo $row["hour1"]; ?></td>
    </tr>
    <tr>
        <td>0100-0200</td>
        <td><?php echo $row["hour2"]; ?></td>
    </tr>
    <tr>
        <td>0200-0300</td>
        <td><?php echo $row["hour3"]; ?></td>
    </tr>
    <tr>
        <td>0300-0400</td>
        <td><?php echo $row["hour4"]; ?></td>
    </tr>
    <tr>
        <td>0400-0500</td>
        <td><?php echo $row["hour5"]; ?></td>
    </tr>
    <tr>
        <td>0500-0600</td>
        <td><?php echo $row["hour6"]; ?></td>
    </tr>
    <tr>
        <td>0600-0700</td>
        <td><?php echo $row["hour7"]; ?></td>
    </tr>
    <tr>
        <td>0700-0800</td>
        <td><?php echo $row["hour8"]; ?></td>
    </tr>
    <tr>
        <td>0800-0900</td>
        <td><?php echo $row["hour9"]; ?></td>
    </tr>
    <tr>
        <td>0900-1000</td>
        <td><?php echo $row["hour10"]; ?></td>
    </tr>
    <tr>
        <td>1000-1100</td>
        <td><?php echo $row["hour11"]; ?></td>
    </tr>
    <tr>
        <td>1100-1200</td>
        <td><?php echo $row["hour12"]; ?></td>
    </tr>
    <tr>
        <td>1200-1300</td>
        <td><?php echo $row["hour13"]; ?></td>
    </tr>
    <tr>
        <td>1300-1400</td>
        <td><?php echo $row["hour14"]; ?></td>
    </tr>
    <tr>
        <td>1400-1500</td>
        <td><?php echo $row["hour15"]; ?></td>
    </tr>
    <tr>
        <td>1500-1600</td>
        <td><?php echo $row["hour16"]; ?></td>
    </tr>
    <tr>
        <td>1600-1700</td>
        <td><?php echo $row["hour17"]; ?></td>
    </tr>
    <tr>
        <td>1700-1800</td>
        <td><?php echo $row["hour18"]; ?></td>
    </tr>
    <tr>
        <td>1800-1900</td>
        <td><?php echo $row["hour19"]; ?></td>
    </tr>
    <tr>
        <td>1900-2000</td>
        <td><?php echo $row["hour20"]; ?></td>
    </tr>
    <tr>
        <td>2000-2100</td>
        <td><?php echo $row["hour21"]; ?></td>
    </tr>
    <tr>
        <td>2100-2200</td>
        <td><?php echo $row["hour22"]; ?></td>
    </tr>
    <tr>
        <td>2200-2300</td>
        <td><?php echo $row["hour23"]; ?></td>
    </tr>
    <tr>
        <td>2300-0000</td>
        <td><?php echo $row["hour24"]; ?></td>
    </tr>
    </table>
</div>
</div>
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