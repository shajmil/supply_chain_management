<?php
session_start();
include '../config/dbconfig.php';


extract($_POST);

$id = $_SESSION['id'];
$hash= md5($new_pass);
$sql = "UPDATE `manufacturer` SET `password` = '$hash' WHERE `manufacturer`.`man_id` = '$id'";

echo $sql;
if(mysqli_query($conn,$sql)){
    header('Location:../dash.php');

}else{
    echo "error";
}