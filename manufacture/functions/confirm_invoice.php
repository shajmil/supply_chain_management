<?php 

session_start();
include('../config/dbconfig.php');
            extract($_POST);
            $date = date('y-m-d');
            $sql ="UPDATE  `invoice` SET `date`='$date',`dist_id`='$disid', `status` = '1' WHERE `invoice`.`order_id` = $order_id";
            $sq = "UPDATE distributor set status = '1' WHERE `dist_id`='$disid'";
            // echo $sql;
            $query = mysqli_query($conn,$sq );

           if(mysqli_query($conn,$sql))
           {
header("Location:../view_orders.php");

           }

            // $sql = " SELECT order_items.order_id,retail.retail_username,retail.retail_address,retail.retail_phone,retail.retail_email,orders.date,orders.status,order_items.quantity,products.pro_name,products.pro_price,orders.total_amount FROM order_items
            // INNER JOIN orders  ON order_items.order_id=orders.order_id
            // INNER JOIN products ON order_items.pro_id=products.pro_id
            // INNER JOIN retail  ON orders.retailer_id=retail.retail_id
            // WHERE order_items.order_id=$order_id";
            ?>