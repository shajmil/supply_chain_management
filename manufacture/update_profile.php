<?php 

session_start();
include 'config/dbconfig.php';


$update_id = $_GET['id'];

$sql = "SELECt * FROM manufacturer WHERE man_id=$update_id";

 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
// print_r($result);



if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}


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
   <h3 class="text-center">Update Profile</h3>
   <br>
   <form class="forms-sample" action="functions/update_profile.php" method="POST" >
               <div class="form-group">
               <input type="hidden" name="update_id" value="<?php echo $update_id; ?>">

                 <label for="exampleInputName1"> Name</label>
                 <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Your Name" name="man_name"  value="<?php echo $result['man_name']; ?>">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail3">Email</label></label>
                 <input type="email" class="form-control" id="exampleInputName1" placeholder="Enter Your Email" name="man_email"  value="<?php echo $result['man_email']; ?>">
               </div>
             
               <div class="form-group">
                 <label for="exampleInputEmail3">Phone </label></label>
                 <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Your Phone" name="man_phone"  value="<?php echo $result['man_phone']; ?>">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail3">Security Question </label></label>
                 <input type="textarea" class="form-control" id="exampleInputName1" placeholder="Enter Your Question" name="qstn"  value="<?php echo $result['qstn']; ?>">
               </div> <div class="form-group">
                 <label for="exampleInputEmail3">Answer </label></label>
                 <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Your Answer" name="ans"  value="<?php echo $result['ans']; ?>">
               </div>
             

               <button type="submit" class="btn btn-primary mr-2">Update Profile</button>
               
             </form>

             <form method="post" action="update_profile_photo.php">
                    <div class="d-flex justify-content-xl-end">
                    <input type="hidden" name="update_id" value="<?php echo $update_id; ?>">
                    <button type="submit" class="btn btn-primary mr-2">update photo</button>
                    </div></form>



  
               
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