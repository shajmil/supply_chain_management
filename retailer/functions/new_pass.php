<?php
session_start();
include '../config/dbconfig.php';


extract($_POST);

$id = $_SESSION['mail'];
$hash= md5($new_pass);

$sql = "UPDATE `retail` SET `retail_password` = '$hash' WHERE retail_id = '$id'";
echo $sql;
if(mysqli_query($conn,$sql)){
    header('Location:../index.php?status=perfect');

}else{
    echo "error";
}