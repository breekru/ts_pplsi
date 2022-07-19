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

$sql = "INSERT INTO stats (id, timeframe, date, day_of_week, received, abandoned, answered, providers, corporate, call_centers, vendors, front_desk, hour1) VALUES (NULL, '$timeframe', '$date', '$day_of_week', '$received', '$abandoned', '$answered', '$providers', '$corporate', '$call_centers', '$vendors', '$front_desk', '$hour1')";

if(mysqli_query($link, $sql)){
    header("refresh:5;url=stats_home.php");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <link rel="icon" type="image/ico" href="/img/favicon.ico" />
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Saving your data you will be redirected shortly</h1>

        </div>
    </div>
</body>
</html>