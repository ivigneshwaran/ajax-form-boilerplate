<?php
include_once'includes/pack.php';
include_once'includes/slice.php';
?>
<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/promedi/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2019 07:56:42 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- IcoFont Min CSS -->
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Theme Default Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Jquery UI CSS -->
        <link rel="stylesheet" href="assets/css/jquery.ui.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- recaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <title>Dr. Lavanya | Cosmetologist in Chennai</title>
		
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="lds-heart">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader -->
    
        <!-- Main header -->
        <header class="main-header">
            <!-- Header info text-->
            <div class="header-info-text"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-8 col-lg-6"> 
                            <ul class="contact-info"> 
                                <li>
                                    <i class="icofont-phone"></i> 
                                    Call us: +44 458 7895
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i> 
                                    210 Quadra Street Victoria, Canada
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-lg-6"> 
                            <ul class="social-links"> 
                                <li>
                                    <a href="#">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header info text -->

            <!-- Navbar -->
            <div class="navbar-container header-sticky">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo2.jpg" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="home">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="about">About us</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Services
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="department-details">Cardiology</a>
                                        <a class="dropdown-item" href="department-details">Gynecology</a>
                                        <a class="dropdown-item" href="department-details">Neurology</a>
                                        <a class="dropdown-item" href="department-details">Orthopedics</a>
                                        <a class="dropdown-item" href="department-details">Gastrology</a>
                                        <a class="dropdown-item" href="department-details">Pulmonology</a>
                                        <a class="dropdown-item" href="department-details">Laboratory</a>
                                        <a class="dropdown-item" href="department-details">Urology</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faq">faq</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact">Contact us</a>
                                </li>
                            </ul>

                            <div class="appointment-inline my-lg-0">
                                <a href="appointment" class="appointment-btn">
                                    Make an Appointment 
                                    <i class="icofont-simple-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Navbar -->
        </header>
        <!-- End Main header -->
<?php 
    if(in_array($pg_key, $someMenus)){
        $breadcrum->bread($pg_key);
    }
?>