<?php 

session_start();

if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}

include 'config/dbconfig.php';
$order_id=$_GET['id'];

$sq =" SELECT order_items.order_id,retail.retail_username,retail.retail_address,retail.retail_phone,retail.retail_email,orders.date,orders.status,order_items.quantity,products.pro_name,orders.total_amount,invoice.invoice_id,invoice.date FROM order_items
 INNER JOIN orders  ON order_items.order_id=orders.order_id
 INNER JOIN products ON order_items.pro_id=products.pro_id
 INNER JOIN retail  ON orders.retailer_id=retail.retail_id
 INNER JOIN invoice  ON orders.invoice_id=invoice.invoice_id
 WHERE order_items.order_id=$order_id";
 
$quer = mysqli_query($conn,$sq);  
$result = mysqli_fetch_assoc($quer);
$sql =" SELECT  invoice.date,invoice.order_id,invoice.status,invoice.dist_id,distributor.dist_name,distributor.dist_address,distributor.dist_phone,distributor.dist_email,manufacturer.man_id,manufacturer.man_name,manufacturer.man_phone,manufacturer.man_email FROM `invoice`
INNER JOIN distributor  ON invoice.dist_id=distributor.dist_id
INNER JOIN manufacturer  ON invoice.man_id=manufacturer.man_id
 WHERE invoice.order_id=$order_id";

 
$query = mysqli_query($conn,$sql);  
$results = mysqli_fetch_assoc($query);
$s =" SELECT  retail.retail_id, retail.retail_username, retail.retail_address, retail.retail_phone, retail.retail_email FROM orders
INNER JOIN retail  ON orders.retailer_id=retail.retail_id

 WHERE orders.order_id=$order_id";


$q = mysqli_query($conn,$s);  
$r = mysqli_fetch_assoc($q);
$retail_id=$r['retail_id'];
$si =" SELECT area.area_name FROM retail
INNER JOIN area  ON area.area_id=retail.area_id

 WHERE retail.retail_id=$retail_id";

$qi = mysqli_query($conn,$si);  
$ri = mysqli_fetch_assoc($qi);

?>
<!DOCTYPE html>
<html lang="en" background-color: #eeeeee>
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
    <style>
        body, html {
    overflow-x: hidden;
    padding-right: 0 !important;
    background-color: #eeeeee;
}
        body{
    margin-top:20px;
    background:#eee;
}

.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background:#072b37;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
    </style>
  </head>
  <body background-color: #eeeeee>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
  
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <!-- partial -->
      
                  &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;
   <br> <br> <br> <br> <br> <br>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
     <br><br>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
          Invoice Id  :<?php echo $result['invoice_id']; ?>
         </div>
            <div class="invoice-from">
               <small>from</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse"><?php echo $results['man_name']; ?></strong><br>
                  <?php echo $results['man_email']; ?><br>
                 
                  Phone:<?php echo $results['man_phone']; ?><br>
                 
               </address>
            </div>
            <div class="invoice-to">
               <small>to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse"><?php echo $r['retail_username']; ?></strong><br>
                  <?php echo $r['retail_address']; ?><br>
                 Area :  <?php echo $ri['area_name']; ?><br>
                  Phone: <?php echo $r['retail_phone']; ?><br>
                  email: <?php echo $r['retail_email']; ?>
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice / </small>
               <div class="date text-inverse m-t-5"><?php echo $result['date']; ?></div>
               <div class="invoice-detail">
             Invoice Id:  <?php echo $result['invoice_id']; ?><br>
                 Order Id: <?php echo $order_id; ?>
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th> PRODUCTS</th>
                        <th class="text-center" width="10%">AMOUNT</th>
                        <th class="text-center" width="10%">QUANTITY</th>
                        <th class="text-right" width="20%">TOTAL</th>
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

            $resu = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($resu as $row) {
$total= $row['pro_price'] * $row['quantity'];


            ?>
                     <tr>
                        <td>
                           <span class="text-inverse"><?php echo $row['pro_name']; ?></</span><br>
                        </td>
                        <td class="text-center"><?php echo $row['pro_price']; ?></td>
                        <td class="text-center"><?php echo $row['quantity']; ?></td>
                        <td class="text-right"><?php echo number_format($total,2) ?></td>
                     </tr>
                    <?php } ?>
                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <div class="sub-price">
                        <small></small>
                        <span class="text-inverse"></span>
                     </div>
                     <div class="sub-price">
                   
                     </div>
                     <div class="sub-price">
                        <small></small>
                        <span class="text-inverse"></span>
                     </div>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL</small> <span class="f-w-600"> <?php echo $result['total_amount']; ?></span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         <div class="invoice-note">
            <!-- * Make all cheques payable to [Your Company Name]<br> -->
            * Invoice are generated after successful payment<br>
            * If you have any questions concerning this invoice, contact  [<?php echo $results['man_name']; ?>, <?php echo $results['man_phone']; ?>, <?php echo $results['man_email']; ?>]
         </div>
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR YOUR BUSINESS
            </p>
            <!-- <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> matiasgallipoli.com</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:016-18192302</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> rtiemps@gmail.com</span>
            </p> -->
         </div>
         <!-- end invoice-footer -->
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