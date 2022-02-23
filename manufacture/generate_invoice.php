<?php 

session_start();

if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}
$total = 0;
include 'config/dbconfig.php';
$order_id=$_GET['id'];
$man_id=$_SESSION['id'];
$sq =" SELECT order_items.order_id,retail.retail_username,retail.retail_address,retail.retail_phone,retail.retail_email,orders.date,orders.status,order_items.quantity,products.pro_name,orders.total_amount FROM order_items
 INNER JOIN orders  ON order_items.order_id=orders.order_id
 INNER JOIN products ON order_items.pro_id=products.pro_id
 INNER JOIN retail  ON orders.retailer_id=retail.retail_id
 WHERE order_items.order_id=$order_id";
 
$quer = mysqli_query($conn,$sq);  
$result = mysqli_fetch_assoc($quer);
$s = " SELECT invoice.order_id,invoice.status  FROM invoice

WHERE invoice.order_id=$order_id";


$q = mysqli_query($conn,$s);

$r = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html lang="en">

   <head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

<link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">

<script src="sweetalert2/dist/sweetalert2.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
          <?php include('partials/sidebar.php'); ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <?php include 'partials/navbar.php'; 
?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     
                     <!-- row -->
                     <div class="row">
                        <!-- invoice section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2><i class="fa fa-file-text-o"></i> Order ID : <?php echo $_GET['id']; ?> </h2>
                                 </div>
                              </div>
                              <div class="full">
                                 <div class="invoice_inner">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                             <h4>INVOICE </h4>
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
                                 <div class="heading1 margin_0">
                                    <h2>Total Amount</h2>
                                 </div>
                              </div>
                              <div class="full padding_infor_info">
                                 <div class="price_table">
                                    <div class="table-responsive">
                                       <table class="table">
                                          <tbody>
                                            
                                             <tr>
                                                <th>Total:   <?php echo $result['total_amount']; ?></th>
                                             
                                                    
                                                  

                                                
                                                </tr>
                                            <tr>
                                            <?php 
                                                 if($r['status'] == 0){
                                                 ?>
                                            <form class="forms-sample" action="functions/confirm_invoice.php" method="POST">
          <h6>select distributor</h6>
          <select name="disid" id="disid">
					<option value="" disabled selected>--- distributor ---</option>
          <?php
          include('config/dbconfig.php');
            $sql = 'SELECT * FROM distributor';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>
            <option value="<?php echo $row["dist_id"]; ?>"><?php echo $row["dist_name"] ?></option>
			<?php } ?>
				</select>
            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
                &nbsp; <INPUT type="submit" class="btn btn-sucess" value="generate invoice">
                    </form>
                                            </tr>
                                            <?php  } ?>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>