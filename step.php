<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/airdroop/step.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Airdroop - Airdrop Listing Html Template</title>

    <meta name="description" content="simple description for your site" />
<meta name="keywords" content="keyword1, keyword2" />
<meta name="author" content="ThemeMarshal" />

<!-- desktop bookmark -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- icons & favicons -->
<link rel="shortcut icon" type="image/x-icon"  href="assets/img/favicon/favicon.ico"/>  <!-- this icon shows in browser toolbar -->
<link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/> <!-- this icon shows in browser toolbar -->
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

<!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
<!--[if lt IE 9]>
<script src="assets/vendor/css3-mediaqueries-js/css3-mediaqueries.js"></script>
<![endif]-->

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

<!-- Magnific Popup -->
<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

<!-- DCalendar -->
<link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css" />

<!-- Nice Select CSS -->
<link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css" />

<!-- OwlCarousel CSS -->
<link rel="stylesheet" href="assets/vendor/OwlCarousel2/assets/owl.carousel.min.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />

<!-- FontAwesome CSS -->
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css" />

<!-- MODERNIZER  -->
<script src="assets/vendor/modernizr/modernizr-custom.js"></script>

<!-- Main Master Style  CSS  -->
<link id="cbx-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all" />
</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started.
    Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

<!--== Search Box Area Start ==-->
<div class="search-box-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  m-auto">
                <div class="search-form-wrap">
                    <form action="#" method="post">
                        <input type="search" placeholder="type keyword and hit enter" />
                        <i class="cursor"></i>
                        <button class="btn sr-only"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="search-close-btn">
        <a href="#" class="close-btn search-close-btn"><img src="assets/img/icons/cancel.png" alt="Cancel" /></a>
    </div>
</div>
<!--== Search Box Area End ==-->

<!-- Login Modal Start -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Welcome Back !</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-content-wrap airdrop-form">
                    <form action="#" method="post">
                        <div class="single-input-item">
                            <input type="text" placeholder="Username"/>
                        </div>

                        <div class="single-input-item">
                            <input type="password" placeholder="Password"/>
                        </div>

                        <div class="single-input-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                       id="remember">
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                        </div>

                        <div class="single-input-item">
                            <button class="btn btn-gradiant">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Modal End -->

<!--== Header Area Start ==-->
<header id="header-area">
    <!-- Preheader Area Start -->
    <div class="preheader-area d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="preheader-content-wrap d-flex">
                        <img src="assets/img/images/pre-ads-logo.png" alt="Ads Logo"/>
                        <h2 class="h5">JOIN WITH US & GET <span>20% - 50% BONUS</span></h2>
                        <a href="#" class="btn btn-green">Join</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preheader Area End -->

    <!-- Navigation Area Start -->
    <div class="header-navigation" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-xl">
                        <a class="navbar-brand" href="index-2.php">
                            <img src="assets/img/logo.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#mainMenu">
                            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mainMenu">
                            <ul class="navbar-nav ml-auto">
                                <li class="current"><a href="index-2.php">Home</a></li>
                                <li><a href="airdrop-listing.php">Airdrops</a></li>
                                <li><a href="submit.php">Submit Airdrop</a></li>
                                <li><a href="single-company.php">Company Profile</a></li>
                                <li><a href="news.php">News</a></li>
                            </ul>
                            <div class="member-area">
                                <a href="#" class="btn btn-brand" data-toggle="modal" data-target="#loginModal" role="button">Login</a>
                                <a href="step.php" class="btn btn-blue">Singup</a>
                                <a href="#" class="btn btn-round btn-search"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Area End -->
</header>
<!--== Header Area End ==-->

<!--== Currency Rate Area Start ==-->
<div id="currency-rate-area">
    <div class="currency-rate-slider">
        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-up">(+5.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a  href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-up">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-up">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-up">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-up">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-up">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->

        <!-- Single Currency Rate Start -->
        <a href="single-airdrop.php" class="single-currency-rate">
            <p><strong>ETH:</strong>€ 9,953.72 <span class="groth-down">(+1.33%)</span></p>
        </a>
        <!-- Single Currency Rate End -->
    </div>
</div>
<!--== Currency Rate Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper">
    <div class="step-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Step Page Content Start -->
                    <div class="step-page-content-wrap">
                        <div class="row">
                            <div class="col-lg-10 m-auto text-center">
                                <div class="step-page-header">
                                    <h2>Welcome to the Etharium Airdrop Campaign</h2>
                                    <p>Promises advanced end-to-end encrypted chat messaging, decentralized storage,
                                        calling, video calling, inbox, voice messages etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="step-page-adsvisement">
                                    <a href="#"><img src="assets/img/images/advisement-vertical.jpg" alt="Advisement"
                                                     class="img-fluid"/></a>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="step-process-wrapper">
                                    <!-- First Process Start -->
                                    <div class="step-process-item">

                                        <h3 class="step-number">1st Step</h3>

                                        <div class="registration-form airdrop-form">
                                            <h2 class="h3 step-title">Registration Form</h2>
                                            <form action="#" method="post">
                                                <div class="input-row">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <input type="text" placeholder="Username"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <input type="text" placeholder="Full Name"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-row">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <input type="email" placeholder="Email"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <select name="country" id="country" class="wide">
                                                                    <option disabled selected>Country</option>
                                                                    <option value="bangladesh">bangladesh</option>
                                                                    <option value="america">america</option>
                                                                    <option value="india">india</option>
                                                                    <option value="nepal">nepal</option>
                                                                    <option value="dubai">dubai</option>
                                                                    <option value="china">china</option>
                                                                    <option value="oman">oman</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-row">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <input type="text" placeholder="Phone Number"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <input type="text" placeholder="Referal ID (Optional)"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-row">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <input type="password" placeholder="Password"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="single-input-item">
                                                                <input type="password" placeholder="Confirm Password"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-checkboxes">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="user-agree">
                                                        <label class="custom-control-label" for="user-agree"> I have
                                                            read and agree to the
                                                            <a href="#">User Agreement.</a></label>
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="privacy">
                                                        <label class="custom-control-label" for="privacy">I understand I
                                                            may need to take additional steps in order to be eligible to
                                                            receive tokens</label>
                                                    </div>
                                                </div>

                                                <div class="step-btn">
                                                    <button class="btn btn-gradiant">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- First Process End -->

                                    <!-- Second Process Start -->
                                    <div class="step-process-item">

                                        <h3 class="step-number">2nd Step</h3>

                                        <div class="social-follow-step">
                                            <h2 class="h3 step-title">Follow/Like/Vote/Subscribe</h2>

                                            <div class="social-follow-content d-flex">
                                                <a href="#" class="single-social-item done">
                                                    <i class="fa fa-facebook"></i>
                                                </a>

                                                <a href="#" class="single-social-item done">
                                                    <i class="fa fa-twitter"></i>
                                                </a>

                                                <a href="#" class="single-social-item done">
                                                    <i class="fa fa-youtube"></i>
                                                </a>

                                                <a href="#" class="single-social-item">
                                                    <i class="fa fa-wechat"></i>
                                                </a>

                                                <a href="#" class="single-social-item">
                                                    <i class="fa fa-send"></i>
                                                </a>

                                                <a href="#" class="single-social-item">
                                                    <i class="fa fa-reddit-alien"></i>
                                                </a>
                                            </div>

                                            <div class="step-btn">
                                                <button class="btn btn-gradiant">Next</button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Second Process End -->

                                    <!-- Third Process Start -->
                                    <div class="step-process-item">

                                        <h3 class="step-number">Final Step</h3>

                                        <div class="social-follow-step">
                                            <h2 class="h3 step-title">Share With You Buddy</h2>

                                            <div class="social-follow-content d-flex">
                                                <a href="#" class="single-social-item">
                                                    <i class="fa fa-facebook"></i>
                                                </a>

                                                <a href="#" class="single-social-item">
                                                    <i class="fa fa-twitter"></i>
                                                </a>

                                                <a href="#" class="single-social-item">
                                                    <i class="fa fa-youtube"></i>
                                                </a>

                                                <a href="#" class="single-social-item">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </div>

                                            <div class="step-btn">
                                                <button class="btn btn-gradiant">Claim Airdrop</button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Third Process End -->
                                </div>
                            </div>

                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="step-page -adsvisement">
                                    <a href="#"><img src="assets/img/images/advisement-vertical.jpg" alt="Advisement"
                                                     class="img-fluid"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step Page Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->


<!--== Footer Area Start ==-->
<footer id="footer-area">
    <!-- Footer Widegt Start -->
    <div class="footer-widget-area section-padding">
        <div class="container">
            <div class="footer-widget-content">
                <div class="row">
                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <a href="index-2.php">
                                <img src="assets/img/logo-black.png" alt="Logo" />
                            </a>
                            <div class="about-widget">
                                <p>Other chains became popular since then. We list hard forks for mostly informative purposes put.</p>
                                <div class="footer-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h2 class="h5 widget-title">Slow Link</h2>

                            <div class="widget-body">
                                <ul class="double-list">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Advertising</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h2 class="h5 widget-title">Donate Us</h2>
                            <div class="widget-body">
                                <p>We need to massive amount money to running this company</p>
                                <div class="donate-method">
                                    <a href="#"><i class="fa fa-yen"></i></a>
                                    <a href="#"><i class="fa fa-euro"></i></a>
                                    <a href="#"><i class="fa fa-dollar"></i></a>
                                    <a href="#"><i class="fa fa-bitcoin"></i></a>
                                </div>
                                <a href="#" class="btn btn-gradiant">Donate</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->

                    <!-- Single Widget Start -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-widget-wrap">
                            <h2 class="h5 widget-title">Subscribe</h2>
                            <div class="widget-body">
                                <p>We need to massive amount money to running this company</p>
                                <div class="subscribe-form">
                                    <form action="#" method="post">
                                        <input type="email" placeholder="Enter your email" required />
                                        <button class="btn-subscribe"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widegt End -->

    <!-- Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <p>© 2010-2018 Demo Company .  All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area -->
</footer>
<!--== Footer Area End ==-->

<!-- SITE SCRIPT  -->

<!-- Jquery JS  -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS  -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Owl Carousel JS  -->
<script src="assets/vendor/OwlCarousel2/owl.carousel.min.js"></script>

<!-- Group Loop JS  -->
<script src="assets/vendor/grouploop/grouploop-1.0.1.min.js"></script>

<!-- Nice Select JS  -->
<script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>

<!-- Flatpickr JS  -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>

<!-- Lscache JS  -->
<script src="assets/vendor/lscache/lscache.min.php"></script>

<!-- Magnific Popup JS  -->
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- custom js: main custom theme js file  -->
<script src="assets/js/theme-main.min.js"></script>

<!-- custom js: custom js file is added for easy custom js code  -->
 <script src="assets/js/custom.js"></script>

<!-- custom js: custom scripts for theme style switcher for demo purpose  -->
<script id="switcherhandle" src="assets/switcher/switcher.js"></script>


</body>

<!-- Mirrored from codeboxr.net/themedemo/airdroop/step.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:32 GMT -->
</html>
