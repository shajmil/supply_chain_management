<?php
session_start();


include('config/dbconfig.php');

extract($_POST);
$search = $_POST['search'];

if($search == 'completed')
{
    $search =1; 
    $sq =" SELECT orders.order_id, orders.date,manufacturer.man_name,orders.status,retail.retail_username FROM orders 
    INNER JOIN manufacturer ON orders.man_id=manufacturer.man_id
    INNER JOIN retail ON orders.retailer_id=retail.retail_id where orders.status LIKE '%{$search}%' ORDER BY orders.order_id Desc";
// echo $sq;
$quer = mysqli_query($conn,$sq);  
$result = mysqli_fetch_all($quer,MYSQLI_ASSOC);  
}else if($search == 'pending')
{
    $search =0;   
    $sq ="   SELECT orders.order_id, orders.date,manufacturer.man_name,orders.status,retail.retail_username FROM orders 
    INNER JOIN manufacturer ON orders.man_id=manufacturer.man_id
    INNER JOIN retail ON orders.retailer_id=retail.retail_id where orders.status LIKE '%{$search}%' ORDER BY orders.order_id Desc";
//    echo $sq;//
   $quer = mysqli_query($conn,$sq);  
   $result = mysqli_fetch_all($quer,MYSQLI_ASSOC); 
}else if($search == 'delivered')
{
    $search =2;   
    $sq ="  SELECT orders.order_id, orders.date,manufacturer.man_name,orders.status,retail.retail_username FROM orders 
    INNER JOIN manufacturer ON orders.man_id=manufacturer.man_id
    INNER JOIN retail ON orders.retailer_id=retail.retail_idwhere  orders.status LIKE  '%{$search}%' ORDER BY orders.order_id Desc";
//    echo $sq;
   $quer = mysqli_query($conn,$sq);  
   $result = mysqli_fetch_all($quer,MYSQLI_ASSOC); 
}else if($search == 'cancelled')
{
    $search =9;   
    $sq ="  SELECT orders.order_id, orders.date,manufacturer.man_name,orders.status,retail.retail_username FROM orders 
    INNER JOIN manufacturer ON orders.man_id=manufacturer.man_id
    INNER JOIN retail ON orders.retailer_id=retail.retail_id where orders.status LIKE'%{$search}%' ORDER BY orders.order_id Desc";
  
   $quer = mysqli_query($conn,$sq);  
   $result = mysqli_fetch_all($quer,MYSQLI_ASSOC); 
}else
{



$sq =" SELECT orders.order_id, orders.date,manufacturer.man_name,orders.status,retail.retail_username FROM orders 
INNER JOIN manufacturer ON orders.man_id=manufacturer.man_id
INNER JOIN retail ON orders.retailer_id=retail.retail_id where  (retail.retail_username LIKE '%{$search}%' || orders.date LIKE '%{$search}%' || orders.order_id LIKE '%{$search}%' || manufacturer.man_name LIKE '%{$search}%') ORDER BY orders.order_id Desc";
   echo $sq;
 
$quer = mysqli_query($conn,$sq);  
$result = mysqli_fetch_all($quer,MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include 'partials/_sidebar.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <?php include 'partials/_navbar.php'; ?>'
            <!-- partial -->
            <br><br><br><br>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ALL ORDERS</h4>

                        <div class="table-responsive">
                            <div style="text-align:right; border-top:1px " class="">
                                <form id="" action="search_ord.php" class=" " method="POST">
                                    <div class="">
                                        <br>
                                        <input type="text" name="search" class="" placeholder="Search">
                                        <button type="submit" class="btn btn-sm"><i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-dark" border="5">
                                <thead>
                                    <tr>
                                        <th>Order_id</th>
                                        <th>Date</>
                                        </th>
                                        <th>Manufacture name</th>
                                        <th>Retailer</th>
                                        <th>Status</h1>
                                        </th>
                                        <th>Details</th>
                                        <th>Invoice</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach($result as $row) {

if($row['status'] == 0){
     ?>
                                    <tr>
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['man_name']; ?></td>
                                        <td><?php echo $row['retail_username']; ?></td>
                                        <td><?php 
    
      echo "pending";
       ?></td>
                                        <td><a href="order_datails.php?id=<?php echo $row['order_id']; ?>">Details </a>
                                        </td>
                                        <td>
                                        </td>

                                    </tr>
                                    <?php } 
    if($row['status']==1)
    {
      $or=$row['order_id']; 
     $s=" SELECT invoice.status as invoice_status FROM invoice WHERE invoice.order_id=$or";
     $que = mysqli_query($conn,$s);  
     $result = mysqli_fetch_assoc($que);  
    //  print_r($result); 
    //  print_r ($result);    
                    ?>
                                    <tr>
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['man_name']; ?></td>
                                        <td><?php echo $row['retail_username']; ?></td>
                                        <td><?php 
         
            echo"completed";  
           ?></td>
                                        <td><a href="order_datails.php?id=<?php echo $row['order_id']; ?>">Details </a>
                                        </td>
                                        <td>
                                            <?php  if($result['invoice_status'] == 1){ ?>
                                            <a href="view_invoice.php?id=<?php echo $row['order_id']; ?>">Invoice </a>
                                            <?php }  ?>
                                        </td>

                                    </tr> <?php  }
if($row['status'] == 9){
  ?>
                                    <tr>
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['man_name']; ?></td>
                                        <td><?php echo $row['retail_username']; ?></td>
                                        <td><?php 
 
   echo "CANCELLED";
    ?></td>
                                        <td><a href="order_datails.php?id=<?php echo $row['order_id']; ?>">Details </a>
                                        </td>
                                        <td>
                                        </td>

                                    </tr>

                                    <?php } 
                                     if($row['status']==2 )
                                     {
                                       $or=$row['order_id']; 
                                      $s=" SELECT invoice.status as invoice_status FROM invoice WHERE invoice.order_id=$or";
                                      $que = mysqli_query($conn,$s);  
                                      $result = mysqli_fetch_assoc($que);  
                                     //  print_r($result); 
                                     //  print_r ($result);    
                                                     ?>
                                    <tr>
                                        <td><?php echo $row['order_id']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><?php echo $row['man_name']; ?></td>
                                        <td><?php echo $row['retail_username']; ?></td>
                                        <td><?php 
                                          
                                             echo"Delivered";  
                                            ?></td>
                                        <td><a href="order_datails.php?id=<?php echo $row['order_id']; ?>">Details </a>
                                        </td>
                                        <td>
                                            <?php  if($result['invoice_status'] == 1){ ?>
                                            <a href="view_invoice.php?id=<?php echo $row['order_id']; ?>">Invoice </a>
                                            <?php }  ?>
                                        </td>

                                    </tr>
                                    <?php
                                    }}
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>



            <script src="assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="assets/js/off-canvas.js"></script>
            <script src="assets/js/hoverable-collapse.js"></script>
            <script src="assets/js/misc.js"></script>
            <script src="assets/js/settings.js"></script>
            <script src="assets/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <!-- End custom js for this page -->
</body>

</html>