<?php
session_start();

$total = 0;include '../config/dbconfig.php';
$order_id=$_GET['id'];

$sql = " SELECT invoice.order_id,invoice.status  FROM invoice

WHERE invoice.order_id=$order_id";
echo $sql;

$query = mysqli_query($conn,$sql);

$results = mysqli_fetch_assoc($query);

if($results['status'] == 0)
{
header("Location:../generate_invoice.php?id=$order_id");
}
else{

    header("Location:../view_invoice.php?id=$order_id");
}


?>