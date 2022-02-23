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
                    <h4 class="card-title">unit</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> unit  id </th>
                            <th> unit name </th>
                            <th> unit details </th>
                           

                          </tr>
                        </thead>
                        <tbody>
                        <?php
            include('config/dbconfig.php');
            $sql = 'SELECT * FROM unit';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>

        <tr>
            <td><?php echo $row['unit_id']; ?></td>
            <td><?php echo $row['unit_name']; ?></td>
            <td><?php echo $row['unit_details']; ?></td>
            
           
            <td><a class="btn btn-sm btn-primary" id="btn-update" href="update_unit.php?id=<?php echo $row['unit_id']; ?>" </a> Update</td> 
            <td> <a class="btn btn-sm btn-danger" id="btn-delete" href="functions/delete_unit.php?id=<?php echo $row['unit_id']; ?>"<i class="fas fa-trash"></i> Delete</a></td> 
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
              <td><a class="btn btn-sm btn-success" id="btn-update" href="add_unit.php" </a> Add unit</td></table>
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