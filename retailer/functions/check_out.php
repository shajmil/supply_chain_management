
<?php
session_start();
$date = date('y-m-d');
$retail_id=$_SESSION['reatil_id'];
$man_id=$_SESSION['man_id'];
$total=$_SESSION["total"];
print_r($_SESSION["shopping_cart"]);
// print_r($_SESSION["total"]);
include('../config/dbconfig.php');
extract($_POST);
  
$sql=" INSERT INTO orders( date,retailer_id,man_id,total_amount) VALUES ('$date','$retail_id','$man_id','$total')";
echo $sql;
if(mysqli_query($conn,$sql))
{
    $order = "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1";
    $result = mysqli_query($conn,$order);
    $row =mysqli_fetch_array($result);
    $order_id = $row[0];
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
       $id=$values["item_id"];
       $quantity=$values["item_quantity"];
    $sq="INSERT INTO order_items(order_id,pro_id,quantity) VALUES('$order_id','$id','$quantity')";
      echo $sq;
     $quary= mysqli_query($conn,$sq);
    }
if($quary){
    unset($_SESSION['shopping_cart']);
header("Location:../view_order.php?status=check");
}
}

else {
    echo "error";
}
?>
