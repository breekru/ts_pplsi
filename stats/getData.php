<?php
    require('config.php');

    //fetch table rows from mysql db
    $sql = "select * from stats";
    $result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($con);
?>

