<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/airdroop/news.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>News :: Airdroop - Airdrop Listing Html Template</title>

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

        <div class="latest-news-content">
            <div class="row">
                <!-- Single Latest Blog Start -->
                
                <?php
// Establish a database connection
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Number of items per page
$items_per_page = 6;

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get total number of posts
$total_posts_query = "SELECT COUNT(*) as count FROM blog_posts WHERE status = 'active'";
$total_posts_result = $conn->query($total_posts_query);
$total_posts_row = $total_posts_result->fetch_assoc();
$total_posts = $total_posts_row['count'];

// Calculate total number of pages
$total_pages = ceil($total_posts / $items_per_page);

// Get current page from query string
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Check if current page is within range
if ($current_page < 1 || $current_page > $total_pages) {
    $current_page = 1;
}

// Calculate offset
$offset = ($current_page - 1) * $items_per_page;

// Get posts for current page
$sql = "SELECT * FROM blog_posts WHERE status = 'active' ORDER BY created_at DESC LIMIT $items_per_page OFFSET $offset";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $post_id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $image = $row['feature_image'];
        $created_at = $row['created_at'];
        $content_sub = (strlen($content) > 90) ? substr($content, 0, 100).'...' : $content;
?>
        <div class="col-lg-4 col-md-6">
            <article class="single-latest-news-wrap">
                <figure class="news-thumbnail">
                    <a href="single-news.php?id=<?php echo $post_id ?>"><img src="<?php echo $image ?>" alt="News" class="img-fluid"/></a>
                </figure>
                <div class="news-content">
                    <a href="single-news.php?id=<?php echo $post_id ?>" class="post-time"><?php echo $created_at ?></a>
                    <h2 class="h5"><a href="single-news.php?id=<?php echo $post_id ?>"><?php echo $title ?></a></h2>
                    <p><?php echo $content_sub ?></p>
                    <a href="single-news.php?id=<?php echo $post_id ?>" class="btn btn-gradiant">More</a>
                </div>
            </article>
        </div>
<?php
    }
} else {
    echo "No posts found.";
}

$conn->close();
?>
    
                <!-- Single Latest Blog End -->

                
            </div>
            <!-- Latest Airdrop Offer End -->
        </div>

        <!-- Pagination Area Start -->
<div class="row">
    <div class="col-lg-12">
        <div class="pagination-area-wrap text-center">
            <div class="pagination-nav">
                <?php if ($current_page > 1): ?>
                    <a href="?page=<?php echo $current_page - 1 ?>" class="prev page-numbers">&laquo; Previous</a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <?php if ($i == $current_page): ?>
                    <span class="page-numbers current"><?php echo $i ?></span>
                <?php else: ?>
                    <a href="?page=<?php echo $i ?>" class="page-numbers"><?php echo $i ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($current_page < $total_pages): ?>
                <a href="?page=<?php echo $current_page + 1 ?>" class="next page-numbers">Next &raquo;</a>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
        <!-- Pagination Area End -->

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

<!-- Mirrored from codeboxr.net/themedemo/airdroop/news.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:32 GMT -->
</html>
