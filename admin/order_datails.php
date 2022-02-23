<?php 

session_start();

if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}
$total = 0;
include 'config/dbconfig.php';
$order_id=$_GET['id'];

$sq =" SELECT order_items.order_id,retail.retail_username,retail.retail_address,retail.retail_phone,retail.retail_email,orders.date,orders.status,order_items.quantity,products.pro_name,orders.total_amount FROM order_items
 INNER JOIN orders  ON order_items.order_id=orders.order_id
 INNER JOIN products ON order_items.pro_id=products.pro_id
 INNER JOIN retail  ON orders.retailer_id=retail.retail_id
 WHERE order_items.order_id=$order_id";
 
$quer = mysqli_query($conn,$sq);  
$result = mysqli_fetch_assoc($quer);
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
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">manufacturer</h4>
                   
                    <div class="table-responsive">
                    <div class="container-fluid">
                     
                     <!-- row -->
                     
                        <!-- invoice section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <br>
                                    <h2><i class="fa fa-file-text-o"></i> Order ID : <?php echo $_GET['id']; ?> </h2>
                                 </div>
                              </div>
                              <div class="full">
                                 <div class="invoice_inner">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                             <h4>Status: <?php 
      if($result['status'] == 0){
      echo "pending";}else{
        echo"completed";  
      } ?></h4>
                                             <p><strong> <?php echo $result['retail_username']; ?></strong><br>  
                                             <?php echo $result['retail_address']; ?><br> 
                                                 
                                                <strong>Phone : </strong> <?php echo $result['retail_phone']; ?><br>  
                                                <strong>Email : </strong><?php echo $result['retail_email']; ?></a>
                                             </p>
                                          </div>
                                       </div>
                                      
                                    </div>
                                 </div>
                              </div>
                              <div class="full padding_infor_info">
                                 <div class="table_row">
                                    <div class="table-responsive">
                                       <table class="table table-striped">
                                          <thead>
                                             <tr>
                                            
                                                <th>Products</th>
                                                <th>unit price</th>
                                                <th>quantity</th>
                                                <th>amount</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                          <?php
          include('config/dbconfig.php');
            $sql = " SELECT order_items.order_id,retail.retail_username,retail.retail_address,retail.retail_phone,retail.retail_email,orders.date,orders.status,order_items.quantity,products.pro_name,products.pro_price,orders.total_amount FROM order_items
            INNER JOIN orders  ON order_items.order_id=orders.order_id
            INNER JOIN products ON order_items.pro_id=products.pro_id
            INNER JOIN retail  ON orders.retailer_id=retail.retail_id
            WHERE order_items.order_id=$order_id";
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
$total= $row['pro_price'] * $row['quantity'];


            ?>
                                             <tr>
                                                <td><?php echo $row['pro_name']; ?></td>
                                                <td><?php echo $row['pro_price']; ?></td>
                                                <td><?php echo $row['quantity']; ?></td>
                                                <td><?php echo number_format($total,2) ?></td>
                                                
                                             </tr>
                                           <?php } ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                    
                        <div class="col-md-6">
                           <div class="full white_shd">
                              <div class="full graph_head">
                                 <br>
                                 <div class="heading1 margin_0">
                                        <h3>       &nbsp;  &nbsp;  &nbsp;   Total Amount</h3>
                                 </div>
                              </div>
                              <div class="full padding_infor_info">
                                 <div class="price_table">
                                    <div class="table-responsive">
                                       <table class="table">
                                          <tbody>
                                            
                                             <tr>
                                                <th>&nbsp;  &nbsp;  &nbsp; Total:   <?php echo $result['total_amount']; ?></th>
                                                <?php 
                                                 if($result['status'] == 0){
                                                 ?>
                                                    
                                                   <?php  } ?>

                                                
                                                </tr>
                                            
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
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