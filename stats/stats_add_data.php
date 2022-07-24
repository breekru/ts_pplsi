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
      <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
      <!--<link rel="stylesheet" href="css/stats.css">-->
      <style>
   tr:nth-child(even) {
      background-color: #f1f1f1;
      color: #616161;
   }

   tr:nth-child(odd) {
      background-color: #616161;
      color: #f1f1f1;
   }
   </style>
    </head>
    <body class="w3-theme">
      <div class="w3-row">
      <div class="w3-col l12 w3-center">
                <a class="text-light" href=stats_home.php>Return to Home Page</a>

                <h1>Add Data to the DB</h1>
                <?php
                    $sql = "SELECT DATE_FORMAT(MAX(date), '%a %b %e, %Y') AS last_date FROM `stats` WHERE `timeframe` = \"day\"";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_assoc($result);
                    
                    
                    ?>
                <h2>Last Date Entered:  <?php echo $row["last_date"]; ?></h2>
            </div>
            <div class="row">
            <div class="w3-col  l3 w3-center"><h4></h4></div>
         <div class="w3-col l3 w3-center">
                    <!--<div class="divcenter">-->
                    <form action="control_table.php" method="post">
                        <label for="timeframe">Month/Week/Day</label><br>
                        <select id="timeframe" name="timeframe">
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
                </div>
                <div class="col-sm-3">
                <label>0000-0100</label><br>
                <input type="text" name="hour1">
                <br>
                <label>0100-0200</label><br>
                <input type="text" name="hour2">
                <br>
                <label>0200-0300</label><br>
                <input type="text" name="hour3">
                <br>
                <label>0300-0400</label><br>
                <input type="text" name="hour4">
                <br>
                <label>0400-0500</label><br>
                <input type="text" name="hour5">
                <br>
                <label>0500-0600</label><br>
                <input type="text" name="hour6">
                <br>
                <label>0600-0700</label><br>
                <input type="text" name="hour7">
                <br>
                <label>0700-0800</label><br>
                <input type="text" name="hour8">
                <br>
                <label>0800-0900</label><br>
                <input type="text" name="hour9">
                <br>
                <label>0900-1000</label><br>
                <input type="text" name="hour10">
                <br>
                <label>1000-1100</label><br>
                <input type="text" name="hour11">
                <br>
                <label>1100-1200</label><br>
                <input type="text" name="hour12">
                <br>
                <label>1200-1300</label><br>
                <input type="text" name="hour13">
                <br>
                <label>1300-1400</label><br>
                <input type="text" name="hour14">
                <br>    
                <label>1400-1500</label><br>
                <input type="text" name="hour15">
                <br>
                <label>1500-1600</label><br>
                <input type="text" name="hour16">
                <br>
                <label>1600-1700</label><br>
                <input type="text" name="hour17">
                <br>
                <label>1700-1800</label><br>
                <input type="text" name="hour18">
                <br>
                <label>1800-1900</label><br>
                <input type="text" name="hour19">
                <br>
                <label>1900-2000</label><br>
                <input type="text" name="hour20">
                <br>
                <label>2000-2100</label><br>
                <input type="text" name="hour21">
                <br>
                <label>2100-2200</label><br>
                <input type="text" name="hour22">
                <br>
                <label>2200-2300</label><br>
                <input type="text" name="hour23">
                <br>
                <label>2300-0000</label><br>
                <input type="text" name="hour24">
                <br>
                <input type="submit" value="Add" name="add">
                <input type="reset" value="Reset Form">
                </div>
            </div>
            </form>
        </div>
    </body>
</html>