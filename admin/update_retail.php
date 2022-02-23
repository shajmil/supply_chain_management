<?php
include 'config/dbconfig.php';

$update_id = $_GET['id'];

$sql = "SELECt * FROM retail,area WHERE retail_id=$update_id";

 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
// print_r($result);
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
        <div class="main-panel">
   
          <div class="content-wrapper">
          <h3 class="text-center">Add Retailer</h3>
          <br>
          <form class="forms-sample" action="functions/update_retail.php" method="POST">
          <input type="hidden" name="update_id" value="<?php echo $update_id; ?>">
                      <div class="form-group">
                        <label for="exampleInputUsername1">username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="retail_username" value="<?php echo $result['retail_username']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="retail_password" value="<?php echo $result['retail_password']; ?>">
                      </div>
                      <div class="form-group">
                      <label>select area</label>
                      <?php
include 'config/dbconfig.php';

$update_id = $_GET['id'];

$sql = "SELECT * FROM area WHERE area_id IN 
(SELECT area_id FROM retail where retail_id='$update_id')";



 $query = mysqli_query($conn,$sql);

 $resul = mysqli_fetch_assoc($query);
 
// print_r($resul);
?>
                      <select name="areaid" id="areaid">
                     
                      <option value="<?php echo $resul['area_id']; ?>" selected ><?php echo $resul['area_code']; ?></option>
					
                   
          <?php
          include('config/dbconfig.php');
          $sql = 'SELECT * FROM area';
            $query = mysqli_query($conn,$sql);
            

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC); 
          
            
            foreach($results as $row) {
            ?>
              
            <option value="<?php echo $row["area_id"]; ?>"><?php echo $row["area_code"]." (".$row["area_name"].")"; ?></option>
			<?php } ?>
				</select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>   
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="retail_email" value="<?php echo $result['retail_email']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Phone" name="retail_phone" value="<?php echo $result['retail_phone']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">address</label>
                        <textarea class="form-control" id="exampleTextarea1" name="retail_address" rows="4"> <?php echo $result['retail_address']; ?></textarea>
                      </div>
                      
                      
                      <!-- <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div> -->
                      <button type="submit" class="btn btn-primary mr-2">Add Retailer</button>
                      
                    </form></div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
        <?php include 'partials/_footer.php'; ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>-
    <!-- container-scroller -->
    <!-- plugins:js -->
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