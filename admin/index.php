<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Kode - Premium Bootstrap Admin Template</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">


  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.html" class="logo">kode</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!--== Top Nav Start ==-->
    <?php
        include('top-nav.php');
    ?>
    <!--== Top Nav End ==-->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!--== Main Nav Start ==-->
<?php
        include('main-nav.php');
    ?>
    <!--== Main Nav End ==-->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="active">This is a quick overview of important details</li>
    </ol>

  </div>
  <!-- End Page Header -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-widget">

  <!-- Start Top Stats -->
  <?php
// Database connection parameters
$servername = "localhost";
$username = "calix_web_user";
$password = "calixworldhhUUh383287HGSHhs";
$dbname = "calix_cry_world";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query to get number of active rows in each table
$sql_airdrop_coins = "SELECT COUNT(*) AS num_active FROM airdrop_coins WHERE status = 'Active'";
$sql_contact_form = "SELECT COUNT(*) AS num_active FROM contact_form";
$sql_new_airdrop_requests = "SELECT COUNT(*) AS num_active FROM new_airdrop_requests";
$sql_blog_posts = "SELECT COUNT(*) AS num_active FROM blog_posts WHERE status = 'Active'";
$sql_users = "SELECT COUNT(*) AS num_active FROM users";
$sql_subscribers = "SELECT COUNT(*) AS num_active FROM subscribers";

// Execute queries
$result_airdrop_coins = $conn->query($sql_airdrop_coins);
$result_contact_form = $conn->query($sql_contact_form);
$result_new_airdrop_requests = $conn->query($sql_new_airdrop_requests);
$result_blog_posts = $conn->query($sql_blog_posts);
$result_users = $conn->query($sql_users);
$result_subscribers = $conn->query($sql_subscribers);

// Retrieve number of active rows from each query result
$num_active_airdrop_coins = $result_airdrop_coins->fetch_assoc()['num_active'];
$num_active_contact_form = $result_contact_form->fetch_assoc()['num_active'];
$num_active_new_airdrop_requests = $result_new_airdrop_requests->fetch_assoc()['num_active'];
$num_active_blog_posts = $result_blog_posts->fetch_assoc()['num_active'];
$num_active_users = $result_users->fetch_assoc()['num_active'];
$num_active_subscribers = $result_subscribers->fetch_assoc()['num_active'];

// Close connection
$conn->close();
?>

<!-- Start Top Stats -->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-rocket"></i> Active Airdrops</span>
      <h3>$<?php echo $num_active_airdrop_coins; ?></h3>
      <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-envelope-o"></i> Contact Msgs</span>
      <h3>$<?php echo $num_active_contact_form; ?></h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-futbol-o"></i> Airdrop Request</span>
      <h3><?php echo $num_active_new_airdrop_requests; ?></h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 9%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
    <span class="title"><i class="fa fa-file-text-o"></i> Blog Posts</span>
    <h3>$<?php echo $num_active_blog_posts; ?></h3>
    <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 15%</b> from last week</span>
    </li>
    <li class="col-xs-6 col-lg-2">
    <span class="title"><i class="fa fa-users"></i> Active Users</span>
    <h3>$<?php echo $num_active_users; ?></h3>
    <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 34%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
    <span class="title"><i class="fa fa-rss"></i> Subscribers</span>
    <h3>$<?php echo $num_active_subscribers; ?></h3>
    <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 7%</b> from last week</span>
    </li>
    </ul>
    </div>
    <!-- End Top Stats -->


  <!-- Start First Row -->
  <div class="row">

    <!-- Start Chart Daily -->
    <div class="col-md-12 col-lg-7">
      <div class=" panel-widget widget chart-with-stats clearfix" style="height:450px;">

        <div class="col-sm-12" style="height:450px;">
          <h4 class="title">TODAY SALES<small>Last update: 1 Hours ago</small></h4>
          <div class="top-label"><h2>11.291</h2><h4>Today Total</h4></div>
          <div class="bigchart" id="todaysales"></div>
        </div>
        <div class="right" style="height:450px;">
          <h4 class="title">PAGE VIEW</h4>
          <!-- start stats -->
          <ul class="widget-inline-list clearfix">
            <li class="col-12"><span>962</span>Themeforest<i class="chart sparkline-green"></i></li>
            <li class="col-12"><span>367</span>Codecanyon<i class="chart sparkline-blue"></i></li>
            <li class="col-12"><span>92</span>Photodune<i class="chart sparkline-red"></i></li>
          </ul>
          <!-- end stats -->
        </div>


      </div>
    </div>
    <!-- End Chart Daily -->


    <!-- Start Files -->
    <div class="col-md-12 col-lg-5">
      <div class="panel panel-widget" style="height:450px;">
        <div class="panel-title">
          My Files <span class="label label-danger">29</span>
          <ul class="panel-tools">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body table-responsive">

          <table class="table table-dic table-hover ">
            <tbody>
              <tr>
                <td><i class="fa fa-folder-o"></i>Projects</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-file-archive-o"></i>Backup</td>
                <td>Zip</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-file-code-o"></i>Kode Theme</td>
                <td>Html</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-file-pdf-o"></i>Documents</td>
                <td>Pdf</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-folder-o"></i>Themes</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-folder-o"></i>Uploaded Files</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
              <tr>
                <td><i class="fa fa-folder-o"></i>Personal Files</td>
                <td>Folder</td>
                <td class="text-r">27/2/2015 12:34 AM</td>
              </tr>
            </tbody>
          </table>          

        </div>
      </div>
    </div>
    <!-- End Files -->

  </div>  
  <!-- End First Row -->


  <!-- Start Second Row -->
  <div class="row">



    <!-- Start Today Activity -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget" style="height:380px;">
        <div class="panel-title">
          TODAY ACTIVITY <span class="label label-success">9</span>
          <ul class="panel-tools panel-tools-hover">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

          <ul class="widget-inline-list clearfix">
            <li class="col-4"><span>1:52:22</span>Active Time</li>
            <li class="col-4"><span>60%</span>Completed</li>
            <li class="col-4"><span>0:11:46</span>Break Time</li>
          </ul>

          <div id="todayactivity" class="chart-on-bottom"></div>

        </div>
      </div>
    </div>
    <!-- End Today Activity -->

    <!-- Start Server Status -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget" style="height:380px;">
        <div class="panel-title">
          SERVER STATUS <span class="label label-default">196</span>
          <ul class="panel-tools panel-tools-hover">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

          <ul class="widget-inline-list clearfix">
            <li class="col-3 color10"><span>28.9GB</span>Total Usage</li>
            <li class="col-3"><span>92%</span>Space Left</li>
            <li class="col-3 color7"><span>22%</span>CPU</li>
            <li class="col-3"><span>512MB</span>Total RAM</li>
          </ul>

          <div id="realtime" class="flotchart-placeholder" style="height:190px;"></div>

        </div>
      </div>
    </div>
    <!-- End Server Status -->

    <!-- Start Profile Widget -->
    <div class="col-md-12 col-lg-3">
      <div class="widget profile-widget" style="height:380px;">
        <img src="img/profileimg.png" class="profile-image" alt="img">
        <h1>Jonathan Doe</h1>
        <p><i class="fa fa-map-marker"></i> London</p>
        <a href="#" class="btn btn-sm">Follow</a>
        <ul class="stats widget-inline-list clearfix">
          <li class="col-4"><span>2.109</span>Followers</li>
          <li class="col-4"><span>596</span>Photos</li>
          <li class="col-4"><span>902</span>Like</li>
        </ul>
      </div>
    </div>
    <!-- End Profile Widget -->


  </div>
  <!-- End Second Row -->


  <!-- Start Third Row -->
  <div class="row">


    <!-- Start General Stats -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget" style="height:205px;">
        <div class="panel-title">
          General Stats
        </div>
        <div class="panel-body">

          <div class="easypie margin-b-50" data-percent="82"><span>82%</span>New Visit</div>
          <div class="easypie margin-b-50" data-percent="30"><span>30%</span>Order</div>
          <div class="easypie margin-b-50 margin-b-40" data-percent="62"><span>62%</span>Page View</div>
          <div class="easypie margin-b-50" data-percent="15"><span>15%</span>Client</div>
          <div class="easypie margin-b-50" data-percent="45"><span>45%</span>Storage</div>
          <div class="easypie margin-b-50" data-percent="75"><span>76%</span>Comments</div>

        </div>
      </div>
    </div>
    <!-- End General Stats -->

    <!-- Start TwitterBox -->
    <div class="col-md-6 col-lg-3">
      <div class="widget socialbox" style="background:#02A8F3; height:205px;">

        <p class="text">
          Never in all their history have men been able truly...
        </p>
        <p class="text-info">22 May, 2015 via mobile</p>

        <div class="logo"><i class="fa fa-twitter"></i></div>

        <ul class="info">
          <li><i class="fa fa-retweet"></i>694</li>
          <li><i class="fa fa-star-o"></i>2.192</li>
        </ul>

      </div>
    </div>
    <!-- End TwitterBox -->

    <!-- Start FacebookBox -->
    <div class="col-md-6 col-lg-3">
      <div class="widget socialbox" style="background:#47639E; height:205px;">

        <p class="text">
          Science has not yet mastered prophecy.
        </p>
        <p class="text-info">22 May, 2015 via mobile</p>

        <div class="logo"><i class="fa fa-facebook"></i></div>

        <ul class="info">
          <li><i class="fa fa-thumbs-up"></i>694</li>
          <li><i class="fa fa-comment"></i>2.192</li>
        </ul>

      </div>
    </div>
    <!-- End FacebookBox -->

  </div>
  <!-- End Third Row -->


  <!-- Start Fourth Row -->
  <div class="row">

    <!-- Start Browser Stats -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget">
        <div class="panel-title">
          Browser Stats
          <ul class="panel-tools panel-tools-hover">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

          <ul class="basic-list">
            <li>Google Chrome <span class="right label label-default">42.8%</span></li>
            <li>Firefox <span class="right label label-danger">16.9%</span></li>
            <li>Safari <span class="right label label-success">15.5%</span></li>
            <li>Opera <span class="right label label-primary">11.8%</span></li>
            <li>Internet Explorer <span class="right label label-danger">3.2%</span></li>
            <li>Mobile <span class="right label label-warning">3%</span></li>
            <li>Others <span class="right label label-warning">0%</span></li>
          </ul>

        </div>
      </div>
    </div>
    <!-- End Browser Stats -->

    <!-- Start Orders -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget">
        <div class="panel-title">
          LAST ORDERS <span class="label label-warning">196</span>
          <ul class="panel-tools">
            <li><a class="icon search-tool"><i class="fa fa-search"></i></a></li>
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <td class="text-center"><i class="fa fa-trash"></i></td>
                <td>Order ID</td>
                <td>Product</td>
                <td>Buyer</td>
                <td>Date</td>
                <td>Payment</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox1" type="checkbox"><label for="checkbox1"></label></div></td>
                <td># <b>9652</b></td>
                <td>Kode Gaming Laptop</td>
                <td>John Doe</td>
                <td>12/10/2015</td>
                <td>Credit Card</td>
              </tr>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox2" type="checkbox"><label for="checkbox2"></label></div></td>
                <td># <b>1963</b></td>
                <td>New Season Jacket</td>
                <td>Jane Doe</td>
                <td>12/10/2015</td>
                <td>Paypal</td>
              </tr>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox3" type="checkbox"><label for="checkbox3"></label></div></td>
                <td># <b>9652</b></td>
                <td>IO Mouse</td>
                <td>Jonathan Doe</td>
                <td>12/10/2015</td>
                <td>Credit Card</td>
              </tr>
              <tr>
                <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox4" type="checkbox"><label for="checkbox4"></label></div></td>
                <td># <b>9651</b></td>
                <td>Doe Bike</td>
                <td>Jonathan Doe</td>
                <td>12/10/2015</td>
                <td>Credit Card</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- End Orders -->


    <!-- Start Inbox -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget">
        <div class="panel-title">
          Inbox <span class="label label-danger">9</span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>
        <div class="panel-body">

        <ul class="mailbox-inbox">

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg.png" alt="img" class="img">
                <span class="from">Jonathan Doe</span>
                Hello, m8 how is goin ?
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg2.png" alt="img" class="img">
                <span class="from">Egemem Ka</span>
                Problems look mighty small...
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg3.png" alt="img" class="img">
                <span class="from">James Throwing</span>
                New job offer ?
                <span class="date">22 May</span>
              </a>
            </li>

            <li>
              <a href="#" class="item clearfix">
                <img src="img/profileimg4.png" alt="img" class="img">
                <span class="from">Timmy Jefsin</span>
                Tonight Party
                <span class="date">22 May</span>
              </a>
            </li>


        </ul>

        </div>
      </div>
    </div>
    <!-- End Inbox -->

  </div>
  <!-- End Fourth Row -->


  <!-- Start Fifth Row -->
  <div class="row">


    <!-- Start Project Stats -->
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-widget">
        <div class="panel-title">
          Projects Stats <span class="label label-info">62</span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover">
            <thead>
              <tr>
                <td>ID</td>
                <td>Project</td>
                <td>Status</td>
                <td class="text-right">Progress</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>965</td>
                <td>Kode Dashboard Template</td>
                <td><span class="label label-default">Developing</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>620</td>
                <td>EBI iOS Application</td>
                <td><span class="label label-warning">Design</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>621</td>
                <td>Kode Landing Page</td>
                <td><span class="label label-info">Testing</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>621</td>
                <td>John Coffe Shop Logo</td>
                <td><span class="label label-danger">Canceled</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
              <tr>
                <td>621</td>
                <td>BKM Website Design</td>
                <td><span class="label label-primary">Reply waiting</span></td>
                <td class="text-right"><span class="demo-project-stats"></span></td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- Start Project Stats -->


    <!-- Start BlogPost -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget blog-post">
        <div class="panel-body">

          <div class="image-div color10-bg">
            <img src="img/example1.jpg" class="image" alt="img">
            <h1 class="title"><a href="#">Across the sea of space, the stars are other suns.</a></h1>
          </div>
          <p class="text">There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally...</p>
          <a href="#">Read More</a>
          <p class="author">
            <img src="img/profileimg.png" alt="img">
            <span>Jonathan Doe</span>
            Designer
          </p>


        </div>
      </div>
    </div>
    <!-- End BlogPost -->


    <!-- Start Teammates -->
    <div class="col-md-12 col-lg-3">
      <div class="panel panel-info panel-widget">
        <div class="panel-title">
          Teammates
        </div>
        <div class="panel-body">
          <ul class="basic-list image-list">
            <li><img src="img/profileimg.png" alt="img" class="img"><b>Jonathan Doe</b><span class="desc">Designer</span></li>
            <li><img src="img/profileimg2.png" alt="img" class="img"><b>Egemem Ka</b><span class="desc">Front-End Developer</span></li>
            <li><img src="img/profileimg3.png" alt="img" class="img"><b>Timmy Jefsin</b><span class="desc">Back-End Developer</span></li>
            <li><img src="img/profileimg4.png" alt="img" class="img"><b>James K. Throwing</b><span class="desc">Marketing</span></li>
            <li><img src="img/profileimg5.png" alt="img" class="img"><b>John Doe</b><span class="desc">iOS Developer</span></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Teammates -->


  </div>
  <!-- End Fifth Row -->




</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2015 <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a>
  </div> 
</div>
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEPANEL -->
<div role="tabpanel" class="sidepanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
    <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
    <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <!-- Start Today -->
    <div role="tabpanel" class="tab-pane active" id="today">

      <div class="sidepanel-m-title">
        Today
        <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
      </div>

      <div class="gn-title">NEW</div>

      <ul class="list-w-title">
        <li>
          <a href="#">
            <span class="label label-danger">ORDER</span>
            <span class="date">9 hours ago</span>
            <h4>New Jacket 2.0</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-success">COMMENT</span>
            <span class="date">14 hours ago</span>
            <h4>Bill Jackson</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-info">MEETING</span>
            <span class="date">at 2:30 PM</span>
            <h4>Developer Team</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
        <li>
          <a href="#">
            <span class="label label-warning">EVENT</span>
            <span class="date">3 days left</span>
            <h4>Birthday Party</h4>
            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
          </a>
        </li>
      </ul>

    </div>
    <!-- End Today -->

    <!-- Start Tasks -->
    <div role="tabpanel" class="tab-pane" id="tasks">

      <div class="sidepanel-m-title">
        To-do List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">TODAY</div>

      <ul class="todo-list">
        <li class="checkbox checkbox-primary">
          <input id="checkboxside1" type="checkbox"><label for="checkboxside1">Add new products</label>
        </li>
        
        <li class="checkbox checkbox-primary">
          <input id="checkboxside2" type="checkbox"><label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
        </li>
        
        <li class="checkbox checkbox-warning">
          <input id="checkboxside3" type="checkbox"><label for="checkboxside3">Design Facebook page</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside4" type="checkbox"><label for="checkboxside4">Send Invoice to customers</label>
        </li>
        
        <li class="checkbox checkbox-danger">
          <input id="checkboxside5" type="checkbox"><label for="checkboxside5">Meeting with developer team</label>
        </li>
      </ul>

      <div class="gn-title">TOMORROW</div>
      <ul class="todo-list">
        <li class="checkbox checkbox-warning">
          <input id="checkboxside6" type="checkbox"><label for="checkboxside6">Redesign our company blog</label>
        </li>
        
        <li class="checkbox checkbox-success">
          <input id="checkboxside7" type="checkbox"><label for="checkboxside7">Finish client work</label>
        </li>
        
        <li class="checkbox checkbox-info">
          <input id="checkboxside8" type="checkbox"><label for="checkboxside8">Call Johnny from Developer Team</label>
        </li>

      </ul>
    </div>    
    <!-- End Tasks -->

    <!-- Start Chat -->
    <div role="tabpanel" class="tab-pane" id="chat">

      <div class="sidepanel-m-title">
        Friend List
        <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
        <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
      </div>

      <div class="gn-title">ONLINE MEMBERS (3)</div>
      <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
      </ul>

      <div class="gn-title">OFFLINE MEMBERS (8)</div>
     <ul class="group">
        <li class="member"><a href="#"><img src="img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
        <li class="member"><a href="#"><img src="img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
      </ul>

      <form class="search">
        <input type="text" class="form-control" placeholder="Search a Friend...">
      </form>
    </div>
    <!-- End Chat -->

  </div>

</div>
<!-- END SIDEPANEL -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="js/summernote/summernote.min.js"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/flot-chart/flot-chart-plugin.js"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/chartist/chartist.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/chartist/chartist-plugin.js"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/sparkline/sparkline-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="js/rickshaw/rickshaw-plugin.js"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="js/datatables/datatables.min.js"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="js/kode-alert/main.js"></script>

<!-- ================================================
Gmaps
================================================ -->
<!-- google maps api -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- main file -->
<script src="js/gmaps/gmaps.js"></script>
<!-- demo codes -->
<script src="js/gmaps/gmaps-plugin.js"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="js/moment/moment.min.js"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src="js/full-calendar/fullcalendar.js"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="js/date-range-picker/daterangepicker.js"></script>

<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->
<script>

// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 110; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todaysales"),
  renderer: 'bar',
  series: [
    {
      color: "#33577B",
      data: seriesData[0],
      name: 'Photodune'
    }, {
      color: "#77BBFF",
      data: seriesData[1],
      name: 'Themeforest'
    }, {
      color: "#C1E0FF",
      data: seriesData[2],
      name: 'Codecanyon'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );

</script>

<!-- Today Activity -->
<script>
// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 50; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todayactivity"),
  renderer: 'area',
  series: [
    {
      color: "#9A80B9",
      data: seriesData[0],
      name: 'London'
    }, {
      color: "#CDC0DC",
      data: seriesData[1],
      name: 'Tokyo'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );
</script>



</body>
</html>