<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Airdrop Listo - Crypto Airdrop Listing Template</title>

    <meta name="description" content="Crypto Airdrop Listing Website is your one-stop destination to find and participate in the latest cryptocurrency airdrops. Get access to the hottest and most promising airdrops." />
<meta name="keywords" content="Crypto Airdrop, Cryptocurrency, Airdrops, Free Coins, Tokens, Crypto Community, Blockchain, ICO, Crypto Rewards, Crypto Giveaways" />


<!-- desktop bookmark -->
<meta name="msapplication-TileColor" content="#000000">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#000000">

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
<div id="page-content-wrapper">
    <div class="step-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Submit Page Content Start -->
                    <div class="submit-page-content-wrap">
                        <div class="row">
                            <div class="col-lg-10 m-auto text-center">
                                <div class="step-page-header">
                                    <h2>Contact Us</h2>
                                    <p>Fill below form and submit. We will get back to you in 24 hours.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2 d-none d-lg-block">
                                <!-- Advertise Airdrop Desc Start -->
                                <?php
                                    include ('advertise_req_contact_left.php');

                                ?>
                                <!-- Advertise Airdrop Desc End -->
                            </div>

                            <div class="col-lg-8">
                                <div class="airdrop-submit-form-area">
                                    <div class="airdrop-form">
                                        <form action="contact_response.php" method="post">
                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="Full Name" name="full_name" id="full_name"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="email" placeholder="Email" name="email" id="email"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="url" placeholder="Social Link (Telegram, Twitter,...)" name="social_link" id="social_link"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                                <textarea name="description_contact" id="description_contact" cols="50"
                                                                          rows="6"
                                                                          placeholder="Describe your issue..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-checkboxes">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="privacy">
                                                    <label class="custom-control-label" for="privacy">
                                                    I have read and agree to the Privacy Policy
                                                        </label>
                                                </div>
                                            </div>

                                            <div class="submit-btn">
                                                <button class="btn btn-gradiant">Submit</button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Latest Airdrop Start -->
                                    <!--        <h2 class="h3 step-title" style="color: white;">Latest Airdrops </h2> -->
                                    <div class="airdrop-listing-wrapper">
                                            
                                            <div class="row">
                                                
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
                                $sql_insert = "SELECT * FROM airdrop_coins WHERE status='active' ORDER BY sno DESC LIMIT 4";
                                $result_insert = $conn->query($sql_insert);
                                
                                // Check if any results are returned
                                if ($result_insert->num_rows > 0) {
                                    // Loop through each row of data
                                    while ($row_insert = $result_insert->fetch_assoc()) {
                                        // Extract the data
                                        $logo = $row_insert["coin_img"];
                                        $name = $row_insert["coin_name"];
                                        $date = $row_insert["end_date"];
                                        $tagline = $row_insert["coin_tagline"];
                                        $giveaway_worth = $row_insert["est_value"];
                                        $sno = $row_insert["sno"];
                                        $coin_status = $row_insert["status"];
                                
                                        // Define the 'from' and 'to' dates
                                $fromDate = date('Y-m-d'); // Format: yyyy-mm-dd
                                $toDate = $date; // Format: yyyy-mm-dd
                                
                                // Convert the dates to DateTime objects
                                $fromDateTime = new DateTime($fromDate);
                                $toDateTime = new DateTime($toDate);
                                
                                // Calculate the difference between the dates
                                $dateInterval = $fromDateTime->diff($toDateTime);
                                
                                // Extract the difference in days
                                $days = $dateInterval->days;
                                
                                // Determine the CSS class for status
                                $statusClass = ($row['status'] == 'active') ? 'running' : 'popular';
                                
                                
                                        // Display the details
                                       
                                        echo '<div class="col-lg-6 col-md-9 col-sm-9 m-auto">
                                            <div class="single-airdrop-wrap">
                                                <div class="airdrop-tags">
                                                    <a href="single-airdrop.php?id='.$sno.'" class="feature">' . $coin_status . '</a>
                                                </div>
                                                <div class="airdrop-content-wrap d-flex">
                                                    <div class="aidrop-logo-area">
                                                        <figure class="airdrop-icon">
                                                            <a href="single-airdrop.php?id='.$sno.'"><img src="'.$logo.'" alt="'.$name.'" class="img-fluid" /></a>
                                                            <figcaption class="offer-time">
                                                                <p>'.$days.' Days</p>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                    <div class="airdrop-info-wrap">
                                                        <h2 class="h4"><a href="single-airdrop.php?id='.$sno.'">'.$name.'</a></h2>
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
                                </div>
                                        </div>
                                        <!-- Latest Airdrop End -->
                                </div>
                            </div>

                            <div class="col-lg-2 d-none d-lg-block">
                                <!-- Advertise Airdrop Desc Start -->
                                <?php
                                    include ('advertise_req_contact_right.php');

                                ?>
                                <!-- Advertise Airdrop Desc End -->
                            </div>
                        </div>
                    </div>
                    <!-- Submit Page Content End -->
                </div>
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
</html>
