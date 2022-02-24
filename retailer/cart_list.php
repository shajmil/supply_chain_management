<?php
session_start();

include('config/dbconfig.php');
extract($_POST);
$man_id=$_SESSION['man_id'];


      $total=0;
            
    
$sql = "SELECT DISTINCT pro_cat,cat_name,cat_id FROM products,categories WHERE man_id = $man_id AND categories.cat_id=products.pro_cat;";
// $sq = 'SELECT * FROM unit';

$sq =" SELECT  products.pro_id, products.pro_name,man_name,man_phone,products.pro_cat,pro_photo,categories.cat_name,products.pro_price,unit.unit_name FROM products 
 INNER JOIN unit ON products.unit_id=unit.unit_id 
 INNER JOIN categories ON products.pro_cat=categories.cat_id
 INNER JOIN manufacturer ON products.man_id=manufacturer.man_id
 WHERE products.man_id=$man_id";
$query = mysqli_query($conn,$sql);
$results = mysqli_fetch_all($query,MYSQLI_ASSOC);
$quer = mysqli_query($conn,$sq);
$result = mysqli_fetch_all($quer,MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="#{author}">
    <meta name="keywords" content="#{keyword}">
    <meta name="description" content="#{description}">


    <title>Bakery | Cart</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.4/dist/sweetalert2.all.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CPacifico%7CVarela+Round%7CPoppins"
        rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/ps-icon/ps-icon.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->

<body class="page-init">
    <?php include('partials/navbar.php') ;?>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
        <div class="ps-section--hero"><img src="images/hero/03.jpg" alt="">
            <div class="ps-section__content text-center">
                <h3 class="ps-section__title">Menu</h3>
                <div class="ps-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Menu</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="ps-section--cart pt-100 pb-100">
            <div class="container">
                <div class="ps-cart-listing">
                    <p class="hidden-lg"><i>Slide right to view</i></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>All Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th> </th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
     
        //  echo $sq;
        //  echo $sql;
         foreach($result as $row) {
           
         ?>
                                <form action="functions/add_to_cart.php?action=add&id=<?php echo $row['pro_id']; ?>"
                                    method="post">

                                    <tr>
                                        <td>
                                            <div class="ps-product--cart"><img
                                                    src="../images/<?php echo $row['pro_photo']; ?>" alt=""></a>
                                                <center><?php echo $row['pro_name']; ?></center>
                                            </div>
                                        </td>
                                        <td><?php echo $row['pro_price']; ?></td>
                                        <td>
                                            <div class="form-group--number">

                                                <input type="hidden" name="manid" value="<?php echo $man_id; ?>">
                                                <input type="hidden" name="hidden_name"
                                                    value="<?php echo $row['pro_name']; ?> ">
                                                <input type="hidden" name="hidden_price"
                                                    value="<?php echo $row['pro_price']; ?> ">
                                                <!--  -->

                                                <input class="form-control" type="text" value="0" id="quantity"
                                                    name="quantity">



                                            </div>
                                        </td>

                                        <td><span class="total-row"></span>
                                            <input type="submit" name="add_to_cart" class="btn btn-primary"
                                                value="Add to Cart" />
                                </form>
                                </td>
                                <td>
                                    <div class="ps-cart-listing__remove"></div>
                                </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>


                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <br>
                                <h4>list</h4>

                                <div class="table-responsive">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th> ITEM NAME</th>
                                                <th> QUANTITY </th>
                                                <th> PRICE </th>
                                                <th> TOTAL </th>
                                                <th> ACTION </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
           if(!empty($_SESSION["shopping_cart"]))
           {
 $total=0;
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
   ?>
                                            <form action="functions/cart.php" method="POST">
                                                <tr>
                                                    <td><?php echo $values["item_name"];?></td>
                                                    <td><?php echo $values["item_quantity"];?></td>
                                                    <td><?php echo $values["item_price"];?></td>
                                                    <td><?php echo number_format($values["item_quantity"] * $values["item_price"],2) ;?>
                                                    </td>
                                                    <td><a
                                                            href="functions/add_to_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>">
                                                            <span class="text-danger">Remove</span></a></td>
                                                    </td>


                                                    <?php
 
$total= $total + ($values["item_quantity"] * $values["item_price"]);

}} ?>
                                                </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-cart__process">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                                <div class="form-group form-group--icon ps-cart__promotion">
                                    <div class="icon-wrap"><i class="fa fa-angle-right"></i>
                                        <input class="form-control" type="text" placeholder="promotion code">
                                    </div>
                                </div>
                                <div class="form-groupform-order">
                                    <a href="dash.php"> <button class="ps-cart__shopping">Continue
                                            Shopping</button></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">

                                <div class="ps-cart__total">

                                    <?php 
$_SESSION["total"]=number_format($total, 2);
print_r($_SESSION["total"]);

    ?>
                                    <input type="hidden" name="man_phone" value="<?php echo $row["man_phone"]; ?>" />
                                    <p>Total Price: <span> <?php echo number_format($total, 2); ?></span></p>
                                    <input type="submit" name="submit"
                                        class="ps-btn ps-btn--sm ps-btn--fullwidth">Process to checkout</input>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS Library-->
        <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="plugins/overflow-text.js"></script>
        <script type="text/javascript" src="plugins/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
        <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
        <script type="text/javascript" src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="plugins/moment.js"></script>
        <script type="text/javascript" src="plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
        </script>
        <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
        <script type="text/javascript" src="plugins/gmap3.min.js"></script>
        <script type="text/javascript" src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB">
        </script>
        <!-- Revolution - slider-->
        <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js">
        </script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js">
        </script>
        <script type="text/javascript"
            src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js">
        </script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js">
        </script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js">
        </script>
        <!-- Custom scripts-->
        <script type="text/javascript" src="js/main.js"></script>
        <script>
        var count = 0;
        var countEl = document.getElementById("count");

        function plus() {
            count++;
            countEl.value = count;
        }

        function minus() {
            if (count > 0) {
                count--;
                countEl.value = count;
            }
        }
        </script>

</body>

</html>