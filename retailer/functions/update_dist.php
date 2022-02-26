<?php

include '../config/dbconfig.php';


$id = $_GET['id'];

$or = $_GET['or'];
echo $or;
$sql = "UPDATE distributor SET status=3 WHERE dist_id=$id";
$sq="UPDATE `orders` SET `status`='2' where order_id=$or";
$p=mysqli_query($conn,$sq);

if(mysqli_query($conn,$sql)){
echo $sql;
    header('Location:../view_order.php');

}else{
    echo "error";
}