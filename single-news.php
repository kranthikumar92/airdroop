<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeboxr.net/themedemo/airdroop/single-news.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:35 GMT -->
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
                <!-- Single News Page Content Start -->
                <div class="single-airdrop-page-wrap">
                    <div class="row">
                        <!-- News content Area Start -->
                        <div class="col-lg-8">
    <!--Retrieve data from db (blog) -->
    <?php
    // Establish a database connection
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

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM blog_posts WHERE id = 1";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);
    $likes = $post['likes'];
    // Check if the user clicked the like button
    if (isset($_POST['like'])) {
        $likes++;
        // Update the likes count in the database
        $update_sql = "UPDATE blog_posts SET likes = $likes WHERE id = 1";
        mysqli_query($conn, $update_sql);
    }
    ?>
    <article class="single-news-content-wrap">
        <header class="article-head">
            <figure class="single-news-thumb">
                <img src="<?php echo $post['feature_image']; ?>" class="img-fluid"
                     alt="<?php echo $post['title']; ?>">
            </figure>
            <div class="single-news-meta">
                <h1 class="h3"><?php echo $post['title']; ?></h1>
                <div class="posting-info">
                    <a href="#"><?php echo $post['created_at']; ?></a> • Posted by: <a
                            href="#"><?php echo $post['author']; ?></a>
                </div>
            </div>
        </header>
        <section class="news-details">
            <?php echo $post['content']; ?>
        </section>
        <footer class="post-share">
            <div class="row no-gutters ">
                <div class="col-8">
                    <div class="shareonsocial">
                        <span>Share:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin"></i></a>   
                    </div>
                    
                </div>
                <div class="col-4 m-auto text-right">
                    <form method="post">
                        <div class="post-like-comm">
                            <button type="submit" name="like"><i class="fa fa-thumbs-o-up"></i><?php echo $likes; ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
    </article>
<?php
} else {
    // No rows were returned, so display an error message
    echo "No blog post found with ID 1";
}
?>

                        </div>

                        <!-- News content Area End -->

                        <!-- Sidebar Area Start -->
                        <div class="col-lg-4 order-first order-lg-last">
                            <div class="sidebar-area-wrap">
                                <!-- Single Sidebar Start -->
                                <div class="single-sidebar-wrap">
                                    <div class="brand-search-form">
                                        <form action="https://codeboxr.net/themedemo/airdroop/index.php">
                                            <input type="search" placeholder="Type and hit here">
                                            <button type="button"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Single Sidebar End -->

                                <!-- Single Sidebar Start -->
                                <div class="single-sidebar-wrap">
                                    <h4 class="sidebar-title">Categories</h4>
                                    <div class="sidebar-body">
                                        <ul class="brand-unorderlist">
                                            <li><a href="#">Scholership</a></li>
                                            <li><a href="#">Alumni</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Member</a></li>
                                            <li><a href="#">Tour</a></li>
                                            <li><a href="#">Current Student</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- Single Sidebar End -->

                                <!-- Single Sidebar Start -->
                                <div class="single-sidebar-wrap d-none d-lg-block">
                                    <h4 class="sidebar-title">Popular Tags</h4>
                                    
                                    <?php
    // Get the tags for the blog post
    $post_tags = explode(",", $post['tags']);
?>
<div class="sidebar-body">
    <div class="tags">
        <?php
        // Loop through the tags and create links
        foreach ($post_tags as $tag) {
            $tag_link = str_replace(' ', '-', strtolower($tag));
            echo '<a href="#' . $tag_link . '" class="post-tag">' . $tag . '</a>';
        }
        ?>
    </div>
</div> 
<!-- The above code will output the tags in the following format: -->
<!-- <div class="sidebar-body">
    <div class="tags">
        <a href="#bootstrap" class="post-tag">Bootstrap</a>
        <a href="#design" class="post-tag">Design</a>
        <a href="#web" class="post-tag">web</a>
        <a href="#custom" class="active post-tag">custom</a>
        <a href="#wordpres" class="post-tag">wordpres</a>
        <a href="#art" class="post-tag">Art</a>
        <a href="#our-team" class="post-tag">our team</a>
        <a href="#classic" class="post-tag">Classic</a>
    </div>
</div> -->


                                </div>
                                <!-- Single Sidebar End -->
                            </div>
                        </div>
                        <!-- Sidebar Area End -->
                    </div>
                    <!-- Single News Page Content End -->
                </div>
            </div>

        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->
<?php

// Close the database connection
mysqli_close($conn);
?>

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

<!-- Mirrored from codeboxr.net/themedemo/airdroop/single-news.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:30:35 GMT -->
</html>
