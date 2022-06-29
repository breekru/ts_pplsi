<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'blkfarms_pplsi');
define('DB_PASSWORD', '[K~ve_a!v-g8');
define('DB_NAME', 'blkfarms_pplsi');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$con = mysqli_connect("localhost","blkfarms_pplsi","[K~ve_a!v-g8","blkfarms_pplsi");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>