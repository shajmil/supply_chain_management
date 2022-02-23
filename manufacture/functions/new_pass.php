<?php
session_start();
include '../config/dbconfig.php';


extract($_POST);

$id = $_SESSION['mail'];
$hash= md5($new_pass);

$sql = "UPDATE `manufacturer` SET `password` = '$hash' WHERE `manufacturer`.`man_email` = '$id'";
echo $sql;
if(mysqli_query($conn,$sql)){
    header('Location:../index.php?status=perfect');

}else{
    echo "error";
}