<?php
session_start();

$total = 0;
include '../config/dbconfig.php';
$order_id=$_GET['id'];
$id=$_SESSION['id'];
$sql = " SELECT order_items.order_id,order_items.pro_id,products.pro_name,order_items.quantity,products.quantity as pro_quantity FROM order_items

INNER JOIN products ON order_items.pro_id=products.pro_id
WHERE order_items.order_id=$order_id";
// echo "$sql";

$query = mysqli_query($conn,$sql);

$results = mysqli_fetch_all($query,MYSQLI_ASSOC);

foreach($results as $row) {
if($row['pro_quantity'] != NULL)
{
  
 $q=$row['pro_quantity'] - $row['quantity'];
 
   if($q >= 0)
   {
    echo $q;
   $sql="UPDATE `orders` SET `status` = '1' WHERE `orders`.`order_id` = $order_id";
   
       if(mysqli_query($conn,$sql))
       {
       $pro_id= $row['pro_id'];
        $sql="UPDATE `products` SET `quantity` = '$q' WHERE `pro_id` = '$pro_id'";
        
      
        $query=mysqli_query($conn,$sql);
        
       }
   }
   else{ 
    echo "nos";
    $sql="UPDATE `orders` SET `status` = '0' WHERE `orders`.`order_id` = $order_id";
    $quer=mysqli_query($conn,$sql);
       header('Location:../view_orders.php?msg=nostock'); 
       exit();
   } 
}

else 
{
    echo"hi";
    $sql="UPDATE `orders` SET `status` = '1' WHERE `orders`.`order_id` = $order_id";
    $query=mysqli_query($conn,$sql);

}
  

    
}
if(!$quer)
{

$sq="INSERT INTO `invoice`( `order_id`, `status`,`dist_id`,`man_id`) VALUES ('$order_id','0',NULL,'$id')";

$query=mysqli_query($conn,$sq);
if($query)
{
    $sql = "SELECT`invoice_id` FROM `invoice` ORDER BY `invoice`.`invoice_id`  DESC LIMIT 1";
    $query=mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    $sql="UPDATE `orders` SET `invoice_id` = '$result[invoice_id]' WHERE `orders`.`order_id` = $order_id";
    $query=mysqli_query($conn,$sql);
header('Location:../view_orders.php ');

}
}
?>