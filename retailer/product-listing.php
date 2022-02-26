<?php
            include('config/dbconfig.php');
            extract($_POST);
            $sql =" SELECT manufacturer.man_name,products.pro_id, pro_photo,products.pro_name, products.pro_price,unit.unit_name,categories.cat_name,quantity FROM products 
            INNER JOIN unit ON products.unit_id=unit.unit_id 
            INNER JOIN categories ON products.pro_cat=categories.cat_id
            INNER JOIN manufacturer ON products.man_id=manufacturer.man_id
             ";
            $sq="SELECT * FROM categories where status=1";
            $query = mysqli_query($conn,$sql);
            $quer = mysqli_query($conn,$sq);
            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            $result = mysqli_fetch_all($quer,MYSQLI_ASSOC);
            // print_r($results);
            
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
    <title>Bakery | Product List</title>
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
    <?php include('partials/navbar.php'); ?>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
        <!-- Heros-->
        <div class="ps-section--hero"><img src="images/hero/01.jpg" alt="">
            <div class="ps-section__content text-center">
                <h3 class="ps-section__title">OUR BAKERY</h3>
                <div class="ps-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Shop</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="ps-section--page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                        <div class="ps-shop-listing pt-80 pb-40">
                            <!-- <div class="ps-shop-features">
                      <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/012x.jpg" alt="">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/022x.jpg" alt="">
                            </div>
                      </div>
                    </div> -->
                            <div class="ps-shop-filter">
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                                        <div class="form-group">
                                            <!-- <label>Short by:</label>
                                <select class="ps-select" data-placeholder="Popupar product">
                                  <option value="01">Popular products</option>
                                  <option value="01">Item 01</option>
                                  <option value="02">Item 02</option>
                                  <option value="03">Item 03</option>
                                </select> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                                        <div class="form-group">
                                            <!-- <label>Show:</label>
                                <select class="ps-select" data-placeholder="Show:">
                                  <option value="01">SHOW</option>
                                  <option value="02">Item 02</option>
                                  <option value="03">Item 03</option>
                                </select> -->
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- <?php echo $sql; ?> -->


                            <div class="ps-shop">
                                <?php foreach($results as $row)
{
$one=$row['pro_price'];
$two = 76;
$sum = $one + $two;
// echo $sum;

  ?>

                                <div class="ps-product--list ps-product--list-large">
                                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href=""></a><img
                                            src="../images/<?php echo $row['pro_photo']; ?>" alt="">

                                    </div>
                                    <div class="ps-product__content">
                                        <h4 class="ps-product__title"><a href=""><?php echo $row['pro_name']; ?></a>
                                        </h4>
                                        <select class="ps-rating">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <p class="ps-product__price">
                                            <del><?php echo $sum; ?></del><?php echo $row['pro_price']; ?>
                                        <p>Manufactured By :<?php echo $row['man_name']; ?> <br>
                                            category : <?php echo $row['cat_name']; ?>
                                        </p>
                                        <footer class="ps-product__footer clearfix"><a class="ps-btn ps-btn--sm"
                                                href="create_order.php">Order now<i class="fa fa-angle-right"></i></a>
                                            <ul class="ps-product__action">
                                                <li><a href="#" data-tooltip="Add to wishlist"><i
                                                            class="ps-icon--heart"></i></a></li>
                                                <li><a href="#" data-tooltip="Compare"><i
                                                            class="ps-icon--reload"></i></a></li>
                                            </ul>
                                        </footer>
                                    </div>
                                </div>





                                <?php } ?>


                                <!-- 
        <tr>
        <td></td>
            <td><</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
           

        </tr>

      -->






                            </div>
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
                        <div class="ps-sidebar">
                            <aside class="ps-widget ps-widget--sidebar ps-widget--search">

                                </form>
                            </aside>
                            <aside class="ps-widget ps-widget--sidebar ps-widget--category">
                                <div class="ps-widget__header">
                                    <h3 class="ps-widget__title">CATEGORY</h3>
                                </div>
                                <div class="ps-widget__content">
                                    <ul class="ps-list--circle">
                                        <li class="current"><a href="product-listing.php"><span
                                                    class="circle"></span>All bakery</a></li>

                                        <?php foreach($result as $row) {
  ?>
                                        <li><a href="view_cat.php?id=<?php echo $row['cat_id']; ?>"><span
                                                    class="circle"></span><?php echo $row['cat_name']; ?> </a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="ps-widget ps-widget--sidebar ps-widget--filter">

                            </aside>
                            <!-- <aside class="ps-widget ps-widget--sidebar ps-widget--ads">
                                <div class="ps-widget__header">
                                  <h3 class="ps-widget__title">Ads Banner</h3>
                                </div>
                                <div class="ps-widget__content"><img src="images/widget/banner2x.png" alt=""></div>
                              </aside> -->
                            <!-- <aside class="ps-widget ps-widget--sidebar ps-widget--best-seller">
                                <div class="ps-widget__header">
                                  <h3 class="ps-widget__title">Best seller</h3>
                                </div>
                                <div class="ps-widget__content">
                                  <div class="ps-product--sidebar">
                                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-12.jpg" alt=""></div>
                                    <div class="ps-product__content">
                                      <h4 class="ps-product__title"><a href="product-detail.html">Amazin’ Glazin’</a></h4>
                                      <p class="ps-product__price">
                                        <del>£25.00</del>£15.00
                                      </p><a class="ps-btn ps-btn--xs" href="product-detail.html">Purchase</a>
                                    </div>
                                  </div>
                                  <div class="ps-product--sidebar">
                                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-3.jpg" alt=""></div>
                                    <div class="ps-product__content">
                                      <h4 class="ps-product__title"><a href="product-detail.html">The Crusty Croissant</a></h4>
                                      <p class="ps-product__price">
                                        <del>£25.00</del>£15.00
                                      </p><a class="ps-btn ps-btn--xs" href="product-detail.html">Purchase</a>
                                    </div>
                                  </div>
                                  <div class="ps-product--sidebar">
                                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="images/cake/img-cake-7.jpg" alt=""></div>
                                    <div class="ps-product__content">
                                      <h4 class="ps-product__title"><a href="product-detail.html">The Rolling Pin</a></h4>
                                      <p class="ps-product__price">
                                        <del>£25.00</del>£15.00
                                      </p><a class="ps-btn ps-btn--xs" href="product-detail.html">Purchase</a>
                                    </div>
                                  </div>
                                </div>
                              </aside> -->

                            <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
                            <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
                            <script type="text/javascript" src="plugins/overflow-text.js"></script>
                            <script type="text/javascript" src="plugins/masonry.pkgd.min.js"></script>
                            <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
                            <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js">
                            </script>
                            <script type="text/javascript"
                                src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
                            <script type="text/javascript"
                                src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
                            <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
                            <script type="text/javascript" src="plugins/moment.js"></script>
                            <script type="text/javascript"
                                src="plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
                            </script>
                            <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
                            <script type="text/javascript" src="plugins/gmap3.min.js"></script>
                            <script type="text/javascript"
                                src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
                            <script type="text/javascript"
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB">
                            </script>
                            <!-- Revolution - slider-->
                            <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js">
                            </script>
                            <script type="text/javascript"
                                src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
                            <script type="text/javascript"
                                src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
                            <script type="text/javascript"
                                src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
                            <script type="text/javascript"
                                src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js">
                            </script>
                            <script type="text/javascript"
                                src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
                            <script type="text/javascript"
                                src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
                            <script type="text/javascript"
                                src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
                            <!-- Custom scripts-->
                            <script type="text/javascript" src="js/main.js"></script>
</body>

</html>