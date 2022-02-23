<?php

session_start();
include('../config/dbconfig.php');
extract($_POST);
$rs=0;
$id=$_SESSION['id'];
if($stock == 1)
{
    
    $sql=" INSERT INTO products( pro_name,pro_desc,pro_price,pro_cat,unit_id,quantity,man_id,pro_photo) VALUES ('$pro_name','$pro_desc','$pro_price','$catid','$unitid','$rs','$id','$pro_photo')";
   
}
else
{
    $sql=" INSERT INTO products( man_id,pro_name,pro_desc,pro_price,pro_cat,unit_id,quantity,pro_photo) VALUES ('$id','$pro_name','$pro_desc','$pro_price','$catid','$unitid',NULL,'$pro_photo') ";
 
}
if(mysqli_query($conn,$sql))
{
    // echo $sql;
     // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../view_product.php");    

}
else {
    echo "error";
}
?>
