<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/airdroop/submit.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:32 GMT -->
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
                                    <h2>List Your Coin Offer in Airdrop List</h2>
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
                                <div class="airdrop-submit-form-area">
                                    <div class="airdrop-form">
                                        <h2 class="h3 step-title"><?php
// Connect to the database
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

$conn = mysqli_connect("localhost", $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $coinName = $_POST["coin_name"];
    $projectName = $_POST["project_name"];
    $email = $_POST["email"];
    $designation = $_POST["designation"];
    $icoStartDate = $_POST["ico_start_date"];
    $icoEndDate = $_POST["ico_end_date"];
    $totalAirdropValue = $_POST["total_airdrop_value"];
    $individualRewardValue = $_POST["individual_reward_value"];
    $referralBonus = $_POST["referral_bonus"];
    $coinRateAgainstUSD = $_POST["coin_rate_against_usd"];
    $projectTelegramLink = $_POST["project_telegram_link"];
    $projectTwitterLink = $_POST["project_twitter_link"];
    $projectDiscordLink = $_POST["project_discord_link"];
    $projectContactTelegramID = $_POST["project_contact_telegram_id"];
    $moreInformation = $_POST["more_information"];

    // Generate unique reference number with 8 digits
    $reference = mt_rand(10000000, 99999999);

    // Insert form data into database
    $sql = "INSERT INTO new_airdrop_requests (reference, coin_name, project_name, email, designation, ico_start_date, ico_end_date, total_airdrop_value, individual_reward_value, referral_bonus, coin_rate_against_usd, project_telegram_link, project_twitter_link, project_discord_link, project_contact_telegram_id, more_information) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "dssssssdddssssss", $reference, $coinName, $projectName, $email, $designation, $icoStartDate, $icoEndDate, $totalAirdropValue, $individualRewardValue, $referralBonus, $coinRateAgainstUSD, $projectTelegramLink, $projectTwitterLink, $projectDiscordLink, $projectContactTelegramID, $moreInformation);
    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "Airdrop listing submitted successfully. Reference number: " . $reference;
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
}

// Close database connection
mysqli_close($conn);
?>
</h2>
                                            <div class="submit-btn">
                                            <a href="airdrop-listing.php"><button class="btn btn-gradiant">Back to Airdrops List</button></a>
                                            </div>
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
$sql = "SELECT * FROM airdrop_coins LIMIT 4";
$result = $conn->query($sql);

// Check if any results are returned
if ($result->num_rows > 0) {
    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
        // Extract the data
        $logo = $row["coin_img"];
        $name = $row["coin_name"];
        $date = $row["end_date"];
        $tagline = $row["coin_tagline"];
        $giveaway_worth = $row["est_value"];
        $sno = $row["sno"];
        $coin_status = $row["status"];

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
        echo '<div class="col-lg-4 col-md-6 col-sm-9 m-auto">
            <div class="single-airdrop-wrap">
                <div class="airdrop-tags">
                    <a href="single-airdrop.php?id='.$sno.'" class="' . $statusClass . '">' . $coin_status . '</a>
                    
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
                            </div>

                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="step-page -adsvisement">
                                    <a href="#"><img src="assets/img/images/advisement-vertical.jpg" alt="Advisement"
                                                     class="img-fluid"/></a>
                                </div>
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

<!-- Mirrored from codeboxr.net/themedemo/airdroop/submit.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:32 GMT -->
</html>
