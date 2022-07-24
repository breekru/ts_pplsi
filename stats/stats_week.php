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
        <a href=stats_home.php>Return to Home Page</a>
        
            <?php
                if(isset($_POST["week"])){
                    $week = $_POST["weekpicker"];
                }
                //$count=1;
                //$sel_query = "SELECT * FROM `stats` WHERE `day_of_week`='$week'"; <-----LATEST WORKING QUERY
                $sel_query = "SELECT sum(`received`) as \"Received(week)\", sum(`abandoned`) as \"Abandoned(week)\", sum(`answered`) as \"Answered(week)\", sum(`providers`) as \"Provider(week)\", sum(`corporate`) as \"Corporate(week)\", sum(`call_centers`) as \"Call Center(week)\", sum(`vendors`) as \"Vendor(week)\", sum(`front_desk`) as \"Front Desk(week)\" FROM `stats` WHERE weeknum='$week'";
                $sql = "SELECT date_format(max(`date`),\"%m/%d/%y\") as max, date_format(min(`date`),\"%m/%d/%y\") as min FROM `stats` WHERE weeknum = '$week'";
                //$count=1;
                //$sel_query = "SELECT * FROM `stats`";
                //$sel_query="SELECT `id`, `timeframe`, `date`, `day_of_week`, `received`, `abandoned`, `answered`, `providers`, `corporate`, `call_centers`, `vendors`, `front_desk` FROM `stats` WHERE `id`= '1'";
                $result = mysqli_query($con,$sel_query);
                $title = mysqli_query($con,$sql);
                //while($row = mysqli_fetch_assoc($result)) { 
                $row = mysqli_fetch_assoc($result);
                $row_t = mysqli_fetch_assoc($title);
                ?>

                <h1>Weekly Call Data for week: <?php echo $week; ?> </h1>
                <h2><?php echo $row_t["min"]; ?> - <?php echo $row_t["max"]; ?></h2>


                </div>
                <div class="w3-row-padding">
                <div class="w3-col  l3 w3-center"><h4></h4></div>
                <div class="w3-col l3 w3-center">
                <table class="w3-table w3-border w3-centered w3-card-4" style="width:100%; align=center;">
            <tr>
                <td>Calls Received</td>
                <td><?php echo $row["Received(week)"]; ?></td>
            </tr>
            <tr>
                <td>Abandoned Calls</td>
                <td><?php echo $row["Abandoned(week)"]; ?></td>
            </tr>
            <tr>
                <td>Calls Answered</td>
                <td><?php echo $row["Answered(week)"]; ?></td>
            </tr>
            <tr>
                <td>Providers</td>
                <td><?php echo $row["Provider(week)"]; ?></td>
            </tr>
            <tr>
                <td>Corporate</td>
                <td><?php echo $row["Corporate(week)"]; ?></td>
            </tr>
            <tr>
                <td>3rd Party Call Center</td>
                <td><?php echo $row["Call Center(week)"]; ?></td>
            </tr>
            <tr>
                <td>Vendors</td>
                <td><?php echo $row["Vendor(week)"]; ?></td>
            </tr>
            <tr>
                <td>Transfers from Front Desk</td>
                <td><?php echo $row["Front Desk(week)"]; ?></td>
            </tr>
        </table>        
        <?php //$count++; } ?>
                </div>
                <div class="w3-col l3 w3-center">
            <!--<table class="center">-->
            <table class="w3-table w3-border w3-centered w3-card-4" style="width:100%; align=center;">
            <caption>
                  <h2>Call Total Counts</h2>
               </caption>   
            <tr>
                  <caption>
                  <h2>Incomming calls By Hour</h2>
                  <caption>
               </tr>
               <tr>
                  <td>0000-0100</td>
                  <td>test</td>
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
         <div class="w3-col l3"></div>
      </div>
      <?php //$count++; } ?>
         
    </body>
</html>