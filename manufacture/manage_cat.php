
<?php 

session_start();

if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}

include 'config/dbconfig.php';

$id=$_SESSION['id'];
$sql = "SELECt * FROM manufacturer WHERE man_id='$id'";

 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
// print_r($result);

?>
<!DOCTYPE html>
<html lang="en">
   <head>
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
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page profile_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
         <?php include('partials/sidebar.php'); ?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <?php include('partials/navbar.php'); ?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">categories</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> category  id </th>
                            <th> category name </th>
                            <th> category details</th>
                           

                          </tr>
                        </thead>
                        <tbody>
                        <?php
            include('config/dbconfig.php');
            $sql = 'SELECT * FROM categories';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>

        <tr>
            <td><?php echo $row['cat_id']; ?></td>
            <td><?php echo $row['cat_name']; ?></td>
            <td><?php echo $row['cat_details']; ?></td>
            
           
            <td><a class="btn btn-sm btn-primary" id="btn-update" href="update_cat.php?id=<?php echo $row['cat_id']; ?>" </a> Update</td> 
            <td> <a class="btn btn-sm btn-danger" id="btn-delete" href="functions/delete_cat.php?id=<?php echo $row['cat_id']; ?>"<i class="fas fa-trash"></i> Delete</a></td> 
        </tr>
        
        <?php } ?>
        <div>
        <tr>
            <br>
        
        </tr>
  
    </div>
                        </tbody>
                      </table>
                    </div> <table>
              <!-- <td><a class="btn btn-sm btn-success" id="btn-update" href="add_cat.php" </a> Add category</td>-->
            </table> 
                  </div>
                 
                </div>
               
              </div>
              
                     <!-- footer -->
                     <div class="container-fluid">
                     <?php include('partials/footer.php'); ?>
                     </div>
                  </div>
                  <!-- end dashboard inner -->
               </div>
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
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
   </body>
</html>