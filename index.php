<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/airdroop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:29:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Airdroppr - Airdrop Listing Html Template</title>

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
<?php
include('header.php');
?>
</header>
<!--== Header Area End ==-->

<!--== Currency Rate Area Start ==-->
<?php
include('ticker_extension.php');
?>
<!--== Currency Rate Area End ==-->

<!--== Latest Airdrops Area Start ==-->
<div id="latest-airdrops-area" class="section-padding">
    <div class="container">
        <!--== Header Ads Start ==-->

<!--== Advertise 1 Start ==-->
<?php
include('advertise_1.php');
?>
<!--== Advertise 1 End ==-->

<!--== Header Ads End ==-->

        <div class="airdrop-listing-wrapper">
            <div class="row">
                <!-- Single Airdrop Start -->
                <?php
// Database connection parameters
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the airdrop table
$sql = "SELECT * FROM airdrop_coins";
$result = $conn->query($sql);

// Check if any results are returned
if ($result->num_rows > 0) {
    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
        // Extract the data
        $logo = $row["coin_img"];
        $name = $row["coin_name"];
        $days = $row["days"];
        $tagline = $row["coin_tagline"];
        $giveaway_worth = $row["est_value"];

        // Display the details
        echo '<div class="col-lg-4 col-md-6 col-sm-9 m-auto">
            <div class="single-airdrop-wrap">
                <div class="airdrop-tags">
                    <a href="airdrop-listing.php" class="popular">Popular</a>
                    <a href="airdrop-listing.php" class="running">Running</a>
                    <a href="#" class="star">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </a>
                </div>
                <div class="airdrop-content-wrap d-flex">
                    <div class="aidrop-logo-area">
                        <figure class="airdrop-icon">
                            <a href="single-airdrop.php"><img src="'.$logo.'" alt="'.$name.'" class="img-fluid" /></a>

                            <figcaption class="offer-time">
                                <p>'.$days.' Days</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="airdrop-info-wrap">
                        <h2 class="h4"><a href="single-airdrop.php">'.$name.'</a></h2>
                        <p>'.$tagline.'</p>
                        <p class="giveway-text">Giveaway Worth '.$giveaway_worth.'</p>
                    </div>
                </div>
            </div>
        </div>';
    }
} else {
    echo "No results found.";
}

// Close database connection
$conn->close();
?>

                <!-- Single Airdrop End -->

                <!-- Single Airdrop Start -->
                <div class="col-lg-4 col-md-6 col-sm-9 m-auto">
                    <div class="single-airdrop-wrap">
                        <div class="airdrop-tags">
                            <a href="airdrop-listing.php" class="popular">Popular</a>
                            <a href="airdrop-listing.php" class="finished">Close</a>
                            <a href="#" class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-empty"></i>
                            </a>
                        </div>
                        <div class="airdrop-content-wrap d-flex">
                            <div class="aidrop-logo-area">
                                <figure class="airdrop-icon">
                                    <a href="single-airdrop.php"><img src="assets/img/images/latest-airdrop-logo.png" alt="Airdrop" class="img-fluid" /></a>

                                    <figcaption class="offer-time">
                                        <p>28 Days</p>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="airdrop-info-wrap">
                                <h2 class="h4"><a href="single-airdrop.php">Litcoin</a></h2>
                                <p>Free coin for joining</p>
                                <p class="giveway-text">Giveaway Worth $10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Airdrop End -->

                
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-9 m-auto text-center">
                <div class="view-all-airdrop-btn">
                    <a href="airdrop-listing.php" class="btn btn-view-all">WE HAVE 365 ACTIVE AIRDROPS. <span>VIEW THEM ALL  <i class="fa fa-long-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== Latest Airdrops Area End ==-->

<!--== Popular Compnay Area Start ==-->
<section id="popular-company-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12 text-center">
                <div class="section-title-wrap">
                    <h2 class="h1">Popular Company</h2>
                </div>
            </div>
            <!-- Section Title End -->
        </div>


        <div class="popular-company-content">
            <div class="row no-gutters">
                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <figure class="single-popular-company">
                        <img src="assets/img/images/compnay-logo-1.jpg" alt="Company" class="img-fluid"/>
                        <figcaption class="company-hvr">
                            <a href="single-company.php" class="btn">View Airdrops</a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Popular Compnay End -->

                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <figure class="single-popular-company">
                        <img src="assets/img/images/compnay-logo-2.jpg" alt="Company" class="img-fluid"/>
                        <figcaption class="company-hvr">
                            <a href="single-company.php" class="btn">View Airdrops</a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Popular Compnay End -->

                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <figure class="single-popular-company">
                        <img src="assets/img/images/compnay-logo-3.jpg" alt="Company" class="img-fluid"/>
                        <figcaption class="company-hvr">
                            <a href="single-company.php" class="btn">View Airdrops</a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Popular Compnay End -->

                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <figure class="single-popular-company">
                        <img src="assets/img/images/compnay-logo-4.jpg" alt="Company" class="img-fluid"/>
                        <figcaption class="company-hvr">
                            <a href="single-company.php" class="btn">View Airdrops</a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Popular Compnay End -->

                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <figure class="single-popular-company">
                        <img src="assets/img/images/compnay-logo-5.jpg" alt="Company" class="img-fluid"/>
                        <figcaption class="company-hvr">
                            <a href="single-company.php" class="btn">View Airdrops</a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Popular Compnay End -->

                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <figure class="single-popular-company">
                        <img src="assets/img/images/compnay-logo-6.jpg" alt="Company" class="img-fluid"/>
                        <figcaption class="company-hvr">
                            <a href="single-company.php" class="btn">View Airdrops</a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Popular Compnay End -->

                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <figure class="single-popular-company">
                        <img src="assets/img/images/compnay-logo-7.jpg" alt="Company" class="img-fluid"/>
                        <figcaption class="company-hvr">
                            <a href="single-company.php" class="btn">View Airdrops</a>
                        </figcaption>
                    </figure>
                </div>
                <!-- Single Popular Compnay End -->

                <!-- Single Popular Compnay Start -->
                <div class="col-lg-3 col-sm-6 text-center">
                    <div class="single-popular-company view-all">
                        <p>For More Company Please Click <a href="#">View All</a></p>
                    </div>
                </div>
                <!-- Single Popular Compnay End -->
            </div>
        </div>
    </div>
</section>
<!--== Popular Compnay Area End ==-->

<!--== Latest News Area Start == -->
<section id="latest-news-area" class="section-padding">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg-12 text-center">
                <div class="section-title-wrap">
                    <h2 class="h1">Latest News</h2>
                </div>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="latest-news-content">
            <div class="row">
                <!-- Single Latest Blog Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="single-latest-news-wrap">
                        <figure class="news-thumbnail">
                            <a href="single-news.php"><img src="assets/img/images/latest-news-1.jpg" alt="News"
                                             class="img-fluid"/></a>
                        </figure>
                        <div class="news-content">
                            <a href="single-news.php" class="post-time">2 hour Ago</a>
                            <h2 class="h5"><a href="single-news.php">BitCoin Anaounce 50k Free Coin</a></h2>
                            <p>This is a big project of our company, we are happy to completed this type projec which
                                are get world famous award</p>
                            <a href="single-news.php" class="btn btn-gradiant">More</a>
                        </div>
                    </article>
                </div>
                <!-- Single Latest Blog End -->

                <!-- Single Latest Blog Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="single-latest-news-wrap">
                        <figure class="news-thumbnail">
                            <a href="single-news.php"><img src="assets/img/images/latest-news-2.jpg" alt="News"
                                             class="img-fluid"/></a>
                        </figure>
                        <div class="news-content">
                            <a href="single-news.php" class="post-time">3 hour Ago</a>
                            <h2 class="h5"><a href="single-news.php">BitCoin Anaounce 50k Free Coin</a></h2>
                            <p>This is a big project of our company, we are happy to completed this type projec which
                                are get world famous award</p>
                            <a href="single-news.php" class="btn btn-gradiant">More</a>
                        </div>
                    </article>
                </div>
                <!-- Single Latest Blog End -->

                <!-- Single Latest Blog Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="single-latest-news-wrap">
                        <figure class="news-thumbnail">
                            <a href="single-news.php"><img src="assets/img/images/latest-news-3.jpg" alt="News"
                                             class="img-fluid"/></a>
                        </figure>
                        <div class="news-content">
                            <a href="single-news.php" class="post-time">5 hour Ago</a>
                            <h2 class="h5"><a href="single-news.php">BitCoin Anaounce 50k Free Coin</a></h2>
                            <p>This is a big project of our company, we are happy to completed this type projec which
                                are get world famous award</p>
                            <a href="single-news.php" class="btn btn-gradiant">More</a>
                        </div>
                    </article>
                </div>
                <!-- Single Latest Blog End -->

                <!-- Single Latest Blog Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="single-latest-news-wrap">
                        <figure class="news-thumbnail">
                            <a href="single-news.php"><img src="assets/img/images/latest-news-4.jpg" alt="News"
                                             class="img-fluid"/></a>
                        </figure>
                        <div class="news-content">
                            <a href="single-news.php" class="post-time">5 hour Ago</a>
                            <h2 class="h5"><a href="single-news.php">BitCoin Anaounce 50k Free Coin</a></h2>
                            <p>This is a big project of our company, we are happy to completed this type projec which
                                are get world famous award</p>
                            <a href="single-news.php" class="btn btn-gradiant">More</a>
                        </div>
                    </article>
                </div>
                <!-- Single Latest Blog End -->

                <!-- Single Latest Blog Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="single-latest-news-wrap">
                        <figure class="news-thumbnail">
                            <a href="single-news.php"><img src="assets/img/images/latest-news-5.jpg" alt="News"
                                             class="img-fluid"/></a>
                        </figure>
                        <div class="news-content">
                            <a href="single-news.php" class="post-time">7 hour Ago</a>
                            <h2 class="h5"><a href="single-news.php">BitCoin Anaounce 50k Free Coin</a></h2>
                            <p>This is a big project of our company, we are happy to completed this type projec which
                                are get world famous award</p>
                            <a href="single-news.php" class="btn btn-gradiant">More</a>
                        </div>
                    </article>
                </div>
                <!-- Single Latest Blog End -->

                <!-- Latest Airdrop Offer Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news-wrap latest-airdrop-offer">
                        <h2 class="h3">Are you looking latest airdrop offer?</h2>
                        <a href="#" class="btn btn-offer">Get Offer</a>
                        <p>You Also Can Listed Your Offer, If you Want Please <a href="#">Click Here</a></p>
                    </div>
                </div>
            </div>
            <!-- Latest Airdrop Offer End -->
        </div>

        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="ads-content-wrap">
                    <a href="#" class="d-block"><img src="assets/img/images/advisement.jpg" alt="advisement" class="img-fluid" /></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Latest News Area End == -->

<!--== Footer Area Start ==-->
<?php
include('footer.php');
?>
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
<!-- <script id="switcherhandle" src="assets/switcher/switcher.js"></script> -->


</body>

<!-- Mirrored from codeboxr.net/themedemo/airdroop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:16 GMT -->
</html>
