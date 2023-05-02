<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php
include ('db/db_config.php');

// Retrieve the 'id' parameter from the URL
$airdrop_id = $_GET['id'];


?>
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

<link rel="canonical" href="https://calixworld.com/single-airdrop/<?php echo $airdrop_id; ?>" />

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
<div id="page-content-wrapper" class="section-padding">
    <div class="container">
        <!--== Header Ads Start ==-->
        
<!--== Advertise 1 Start ==-->
<?php
include('advertise_top.php');
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

// Query to retrieve the details of the coin with sno = 1
$sql = "SELECT * FROM airdrop_coins WHERE sno = '$airdrop_id'";
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();

    // Determine the CSS class for status
    $statusClass = ($row['status'] == 'active') ? 'popular-tag' : 'popular-tag-end';
    
    // Display the details
    echo '<div class="single-sidebar-item">
    <div class="airdrop-details-area d-flex">
        <figure class="airdrop-currency-thumb">
            <img src="airdrop_imgs/' . $row["coin_img"] . '" alt="' . $row["coin_name"] . '"
                 class="img-fluid"/>
        </figure>
        <div class="airdrop-currency-info">
            <a href="#" class="' . $statusClass . '">' . ucfirst($row["status"]) . '</a>
            <h2 class="h4">' . $row["coin_name"] . '</h2>
        </div>
    </div>
    <p>' . $row["coin_tagline"] . '</p>
    <div class="brand-btn-group">
        <a href="' . $row["whitepaper"] . '" target="_blank" class="btn btn-gradiant"><i class="fa fa-download"></i> Whitepapper</a>
        <a href="' . $row["airdrop_join_link"] . '" target="_blank" class="btn btn-gradiant">Join Airdrop</a>
    </div>
</div>


    
    <div class="single-sidebar-item">
            <h2 class="h6">Airdrop Details:</h2>
            <ul class="giveway-list">
                <li><span><img src="assets/img/icons/giveway/blockchain.png" alt="Coin"/>Blockchain</span>: ' . ucfirst($row["blockchain"]) . '</li>
                <li><span><img src="assets/img/icons/giveway/doller.png" alt="Coin"/>Est Value</span>: ' . $row["est_value"] . '</li>
                <li><span><img src="assets/img/icons/giveway/total.png" alt="Coin"/>Tokens</span>: ' . $row["tokens"] . '</li>
                <li><span><img src="assets/img/icons/giveway/alerm.png" alt="Coin"/>End Date</span>: ' . $row["end_date"] . '</li>
                <li><span><img src="assets/img/icons/giveway/referral.png" alt="Coin"/>Referral</span>: ' . ucfirst($row["referral_available"]) . '</li>
                <li><span><img src="assets/img/icons/giveway/person.png" alt="Coin"/>Published on</span>: ' . $row["publish_date"] . '</li>
                <li><span><img src="assets/img/icons/giveway/check.png" alt="Coin"/>Status</span>: ' . ucfirst($row["status"]) . '</li>
            </ul>
          </div>  
          ';
} else {
    echo "No results found.";
}

?>

<?php
// Database connection settings

// Query to retrieve the details of the coin with sno = 1
$sql1 = "SELECT * FROM airdrop_coin_social WHERE airdrop_sno = '$airdrop_id'";
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
        echo '<li><a href="' . $row1["website_link"] . '" target="_blank"><img src="assets/img/icons/social/web.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["twitter_link"])) {
        echo '<li><a href="' . $row1["twitter_link"] . '" target="_blank"><img src="assets/img/icons/social/twitter.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["medium_link"])) {
        echo '<li><a href="' . $row1["medium_link"] . '" target="_blank"><img src="assets/img/icons/social/medium.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["youtube_link"])) {
        echo '<li><a href="' . $row1["youtube_link"] . '" target="_blank"><img src="assets/img/icons/social/youtube.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["facebook_link"])) {
        echo '<li><a href="' . $row1["facebook_link"] . '" target="_blank"><img src="assets/img/icons/social/facebook.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["instagram_link"])) {
        echo '<li><a href="' . $row1["instagram_link"] . '" target="_blank"><img src="assets/img/icons/social/instagram.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["discord_link"])) {
        echo '<li><a href="' . $row1["discord_link"] . '" target="_blank"><img src="assets/img/icons/social/discord.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["telegram_link"])) {
        echo '<li><a href="' . $row1["telegram_link"] . '" target="_blank"><img src="assets/img/icons/social/telegram.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["blog_link"])) {
        echo '<li><a href="' . $row1["blog_link"] . '" target="_blank"><img src="assets/img/icons/social/blogging.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["github_link"])) {
        echo '<li><a href="' . $row1["github_link"] . '" target="_blank"><img src="assets/img/icons/social/github.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["reddit_link"])) {
        echo '<li><a href="' . $row1["reddit_link"] . '" target="_blank"><img src="assets/img/icons/social/reddit.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    if (!empty($row1["linkedim_link"])) {
        echo '<li><a href="' . $row1["linkedin_link"] . '" target="_blank"><img src="assets/img/icons/social/linkedin.png" alt="Coin" width="30" height="30"/></a></li>'; // Wrapped in <li> for list item
    }

    // Add more links here following the same pattern

    echo '</ul>
        </div>';
} else {
    echo "No social links found.";
}


?>


                                
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <article class="single-airdrop-details">
                                <h2 class="h4">Airdrop Details:</h2>
                                <?php
                                echo  $row["airdrop_description"];
                                ?>
                                
                                <div class="project-video">
                                    <h2 class="h4">Step by Step Guide:</h2>
                                    <?php
                                echo  $row["airdrop_steps"];
                                // Close the database connection
                                $conn->close();
                                ?>
                                <br>
                                <!-- Advertise Airdrop Desc Start -->
                                <?php
                                include ('advertise_airdrop_desc.php');

                                ?>
                                <!-- Advertise Airdrop Desc End -->
                                    
                                </div>
                            </article>

                            
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
</html>
