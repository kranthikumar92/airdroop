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
                                    <h2>List Your Coin Offer in Airdrop List</h2>
                                    <p>Promises advanced end-to-end encrypted chat messaging, decentralized storage,
                                        calling, video calling, inbox, voice messages etc.</p>
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
                                        <h2 class="h3 step-title">List Your Coin</h2>
                                        <form action="submit_response.php" method="post">
                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="Coin Name" name="coin_name" id="coin_name"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="Project Name" name="project_name" id="project_name"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="email" placeholder="Email" name="email" id="email"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <select name="designation" id="designation" class="wide">
                                                                <option disabled selected>Designation at Project
                                                                </option>
                                                                <option value="Founder">Founder</option>
                                                                <option value="Co-Founder">Co-Founder</option>
                                                                <option value="IT-Team">IT Team</option>
                                                                <option value="Manager">Manager</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="ICO Start Date"
                                                                   class="datepicker" name="ico_start_date" id="ico_start_date"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="ICO End Date"
                                                                   class="datepicker" name="ico_end_date" id="ico_end_date"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="Total Airdrop Value ($)" name="total_airdrop_value" id="total_airdrop_value"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="Individual Reward Value ($)" name="individual_reward_value" id="individual_reward_value"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                   <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <select name="referral_bonus" id="referral_bonus" class="wide">
                                                                <option disabled selected>Referral Available?
                                                                </option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="single-input-item">
                                                            <input type="text" placeholder="Coin Rate Against USD" name="coin_rate_against_usd" id="coin_rate_against_usd"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="url" placeholder="Project Telegram Link" name="project_telegram_link" id="project_telegram_link"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="url" placeholder="Project Twitter Link" name="project_twitter_link" id="project_twitter_link"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="url" placeholder="Project Discord Link" name="project_discord_link" id="project_discord_link"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="url" placeholder="Project Contact Telegram ID" name="project_contact_telegram_id" id="project_contact_telegram_id"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                                <textarea name="more_information" id="more_information" cols="50"
                                                                          rows="6"
                                                                          placeholder="More Information About Your Project"></textarea>
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

                                            <div class="submit-btn">
                                                <button class="btn btn-gradiant">List Airdrop</button>
                                            </div>
                                        </form>
                                    </div>
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
