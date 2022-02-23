<?php

include('../config/dbconfig.php');
extract($_POST);
$sql=" INSERT INTO categories( cat_name,cat_details) VALUES ('$cat_name','$cat_details')";
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../manage_cat.php");    

}
else {
    echo "error";
}
?>