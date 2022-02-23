<?php 

session_start();

if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}

include 'config/dbconfig.php';
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
               <div class="main-panel">
   
   <div class="content-wrapper">
   <h3 class="text-center">Add Product</h3>
   <br>
   <form class="forms-sample" action="functions/add_product.php" method="POST">
  
   
               <div class="form-group">
                 <label for="exampleInputUsername1">product name</label>
                 <input type="text" class="form-control" id="exampleInputUsername1" placeholder="product name" name="pro_name">
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1"> product price </label>
                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="product price" name="pro_price">
               </div>
               <div class="form-group">
<h6>select categories</h6>
               <select name="catid" id="catid">
             <option value="" disabled selected>--- Select category ---</option>
   <?php
   include('config/dbconfig.php');
     $sql = 'SELECT * FROM categories';
     $query = mysqli_query($conn,$sql);

     $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
     foreach($results as $row) {
     ?>
     <option value="<?php echo $row["cat_id"]; ?>"><?php echo $row["cat_name"] ?></option>
     <?php } ?>
         </select>
             </div>
             <div class="form-group">
<h6>select unit</h6>
               <select name="unitid" id="unitid">
             <option value="" disabled selected>--- Select unit ---</option>
   <?php
   include('config/dbconfig.php');
     $sql = 'SELECT * FROM unit';
     $query = mysqli_query($conn,$sql);

     $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
     foreach($results as $row) {
     ?>
     <option value="<?php echo $row["unit_id"]; ?>"><?php echo $row["unit_name"] ?></option>
     <?php } ?>
         </select>
             </div>
               <div class="form-group">
               <label for="product:stock"><h6>Stock Management</h6> </label><br>
               <input type="radio" name="stock" value="1">Enable
     <input type="radio" name="stock" value="2">Disable
               </div>
               
               <div class="form-group">
                 <label for="exampleTextarea1">product discription</label>
                 <textarea class="form-control" id="exampleTextarea1" name="pro_desc" rows="4"></textarea>
               </div>
               <div class="form-group">
                        <label>File upload</label>
                      
                        <div class="input-group col-xs-12">
                          <input type="file"  name="pro_photo" class="form-control file-upload-info"  placeholder="Upload Image">
                          <span class="input-group-append">
                            <button  class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
               
               <!-- <div class="form-check form-check-flat form-check-primary">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input"> Remember me </label>
               </div> -->
               <button type="submit" class="btn btn-primary mr-2">Add Product</button>
               
             </form></div>
   </div>
   <!-- content-wrapper ends -->
   <!-- partial:../../partials/_footer.html -->

   <!-- partial -->
 </div>
 <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>-
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