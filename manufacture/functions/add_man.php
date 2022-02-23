<?php

include('../config/dbconfig.php');
extract($_POST);

$password = md5($password);
$sql=" INSERT INTO manufacturer( man_name,man_email,man_phone,username,password,man_photo) VALUES ('$man_name','$man_email','$man_phone','$username','$password','$photo')";
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../index.php?status=registered");    

}
else {
    echo "error";
}
?>