<?php

include '../config/dbconfig.php';


extract($_POST);
$password = md5($man_password);
$sql = "UPDATE manufacturer SET man_name='$man_name', man_email='$man_email',man_phone='$man_mobile',username='$man_username',password='$password' WHERE man_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_man.php');

}else{
    echo "error";
}