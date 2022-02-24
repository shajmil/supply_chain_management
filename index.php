<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Fiction Multipage Bootstrap Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css" />
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="plugins/themefisher-fonts/themefisher-fonts.css" />
    <!-- Light Box -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css" />
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css" />
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css" />

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css/style.css" />

    <style>
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ddd;
        ;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #facd8a;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: transparent;
    }
    </style>
    </style>
    <script src="plugins/modernizr.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->

    <!-- Loader to display before content Load-->
    <div class="loading">
        <!-- <img src="img/loader.gif" alt=""> -->

        <div class="windows8 loading-position">
            <div class="wBall" id="wBall_1">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_2">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_3">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_4">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_5">
                <div class="wInnerBall"></div>
            </div>
        </div>
    </div>

    <!-- Navigation -section
  =========================-->
    <nav class="navbar navbar-fixed-top navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.html">
                    <!-- <img src="images/logo-yellow.png" alt="" /> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right menu">
                    <div class="dropdown">
                        <li><a href="index.php">Home</a></li>
                    </div>
                    <!-- <li><a href="services.html">Signup</a></li> -->
                    <div class="dropdown">
                        <li> <button class="dropbtn">Signup</button></li>
                        <div class="dropdown-content">

                            <a href="manufacture/register.php">Manufacture</a>
                            <a href="retailer/register.php">Retailer</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <li> <button class="dropbtn">SignIn</button></li>
                        <div class="dropdown-content">
                            <a href="admin/index.php">Admin</a>
                            <a href=" manufacture/index.php ">Manufacture</a>
                            <a href="retailer/index.php">Retailer</a>
                        </div>
                    </div>
                    <!-- <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <!-- Hero Area -section
=========================-->
    <header class="hero-video th-fullpage" data-parallax="scroll" data-vide-bg="video/1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        Welcome to <br />
                        Supply Chain Management System
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Case Study Sections
  =========================-->


    <!-- Clients Logo Sections
  =========================-->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="footer-top">
                        <div class="col-md-4">
                            <!-- footer About section
                            ========================== -->
                            <div class="footer-about">
                                <h3 class="footer-title">About</h3>
                                <p>

                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- footer Address section
                            ========================== -->
                            <div class="footer-address">
                                <h3 class="footer-title">Developer</h3>
                                <p>Shajmil vj </p>
                                <p class="contact-address">
                                    Contact us :
                                    <a href="tel:+610383666274">9645685457</a> <br />
                                    Write us :
                                    <a href="mailto:info@info.com">v.jshejmil@gmail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- footer Media link section
                            ========================== -->
                            <div class="footer-social-media">
                                <h3 class="footer-title">Keep in touch</h3>
                                <ul class="footer-media-link">
                                    <li>
                                        <a href="#"><i class="tf-ion-social-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-social-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-social-linkedin-outline"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-social-google-outline" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="tf-ion-social-instagram-outline"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="footer-nav text-center">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="text-center">
                        <div class="col-md-12">
                            <div class="copyright">
                                <!-- <p>
                                    &copy;  All rights reserved. <br />
                                    Design and Developed By
                                    <a href="https://themefisher.com">Themefisher.com</a>
                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="plugins/jquery.min.js"></script>

    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <script src="js/script.js"></script>
</body>

</html>

<script>
/* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById('myDropdown').classList.toggle('show');
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById('myDropdown');
        if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
        }
    }
};
</script>