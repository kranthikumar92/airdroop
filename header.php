<!--== Search Box Area Start ==-->
<div class="search-box-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  m-auto">
                <div class="search-form-wrap">
                    <form action="search-airdrop.php" method="get">
                        <input type="search" name="search" placeholder="type keyword and hit enter" />
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

<!--== Header Area Start ==-->
<header id="header-area">
    <!-- Preheader Area Start -->
    <div class="preheader-area d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!--== Advertise Bottom Start ==-->
                    <?php
                        include('preheader_ads.php');
                    ?>
                    <!--== Advertise Bottom End ==-->
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
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/logo.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#mainMenu">
                            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse" id="mainMenu">
                            <ul class="navbar-nav ml-auto">
                                <li class="current"><a href="index.php">Home</a></li>
                                <li><a href="airdrop-listing.php">Airdrops</a></li>
                                <li><a href="submit.php">Submit Airdrop</a></li>
                                <li><a href="news.php">News</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                            <div class="member-area">
                                <a href="#" class="btn btn-round btn-search"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Area End -->
