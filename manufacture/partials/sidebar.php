
<?php

$id=$_SESSION['id'];
$pic = "SELECt * FROM manufacturer WHERE man_id='$id'";

 $query_pic = mysqli_query($conn,$pic);

 $result_pic = mysqli_fetch_assoc($query_pic);
// print_r($result);

?>

<nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="../images/<?php echo $result_pic['man_photo']?>" alt="#" width="100%" height="100%" onerror="this.src='../images/default.png'"/></div>
                        <div class="user_info">
                           <h6>Manufacture</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dash.php">> <span> Profile </span></a>
                           </li>
                           <!-- <li>
                              <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                           </li> -->
                        </ul>
                     </li>
                     <li><a href="view_retail.php"><i class="fa fa-clock-o orange_color"></i> <span>Retailers</span></a></li>
                     <!-- <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>General Elements</span></a></li>

 
 <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                           <li><a href="icons.html">> <span>Icons</span></a></li>
                           <li><a href="invoice.html">> <span>Invoice</span></a></li>
                        </ul>
                     </li> -->
                     <li><a href="view_distributor.php"><i class="fa fa-table purple_color2"></i> <span>Distributors</span></a></li>
                     <!--  -->
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Products</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                        <li><a href="add_product.php">> <span>Add Product</span></a></li>
                           <li><a href="view_product.php">> <span>Manage Products</span></a></li>
                           
                           <li><a href="manage_stock.php">> <span>Manage Stock</span></a></li>
                        </ul>
                     </li>
                     <li><a href="manage_unit.php"><i class="fa fa-briefcase blue1_color"></i> <span>Manage Unit</span></a></li>
                     <!-- <li>
                        <a href="">
                        <i class="fa fa-paper-plane red_color"></i> <span>Manage Category</span></a>
                     </li> -->
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Manage Category</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                        <li>
                              <a href="add_cat.php">> <span>Add Category</span></a>
                           </li>
                        <li>
                              <a href="manage_cat.php">> <span>View Category</span></a>
                           </li>
                           
                           <!-- <li>
                              <a href="login.html">> <span>Login</span></a>
                           </li>
                           <li>
                              <a href="404_error.html">> <span>404 Error</span></a>
                           </li> -->
                        </ul>
                     </li>
                     <li><a href="view_orders.php"><i class="fa fa-map purple_color2"></i> <span>Orders</span></a></li>
                     <li><a href="invoice_list.php"><i class="fa fa-bar-chart-o green_color"></i> <span>Invoice</span></a></li>
                     <li><a href="change_pass.php"><i class="fa fa-cog yellow_color"></i> <span>change password</span></a></li>
                  </ul>
               </div>
            </nav>