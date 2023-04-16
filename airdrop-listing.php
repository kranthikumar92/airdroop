<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/airdroop/airdrop-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:30 GMT -->
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
                <!-- Airdrop Listing Page Content Start -->
                <div class="airdrop-listing-page-wrap">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="airdrop-listing-filter">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="single-filter-item">
                                            <h2 class="h6 ">Sort By</h2>
                                            <div class="sorting-menu">
                                                <select name="airdrop-sorting" id="airdrop-sorting" class="wide">
                                                    <option value="Latest Airdrop">Latest Airdrop</option>
                                                    <option value="Feature Airdrop">Feature Airdrop</option>
                                                    <option value="Best Sell">Best Sell</option>
                                                    <option value="Best Rating">Best Rating</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="single-filter-item">
                                            <h2 class="h6 ">Date</h2>
                                            <div class="date-menu">
                                                <form action="#" method="post" class="d-flex">
                                                    <input type="text" class="datepicker" id="datefrom" data-rangeto="#dateto"
                                                           placeholder="12/07/18"/>
                                                    <p class="range_to">to</p>
                                                    <input type="text" class="datepicker" id="dateto" data-rangefrom="#datefrom"
                                                           placeholder="21/07/18"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="single-filter-item">
                                            <h2 class="h6 ">Rating</h2>
                                            <div class="rating-menu d-flex">
                                                <div class="rating-select">
                                                    <select name="airdrop-rating" id="airdrop-rating" class="wide">
                                                        <option value="Max">Max</option>
                                                        <option value="Min">Min</option>
                                                    </select>
                                                </div>
                                                <div class="rating-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="single-filter-item">
                                            <h2 class="h6 ">Required Tools</h2>
                                            <div class="required-tools d-flex">
                                                <div class="single-tool-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="facebook">
                                                        <label class="custom-control-label" for="facebook">facebook</label>
                                                    </div>
                                                </div>

                                                <div class="single-tool-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="twitter">
                                                        <label class="custom-control-label" for="twitter">twitter</label>
                                                    </div>
                                                </div>

                                                <div class="single-tool-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="email">
                                                        <label class="custom-control-label" for="email">email</label>
                                                    </div>
                                                </div>

                                                <div class="single-tool-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="linkedin">
                                                        <label class="custom-control-label" for="linkedin">linkedin</label>
                                                    </div>
                                                </div>

                                                <div class="single-tool-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="reddit">
                                                        <label class="custom-control-label" for="reddit">Reddit</label>
                                                    </div>
                                                </div>

                                                <div class="single-tool-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="github">
                                                        <label class="custom-control-label" for="github">github</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-advisement d-none d-lg-block">
                                <a href="#"><img src="assets/img/images/slidebar-ads.jpg" alt="Advisement"/></a>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="listing-airdrop-wrap">
<!-- Pagination PHP code Area Start -->
                            <?php
// Retrieve the 'page' parameter from the URL
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Set the number of items per page
$items_per_page = 2;

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

// Fetch total number of rows in the table
$sql_total_rows = "SELECT COUNT(*) as total_rows FROM airdrop_coins";
$result_total_rows = mysqli_query($conn, $sql_total_rows);
$row_total_rows = mysqli_fetch_assoc($result_total_rows);
$total_rows = $row_total_rows['total_rows'];

// Calculate total number of pages
$total_pages = ceil($total_rows / $items_per_page);

// Calculate the offset for the query based on the current page number
$offset = ($page - 1) * $items_per_page;
?>
<!-- Pagination Php Code Area End -->


                                <!-- Airdrop List Start -->
                                <?php
$sql = "SELECT * FROM airdrop_coins LIMIT $items_per_page OFFSET $offset";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $airdrop_sno = $row['sno'];
    $date = $row["end_date"];

    // Fetch data from airdrop_coin_social table based on airdrop_sno
    $sql_social = "SELECT * FROM airdrop_coin_social WHERE airdrop_sno = '$airdrop_sno'";
    $result_social = mysqli_query($conn, $sql_social);
    $row_social = mysqli_fetch_assoc($result_social);

// Determine the CSS class for status
$statusClass = "";
$statusClass = ($row['status'] == 'active') ? 'pinpost' : 'pinpost-end';

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
    ?>
    <!-- Display fetched data -->
<div class="single-listing-airdrop d-block d-sm-flex">
    <div class="airdrop-details-area d-flex">
        <figure class="airdrop-currency-thumb">
            <a href="single-airdrop.php?id=<?php echo $row['sno']; ?>"><img src="<?php echo $row['coin_img']; ?>" alt="Airdrop"/></a>
        </figure>
        <div class="airdrop-currency-info">
            <h2 class="h6"><a href="single-airdrop.php?id=<?php echo $row['sno']; ?>"><?php echo $row['coin_name']; ?></a></h2>
            <p class="offer-time"><?php echo $days; ?> days</p>
        </div>
    </div>
    <div class="airdrop-social-icons d-sm-none d-md-block">
        <?php if ($row_social['join_link']): ?><a href="<?php echo $row_social['join_link']; ?>" target="_blank"><i class="fa fa-send"></i></a><?php endif; ?>
        <?php if ($row_social['website_link']): ?><a href="<?php echo $row_social['website_link']; ?>" target="_blank"><i class="fa fa-envelope"></i></a><?php endif; ?>
        <?php if ($row_social['reddit_link']): ?><a href="<?php echo $row_social['reddit_link']; ?>" target="_blank"><i class="fa fa-reddit-alien"></i></a><?php endif; ?>
        <?php if ($row_social['youtube_link']): ?><a href="<?php echo $row_social['youtube_link']; ?>" target="_blank"><i class="fa fa-youtube"></i></a><?php endif; ?>
    </div>
    <div class="airdrop-pricing-area">
        <div class="price-unit ">
            <h3 class="price-currency d-inline-block align-middle"><?php echo $row['est_value']; ?></h3>
           
        </div>
        <div class="price-name">Airdrop Reward</div>
    </div>

    <h2 class="<?php echo $statusClass; ?>"><?php echo $row['status']; ?></h2>
</div>

<?php
}
?>
                                <!-- Airdrop List End -->

                            </div>

                            <!-- Pagination Area Start -->
                            
<?php
// Fetch data from airdrop_coins table with pagination
$sql_page = "SELECT * FROM airdrop_coins LIMIT $items_per_page OFFSET $offset";
$result_page = mysqli_query($conn, $sql_page);

while ($row_page = mysqli_fetch_assoc($result_page)) {
    // Your code to display the fetched data goes here
    // ...
}

// Display pagination links
echo "<div class='pagination-area-wrap text-center'>";
echo "<div class='pagination-nav'>";
if ($page > 1) {
    echo "<a href='?page=" . ($page - 1) . "'><i class='fa fa-angle-left'></i></a>";
}
for ($i = 1; $i <= $total_pages; $i++) {
    echo "<a href='?page=" . $i . "' " . ($i == $page ? "class='current'" : "") . ">" . $i . "</a>";
}
if ($page < $total_pages) {
    echo "<a href='?page=" . ($page + 1) . "'><i class='fa fa-angle-right'></i></a>";
}
echo "</div>";
echo "</div>";

// Close database connection
mysqli_close($conn);
?>

                            <!-- Pagination Area End -->
                        </div>
                    </div>
                </div>
                <!-- Airdrop Listing Page Content End -->
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
