<?php

include('../config/dbconfig.php');
extract($_POST);
$rs=0;
if($stock == 1)
{
$sql=" INSERT INTO products( pro_name,pro_desc,pro_price,pro_cat,unit_id,quantity,man_id,pro_photo) VALUES ('$pro_name','$pro_desc','$pro_price','$catid','$unitid','$rs','$manid','$pro_photo')";
}
else
{
    $sql=" INSERT INTO products( pro_name,pro_desc,pro_price,pro_cat,unit_id,quantity,man_id,pro_photo) VALUES ('$pro_name','$pro_desc','$pro_price','$catid','$unitid',NULL,'$manid','$pro_photo')";
 
}
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../dash.php");    

}
else {
    echo "error";
}
?>
