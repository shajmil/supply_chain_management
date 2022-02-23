<?php
session_start();
include '../config/dbconfig.php';


extract($_POST);

$id = $_SESSION['email'];
$hash= md5($new_pass);

$sql = "UPDATE `admin` SET `password` = '$hash' WHERE `admin`.`username` = '$id'";

echo $sql;
if(mysqli_query($conn,$sql)){
    header('Location:../view_unit.php');

}else{
    echo "error";
}