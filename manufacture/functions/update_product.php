<?php

include '../config/dbconfig.php';


extract($_POST);


session_start();
$id=$_SESSION['id'];
$sql = "UPDATE products SET pro_name='$pro_name', pro_desc='$pro_desc',pro_price='$pro_price',pro_cat='$catid',unit_id='$unitid',man_id='$id' WHERE pro_id=$update_id"; 

if(mysqli_query($conn,$sql)){

    // print_r('$arrayQuantity');
// echo $sql;
    header('Location:../view_product.php'); 

}else{
    echo "error";
}
