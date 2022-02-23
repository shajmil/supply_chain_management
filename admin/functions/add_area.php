<?php

include('../config/dbconfig.php');
extract($_POST);
$sql=" INSERT INTO area( area_name,area_code) VALUES ('$area_name','$area_code')";
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../view_area.php");    

}
else {
    echo "error";
}
?>