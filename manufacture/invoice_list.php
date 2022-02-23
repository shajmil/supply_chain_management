<?php 

session_start();

$man_id=$_SESSION['id'];
if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}

include 'config/dbconfig.php';

$sql =" SELECT  invoice.invoice_id,invoice.date,invoice.order_id,invoice.status,invoice.dist_id,orders.man_id,distributor.dist_name FROM invoice
INNER JOIN distributor  ON invoice.dist_id=distributor.dist_id
INNER JOIN orders ON invoice.order_id=orders.order_id
 WHERE invoice.man_id=$man_id order by invoice.invoice_id ";

 
$query = mysqli_query($conn,$sql);  
$results = mysqli_fetch_all($query,MYSQLI_ASSOC);
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
               <?php include 'partials/navbar.php'; ?>
               <!-- end topbar -->
               <!-- dashboard inner -->
           
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>invoices</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>invoice id</th>
                                           
                                             <th>Date</th>
                                             <th>Retailer</th>
                                          
                            
                                           <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                   
                                       <?php foreach($results as $row) {
               
                ?>
                                          <tr>
                                             <td><?php echo $row['invoice_id']; ?></td>
                                            
                                             <td><?php echo $row['date']; ?></td>
                                             <?php
                                             $sq =" SELECT  orders.retailer_id, orders.invoice_id,retail.retail_username from orders
INNER JOIN retail ON orders.retailer_id=retail.retail_id
 WHERE  orders.invoice_id=$row[invoice_id];" ;
 $quer = mysqli_query($conn,$sq);  
 $result = mysqli_fetch_assoc($quer);
 ?>
  <td><?php echo $result['retail_username']; ?></td>
                                             
                                            
                                            <td><a href="functions/generate_invoice.php?id=<?php echo $row['order_id']; ?>">

                                            <?php if($row['status'] == 1){ 

echo"invoice"; 
                                            }?></a>
                                          
                                            </td>


                                          </tr>
                                         <?php } ?>

                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>/
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