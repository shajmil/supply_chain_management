<?php

include('../config/dbconfig.php');
extract($_POST);
$sql=" INSERT INTO unit( unit_name,unit_details) VALUES ('$unit_name','$unit_details')";
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../manage_unit.php");    

}
else {
    echo "error";
}
?>