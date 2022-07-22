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
    </head>
    <body class="w3-theme">
        <?php
            $sql = "SELECT DATE_FORMAT(MAX(date), '%a %b %e, %Y') AS last_date FROM `stats` WHERE `timeframe` = \"day\"";
            $result2 = mysqli_query($con,$sql);
            $row2 = mysqli_fetch_assoc($result2);
            ?>
        <h1 style="text-align: center;">Technical Support Call Data</h1>
        <h2 style="text-align: center;">Last Day Entered:  <?php echo $row2["last_date"]; ?></h2>
        <div id="day" class="w3-container w3-theme-l2 w3-margin-left w3-margin-right w3-margin-top">
            <form method="post" action="stats_day.php">
                <p> Single Day Data: <input id="datepicker" type="date" size="8" name="datepicker"/>
                    <input type="submit" value="Go" name="day"/>
                </p>
            </form>
        </div>
        <div id="week" class="w3-container w3-theme-l2 w3-margin-left w3-margin-right">

            <form method="post" action="stats_week.php">
                <p>
                    Weekly Data Choose a week: 
                    <select id="weekpicker" name="weekpicker">
                        <?php /*
                            $sql = "SELECT `day_of_week` FROM `stats` WHERE `timeframe` = \"week\"";
                            $result = mysqli_query($con,$sql);
                            $count=1;
                            while($row = mysqli_fetch_assoc($result)):;
                            */?>
                        <?php 
                            $sql1 = "SELECT SUBDATE(`date`, dayofweek(`date`) - 1) AS \"First\" FROM stats GROUP BY WEEK(date)";
                            $sql2 = "SELECT SUBDATE(`date`, dayofweek(`date`) - 7) AS \"Last\" FROM stats GROUP BY WEEK(date)";
                            $result_f = mysqli_query($con,$sql1);
                            $result_l = mysqli_query($con,$sql2);
                            $count=1;
                            while($row1 = mysqli_fetch_assoc($result_f)) && ($row2 = mysqli_fetch_assoc($result_l)):;
                            ?>
                        <option value="<?php echo $row1["First"]; ?>-<?php echo $row2["Last"]; ?>"><?php echo $row1["First"]; ?>-<?php echo $row2["Last"]; ?></option>
                        <?php
                            endwhile;
                            ?>
                    </select>
                    <input type="submit" value="Go" name="week"/>
            </form>
        </div>
        <div id="month" class="w3-container w3-theme-l2 w3-margin-left w3-margin-right w3-margin-bottom">
            <form method="post" action="stats_month.php">
                <p>
                    Monthly Data Choose a Month and Year: 
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
        <div class="w3-container w3-theme-d4" id="footer" style="padding: 0; text-align: center; vertical-align: middle; line-height: normal; margin: 0; position: fixed; bottom: 0px; width: 100%;">
            <a href="stats_add_data.php" class="button">Add Data</a>
        </div>
    </body>
</html>