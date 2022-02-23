<?php

include('../config/dbconfig.php');
extract($_POST);

$password = md5($man_password);
$sql=" INSERT INTO manufacturer( man_name,man_email,man_phone,username,password) VALUES ('$man_name','$man_email','$man_mobile','$man_username','$password')";
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../dash.php");    

}
else {
    echo "error";
}
?>