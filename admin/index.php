<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Crypto Airdrop Listing Website is your one-stop destination to find and participate in the latest cryptocurrency airdrops. Get access to the hottest and most promising airdrops.">
  <meta name="keywords" content="Crypto Airdrop, Cryptocurrency, Airdrops, Free Coins, Tokens, Crypto Community, Blockchain, ICO, Crypto Rewards, Crypto Giveaways" />
  <title>Admin | Airdrop Listo - Crypto Airdrop Listing Template</title>
  <?php
        include('db_config.php');
    ?>
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
      <a href="index.php" class="logo">kode</a>
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

?>

<!-- Start Top Stats -->
<div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-rocket"></i> Active Airdrops</span>
      <h3><?php echo $num_active_airdrop_coins; ?></h3>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-envelope-o"></i> Contact Msgs</span>
      <h3><?php echo $num_active_contact_form; ?></h3>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-futbol-o"></i> Airdrop Request</span>
      <h3><?php echo $num_active_new_airdrop_requests; ?></h3>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-file-text-o"></i> Blog Posts</span>
      <h3><?php echo $num_active_blog_posts; ?></h3>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-users"></i> Active Users</span>
      <h3><?php echo $num_active_users; ?></h3>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-rss"></i> Subscribers</span>
      <h3><?php echo $num_active_subscribers; ?></h3>
    </li>
    </ul>
    </div>
    <!-- End Top Stats -->


  <!-- Start First Row -->
  <div class="row">

    <!-- Airdrop Listing -->
<div class="col-md-12 col-lg-5">
  <div class="panel panel-widget" style="height:450px;">
    <div class="panel-title" style="color: orange;">
      Active Airdrop Listing
    </div>
    <div class="panel-body table-responsive">

      <table class="table table-dic table-hover ">
        <thead>
          <tr>
            <th>Coin Name</th>
            <th>Estimated Value</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php

            // SQL query to retrieve data from airdrop_coins table with coin_name, est_value, status
            $sql = "SELECT coin_name, est_value, status FROM airdrop_coins";

            // Execute query and retrieve data
            $result = $conn->query($sql);

            // Display data in table
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["coin_name"]."</td><td>".$row["est_value"]."</td><td>".$row["status"]."</td></tr>";
              }
            } else {
              echo "<tr><td colspan='3'>No data available</td></tr>";
            }

          ?>
        </tbody>
      </table>          

    </div>
  </div>
</div>
<!-- End Airdrop Listing -->


    <!-- Start Subscribers -->
<div class="col-md-12 col-lg-3">
  <div class="panel panel-widget">
    <div class="panel-title" style="color: blue;">
      New Subscribers <?php

        // SQL query to retrieve subscriber details
        $sql = "SELECT email, date_time FROM subscribers
                ORDER BY sno DESC 
                LIMIT 7";

        // Execute query
        $result = mysqli_query($conn, $sql);

      ?>
    </div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <tr>
            <th>Email</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Loop through query results and display subscriber details in a table row
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td>' . $row['date_time'] . '</td>';
              echo '</tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- End Subscribers -->


    <!-- Start Inbox -->
    <div class="col-md-12 col-lg-4">
  <div class="panel panel-widget">
    <div class="panel-title" style="color: red;">
      New Messages
    </div>
    <div class="panel-body">
      <ul class="mailbox-inbox">
        <?php

          // Select data from contact_form table
          $sql = "SELECT reference, full_name, publish_date, SUBSTRING(description_contact, 1, 28) AS description_contact 
                  FROM contact_form 
                  ORDER BY publish_date DESC 
                  LIMIT 5";
          $result = mysqli_query($conn, $sql);

          // Check if any rows were returned
          if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo '<li><a href="edit-message.php?id=' . $row["reference"] . '" class="item clearfix">';
              echo '<span class="from">' . $row["full_name"] . '</span>';
              echo $row["description_contact"];
              echo '<span class="date">' . $row["publish_date"] . '</span>';
              echo '</a></li>';
            }
          } else {
            echo "0 results";
          }

          // Close connection
          mysqli_close($conn);
        ?>
      </ul>
    </div>
  </div>
</div>

    <!-- End Inbox -->


    

  </div>  
  <!-- End First Row -->


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