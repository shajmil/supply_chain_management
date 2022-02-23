<?php

include '../config/dbconfig.php';


extract($_POST);
session_start();
$id=$_SESSION['id'];

$arrayQuantity = $_POST['txtQuantity'];
foreach($arrayQuantity as $key => $value) {
  $queryUpdateStock = "UPDATE products SET quantity='$value' WHERE pro_id='$key'";
  $result = mysqli_query($conn,$queryUpdateStock);
// $sql = "UPDATE products SET quantity='$stock' WHERE pro_id IN $newString";
// echo $sql; 
}

if($result){

// print_r($arrayQuantity);
// echo $sql;
    header('Location:../manage_stock.php'); 

}else{
    echo "error";
}



// $ids = explode(' ',$id_list);
// unset($ids[count($ids)-1]);

// $lastValue = end($ids);


// $newString = "(";
// foreach($ids as $id){
//   if($id == $lastValue){
//    $newString.=$id;
//   }else{
//     $newString.=$id.",";
//   }
// }
// $newString.=")";