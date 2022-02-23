<?php

include '../config/dbconfig.php';


extract($_POST);
$password = md5($retail_password);
$sql = "UPDATE retail SET retail_username='$retail_username', retail_password='$password',retail_email='$retail_email',retail_phone='$retail_phone',retail_address='$retail_address',area_id='$areaid',qstn='$qstn',ans='$ans' WHERE retail_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../dash.php'); 

}else{
    echo "error";
}
