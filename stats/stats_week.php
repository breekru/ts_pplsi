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
                if(isset($_POST["week"])){
                    $week = $_POST["weekpicker"];
                }
                //$count=1;
                //$sel_query = "SELECT * FROM `stats` WHERE `day_of_week`='$week'"; <-----LATEST WORKING QUERY
                $sel_query = "SELECT sum(`received`) as \"Received(week)\", sum(`abandoned`) as \"Abandoned(week)\", sum(`answered`) as \"Answered(week)\", sum(`providers`) as \"Provider(week)\", sum(`corporate`) as \"Corporate(week)\", sum(`call_centers`) as \"Call Center(week)\", sum(`vendors`) as \"Vendor(week)\", sum(`front_desk`) as \"Front Desk(week)\" FROM `stats` WHERE weeknum='$week'";
                //$count=1;
                //$sel_query = "SELECT * FROM `stats`";
                //$sel_query="SELECT `id`, `timeframe`, `date`, `day_of_week`, `received`, `abandoned`, `answered`, `providers`, `corporate`, `call_centers`, `vendors`, `front_desk` FROM `stats` WHERE `id`= '1'";
                $result = mysqli_query($con,$sel_query);
                //while($row = mysqli_fetch_assoc($result)) { 
                $row = mysqli_fetch_assoc($result);
                ?>
            <caption>
                <h1>Weekly Call Data for <?php echo $row["day_of_week"]; ?> </h1>
                <h2><?php echo $week; ?></h2>
            </caption>
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

    </body>
</html>