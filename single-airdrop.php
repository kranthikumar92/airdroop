<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/airdroop/single-airdrop.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:32 GMT -->
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

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="section-padding">
    <div class="container">
        <!--== Header Ads Start ==-->
        
<!--== Advertise 1 Start ==-->
<?php
include('advertise_1.php');
?>
<!--== Advertise 1 End ==-->

<!--== Header Ads End ==-->

        <div class="row">
            <div class="col-lg-12">
                <!-- Single Airdrop Page Content Start -->
                <div class="single-airdrop-page-wrap">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-page-sidebar">
                                

                                <?php
// Database connection settings
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve the details of the coin with sno = 1
$sql = "SELECT * FROM airdrop_coins WHERE sno = 1";
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();
    
    // Display the details
    echo '<div class="single-sidebar-item">
    <div class="airdrop-details-area d-flex">
        <figure class="airdrop-currency-thumb">
            <img src="' . $row["coin_img"] . '" alt="' . $row["coin_name"] . '"
                 class="img-fluid"/>
        </figure>
        <div class="airdrop-currency-info">
            <a href="#" class="popular-tag">Popular</a>
            <h2 class="h4">' . $row["coin_name"] . '</h2>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
    </div>
    <p>' . $row["coin_tagline"] . '</p>
    <div class="brand-btn-group">
        <a href="' . $row["whitepaper"] . '" class="btn btn-gradiant"><i class="fa fa-download"></i> Whitepapper</a>
        <a href="' . $row["airdrop_join_link"] . '" class="btn btn-gradiant">Join Airdrop</a>
    </div>
</div>


    
    <div class="single-sidebar-item">
            <h2 class="h6">Airdrop Details:</h2>
            <ul class="giveway-list">
                <li><span><img src="assets/img/icons/giveway/coin.png" alt="Coin"/>Coin</span>: ' . $row["coin_name"] . '</li>
                <li><span><img src="assets/img/icons/giveway/doller.png" alt="Coin"/>Est Value</span>: ' . $row["est_value"] . '</li>
                <li><span><img src="assets/img/icons/giveway/check.png" alt="Coin"/>Validation</span>: ' . $row["blockchain"] . '</li>
                <li><span><img src="assets/img/icons/giveway/alerm.png" alt="Coin"/>End Date</span>: ' . $row["end_date"] . '</li>
                <li><span><img src="assets/img/icons/giveway/total.png" alt="Coin"/>Total Spent</span>: ' . $row["tokens"] . '</li>
                <li><span><img src="assets/img/icons/giveway/person.png" alt="Coin"/>Persons</span>: ' . $row["publish_date"] . '</li>
                <li><span><img src="assets/img/icons/giveway/flag.png" alt="Coin"/>Difficulty</span>: ' . $row["status"] . '</li>
            </ul>
          </div>
          
          
    
    <div class="single-sidebar-item">
          <h2 class="h6">Stay Connected!</h2>
          <ul class="giveway-list">
              <span><a href="https://example.com"><img src="assets/img/icons/social/web.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/twitter.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/medium.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/youtube.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/facebook.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/instagram.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/discord.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/telegram.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/blogging.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/github.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/reddit.png" alt="Coin" width="30" height="30"/></a></span>
              <span><a href="https://example.com"><img src="assets/img/icons/social/linkedin.png" alt="Coin" width="30" height="30"/></a></span>

          </ul>
        </div> 
    
          ';
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>

<?php
// Database connection settings
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve the details of the coin with sno = 1
$sql1 = "SELECT * FROM airdrop_coin_social WHERE airdrop_sno = 1";
$result1 = $conn->query($sql1);

// Check if the query was successful
if ($result1->num_rows > 0) {
    // Fetch the result as an associative array
    $row1 = $result1->fetch_assoc();
    
    // Display the details
    echo '<div class="single-sidebar-item">
          <h2 class="h6">Stay Connected!</h2>
          <ul class="giveway-list" style="display: flex; gap: 10px;">'; // Added gap style

    // Check if each link exists, and display the corresponding span only if it does
    if (!empty($row1["website_link"])) {
        echo '<li><a href="' . $row1["website_link"] . '"><img src="assets/img/icons/social/web.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["join_link"])) {
        echo '<li><a href="' . $row1["join_link"] . '"><img src="assets/img/icons/social/twitter.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["medium_link"])) {
        echo '<li><a href="' . $row1["medium_link"] . '"><img src="assets/img/icons/social/medium.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    // Add more links here following the same pattern

    echo '</ul>
        </div>';
} else {
    echo "No social links found.";
}

// Close the database connection
$conn->close();
?>


                                

                                <div class="single-sidebar-item">
                                    <div class="convert-currency">
                                        <h2 class="h4">Currency Convert:</h2>
                                        <div class="convert-calculator">
                                            <form action="#" method="get" class="convertform" data-busy="0" data-apikey="2WJ4BTFMAH6SCZVC">
                                                <div class="calculator-items">
                                                    <div class="single-cal-item d-flex">
                                                        <div class="coin-type">
                                                            <select class="wide fromcurfield" name="fromcurfield">
                                                                <option value="BTC">BTC</option>
                                                                <option value="ETH">ETH</option>
                                                                <option value="LTC">LTC</option>
                                                            </select>
                                                        </div>

                                                        <div class="coin-amount">
                                                            <input type="text" placeholder="From Value" value="1" class="fromcurvalue" name="fromcurvalue" required />
                                                        </div>
                                                    </div>

                                                    <div class="single-cal-item d-flex">
                                                        <div class="coin-type">
                                                            <select class="wide tocurfield" name="tocurfield">
                                                                <option value="USD">USD</option>
                                                                <option value="EUR">EUR</option>
                                                                <option value="CAD">CAD</option>
                                                            </select>
                                                        </div>

                                                        <div class="coin-amount">
                                                            <input type="text" placeholder="Converted Value" value="" class="tocurvalue" name="tocurvalue" />
                                                        </div>
                                                    </div>

                                                    <div class="offer-button">
                                                        <button class="btn btn-gradiant btn-convert" type="submit">Convert</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <article class="single-airdrop-details">
                                <h2 class="h4">Project Information:</h2>
                                <p>At Gabrotech, we have a vision to disrupt the loyalty rewards market and hand back
                                    the control ewards rules to the public. Our open-loop decentralized ecosystem,
                                    Gabro, aims to provide consumers with the ability to instantly redeem and manage
                                    multiple loyalty points, and exchange them freely on a single blockchain enabled
                                    platform.</p>

                                <p>The total value of the loyalty rewards program market is estimated to be at a
                                    staggering US$500 billion. While an average household has enrolled to an average of
                                    25 programs, the actual utilisation of these reward points vary from 10%to 80%,
                                    depending on sector. Surveys show that 78% of customers are generally not happy with
                                    their loyalty programs. In addition, Loyalty Program Operators (LPO) make it hard
                                    for customers to redeem points as many LPOs think that expired points becomes a form
                                    of </p>

                                <a href="#"><img src="assets/img/images/listing-advise.jpg" alt="advisement"
                                                 class="img-fluid"/></a>
                                <p>At Gabrotech, we have a vision to disrupt the loyalty rewards market and hand back
                                    the control ewards rules to the public. Our open-loop decentralized ecosystem,
                                    Gabro, aims to provide consumers with the ability to instantly redeem and manage
                                    multiple loyalty points, and exchange them freely on a single blockchain enabled
                                    platform.</p>

                                <img src="assets/img/images/single-airdrop.png" alt="advisement" class="img-fluid"/>
                                <a href="#"><img src="assets/img/images/listing-advise.jpg" alt="advisement"
                                                 class="img-fluid"/></a>

                                <div class="project-video">
                                    <h2 class="h4">Project Video:</h2>
                                    <p>At Gabrotech, we have a vision to disrupt the loyalty rewards market and hand
                                        back the control ewards rules to the public. Our open-loop decentralized
                                        ecosystem.</p>

                                    <figure class="video-overlay">
                                        <img src="assets/img/images/video-overlay-bg.jpg" alt="Video BG"
                                             class="img-fluid"/>

                                        <figcaption class="video-overlay-btn">
                                            <a href="https://player.vimeo.com/video/250154019?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                               class="btn btn-play video-popup"><i class="fa fa-play"></i></a>
                                        </figcaption>
                                    </figure>

                                    <a href="#"><img src="assets/img/images/listing-advise.jpg" alt="advisement"
                                                     class="img-fluid"/></a>
                                </div>
                            </article>

                            <div class="latest-airdrop-area">
                                <h2 class="h4">Previous Airdrops</h2>
                                <div class="latest-airdrop-carousel owl-carousel">
                                    <!-- Single Airdrop Start -->
                                    <div class="single-airdrop-wrap">
                                        <div class="airdrop-tags">
                                            <a href="#" class="popular">Popular</a>
                                            <a href="#" class="running">Running</a>
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
                                                    <img src="assets/img/images/latest-airdrop-logo.png" alt="Airdrop"
                                                         class="img-fluid"/>
                                                    <figcaption class="offer-time">
                                                        <p>28 Days</p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="airdrop-info-wrap">
                                                <h2 class="h4">Etharum</h2>
                                                <p>Free coin for joining</p>
                                                <p class="giveway-text">Giveaway Worth $10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Airdrop End -->

                                    <!-- Single Airdrop Start -->
                                    <div class="single-airdrop-wrap">
                                        <div class="airdrop-tags">
                                            <a href="#" class="popular">Popular</a>
                                            <a href="#" class="running">Running</a>
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
                                                    <img src="assets/img/images/latest-airdrop-logo.png" alt="Airdrop"
                                                         class="img-fluid"/>
                                                    <figcaption class="offer-time">
                                                        <p>28 Days</p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="airdrop-info-wrap">
                                                <h2 class="h4">Etharum</h2>
                                                <p>Free coin for joining</p>
                                                <p class="giveway-text">Giveaway Worth $10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Airdrop End -->

                                    <!-- Single Airdrop Start -->
                                    <div class="single-airdrop-wrap">
                                        <div class="airdrop-tags">
                                            <a href="#" class="popular">Popular</a>
                                            <a href="#" class="running">Running</a>
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
                                                    <img src="assets/img/images/latest-airdrop-logo.png" alt="Airdrop"
                                                         class="img-fluid"/>
                                                    <figcaption class="offer-time">
                                                        <p>28 Days</p>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="airdrop-info-wrap">
                                                <h2 class="h4">Etharum</h2>
                                                <p>Free coin for joining</p>
                                                <p class="giveway-text">Giveaway Worth $10</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Airdrop End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Airdrop Page Content End -->
            </div>
        </div>

    </div>
</div>
<!--== Page Content Wrapper End ==-->


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




</body>

<!-- Mirrored from codeboxr.net/themedemo/airdroop/single-airdrop.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:35 GMT -->
</html>
