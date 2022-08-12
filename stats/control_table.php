<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost","blkfarms_pplsi","[K~ve_a!v-g8","blkfarms_pplsi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$timeframe = mysqli_real_escape_string($link, $_REQUEST['timeframe']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$day_of_week = mysqli_real_escape_string($link, $_REQUEST['day_of_week']);
$received = mysqli_real_escape_string($link, $_REQUEST['received']);
$abandoned = mysqli_real_escape_string($link, $_REQUEST['abandoned']);
$answered = mysqli_real_escape_string($link, $_REQUEST['answered']);
$providers = mysqli_real_escape_string($link, $_REQUEST['providers']);
$corporate = mysqli_real_escape_string($link, $_REQUEST['corporate']);
$call_centers = mysqli_real_escape_string($link, $_REQUEST['call_centers']);
$vendors = mysqli_real_escape_string($link, $_REQUEST['vendors']);
$front_desk = mysqli_real_escape_string($link, $_REQUEST['front_desk']);
$hour1 = mysqli_real_escape_string($link, $_REQUEST['hour1']);
$hour2 = mysqli_real_escape_string($link, $_REQUEST['hour2']);
$hour3 = mysqli_real_escape_string($link, $_REQUEST['hour3']);
$hour4 = mysqli_real_escape_string($link, $_REQUEST['hour4']);
$hour5 = mysqli_real_escape_string($link, $_REQUEST['hour5']);
$hour6 = mysqli_real_escape_string($link, $_REQUEST['hour6']);
$hour7 = mysqli_real_escape_string($link, $_REQUEST['hour7']);
$hour8 = mysqli_real_escape_string($link, $_REQUEST['hour8']);
$hour9 = mysqli_real_escape_string($link, $_REQUEST['hour9']);
$hour10 = mysqli_real_escape_string($link, $_REQUEST['hour10']);
$hour11 = mysqli_real_escape_string($link, $_REQUEST['hour11']);
$hour12 = mysqli_real_escape_string($link, $_REQUEST['hour12']);
$hour13 = mysqli_real_escape_string($link, $_REQUEST['hour13']);
$hour14 = mysqli_real_escape_string($link, $_REQUEST['hour14']);
$hour15 = mysqli_real_escape_string($link, $_REQUEST['hour15']);
$hour16 = mysqli_real_escape_string($link, $_REQUEST['hour16']);
$hour17 = mysqli_real_escape_string($link, $_REQUEST['hour17']);
$hour18 = mysqli_real_escape_string($link, $_REQUEST['hour18']);
$hour19 = mysqli_real_escape_string($link, $_REQUEST['hour19']);
$hour20 = mysqli_real_escape_string($link, $_REQUEST['hour20']);
$hour21 = mysqli_real_escape_string($link, $_REQUEST['hour21']);
$hour22 = mysqli_real_escape_string($link, $_REQUEST['hour22']);
$hour23 = mysqli_real_escape_string($link, $_REQUEST['hour23']);
$hour24 = mysqli_real_escape_string($link, $_REQUEST['hour24']);


//if (isset($_POST['upload'])) {
  //  $image = $_FILES['image']['name'];
    // image file directory
    //$target = "images/".basename($image);
    //if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      //  $msg = "Image uploaded successfully";
    //}else{
      //  $msg = "Failed to upload image";
    //}
 //}
// Attempt insert query execution

//if($dod == ''){
//    $dod1 = 'NULL';
//} else {
//    $dod1 = $_REQUEST['dod'];
//}

$sql = "INSERT INTO stats (id, timeframe, date, day_of_week, received, abandoned, answered, providers, corporate, call_centers, vendors, front_desk, hour1, hour2, hour3, hour4, hour5, hour6, hour7, hour8, hour9, hour10, hour11, hour12, hour13, hour14, hour15, hour16, hour17, hour18, hour19, hour20, hour21, hour22, hour23, hour24) VALUES (NULL, '$timeframe', '$date', '$day_of_week', '$received', '$abandoned', '$answered', '$providers', '$corporate', '$call_centers', '$vendors', '$front_desk', '$hour1', '$hour2', '$hour3', '$hour4', '$hour5', '$hour6', '$hour7', '$hour8', '$hour9', '$hour10', '$hour11', '$hour12', '$hour13', '$hour14', '$hour15', '$hour16', '$hour17', '$hour18', '$hour19', '$hour20', '$hour21', '$hour22', '$hour23', '$hour24')";

if(mysqli_query($link, $sql)){
    header("refresh:3;url=stats_add_data.php");
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



 // $msg = "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saving!!!</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
    <link rel="icon" type="image/ico" href="/img/favicon.ico" />
</head>
<body class="w3-theme">
<div class="w3-row" style="width: 100%;">
    <div class="w3-col-l4 w3-center">
        <div Class="w3-text-dark-grey w3-light-grey">
            <h1>Adding to Spreadsheet!!!</h1>
        </div>
    </div>
</div>
</body>
</html>