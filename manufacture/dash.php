
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
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    
                                    <h2>User profile</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img"><img width="180" class="rounded-circle" src="../images/<?php echo $result['man_photo']?> " alt="#" width="180" height="180"  onerror="this.src='../images/default.png'"/></div>
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3><?php  echo $result['man_name'] ?></h3>
                                                <p><strong>Username: </strong><?php echo $result['username']?></p>
                                                <p><strong>ID: </strong><?php echo $result['man_id']?></p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : <?php echo $result['man_email']?></li>
                                                   <li><i class="fa fa-phone"></i> : <?php echo $result['man_phone']?></li>
                                                </ul>
                                             </div>
                                            
                                          </div>
                                       </div>
                                       <!-- profile contant section -->
                                       <div class="full inner_elements margin_top_30">
                                          <div class="tab_style2">
                                             <div class="tabbar">
                                                <nav>
                                                   <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent_activity" role="tab" aria-selected="true">Recent Orders</a>
                                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_worked" role="tab" aria-selected="false">Recent Products</a>
                                                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#profile_section" role="tab" aria-selected="false">Profile</a>
                                                   </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                   <div class="tab-pane fade show active" id="recent_activity" role="tabpanel" aria-labelledby="nav-home-tab">
                                                      <div class="msg_list_main">
                                                         <ul class="msg_list">
                                                         <?php
            include('config/dbconfig.php');
            
           
$sq =" SELECT  orders.order_id,retail.retail_username,orders.date,orders.status FROM orders
INNER JOIN retail  ON orders.retailer_id=retail.retail_id
WHERE orders.man_id=$id  ORDER BY order_id DESC LIMIT 3 ";

$quer = mysqli_query($conn,$sq);  
$re = mysqli_fetch_all($quer,MYSQLI_ASSOC);
foreach($re as $r) {
?>
           
                                                            <li>
                                                               <span>
                                                                  
                                                               <span class="name_user"><?php echo $r['retail_username']; ?></span>
                                                               <?php
                                                               $order_id=  $r['order_id'];
                                                                $sqli = " SELECT order_items.order_id,retail.retail_username,retail.retail_address,retail.retail_phone,retail.retail_email,orders.date,orders.status,order_items.quantity,products.pro_name,products.pro_price,orders.total_amount FROM order_items
                                                                INNER JOIN orders  ON order_items.order_id=orders.order_id
                                                                INNER JOIN products ON order_items.pro_id=products.pro_id
                                                                INNER JOIN retail  ON orders.retailer_id=retail.retail_id
                                                                WHERE order_items.order_id=$order_id   ORDER BY order_id DESC LIMIT 5 ";
                                                                $queryi = mysqli_query($conn,$sqli);
                                                    
                                                                $resultsi = mysqli_fetch_all($queryi,MYSQLI_ASSOC);
                                                                foreach($resultsi as $row) {
                                                   
                                                    ?>
                                                               <span class="msg_user"><?php echo $row['pro_name'].","; ?></span>
                                                               <span class="time_ago"><?php echo $row['total_amount']; ?></span>
                                                              <?php } ?>
                                                               </span>
                                                            </li>
                                                          <?php } ?>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="project_worked" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                   <div class="msg_list_main">
                                                         <ul class="msg_list">
                                                         <?php
            include('config/dbconfig.php');
            
            $pro_sql =" SELECT products.pro_id, products.pro_name,pro_photo, products.pro_price,unit.unit_name,categories.cat_name,quantity FROM products 
            INNER JOIN unit ON products.unit_id=unit.unit_id 
            INNER JOIN categories ON products.pro_cat=categories.cat_id
             WHERE products.man_id=$id order BY pro_id desc limit 3";
           
            $pro_query = mysqli_query($conn,$pro_sql);

            $pro_results = mysqli_fetch_all($pro_query,MYSQLI_ASSOC);
            // print_r($results);
// echo $pro_sql;
            foreach($pro_results as $p_row) {
            ?>
               
           
                                                            <li>
                                                               <span>
                                                               <span><img src="../images/<?php echo $p_row['pro_photo']; ?>" class="img-responsive" alt="#" /></span>

                                                               <span class="name_user"><?php echo $p_row['pro_name']; ?></span>
                                                                   <span class="msg_user"><?php echo $p_row['cat_name']; ?></span>
                                                               <span class="time_ago"><?php echo $p_row['pro_price']; ?></span>
                                                        
                                                               </span>
                                                            </li>
                                                          <?php } ?>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="profile_section" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                   <a class="btn btn-sm btn-primary" id="btn-update" href="update_profile.php?id=<?php echo $id ?>" > Update Profile </a>

                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- end user profile section -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
                        <!-- end row -->
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