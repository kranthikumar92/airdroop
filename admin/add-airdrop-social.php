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
  		<a href="index.php" class="logo">Admin</a>
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
    <h1 class="title">Add Social Links to Airdrop Listing</h1>
      <ol class="breadcrumb">
        <li><a href="airdrops.php">Airdrop</a></li>
        <li class="active">Add Social Links</li>
      </ol>

  </div>
  <!-- End Page Header -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">


  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12">
      <div class="panel panel-default">
            <div class="panel-body">
            <?php

// Define the directory where the images will be stored
$publist_date = date('Y-m-d');
$airdrop_coin_id = $_GET["id"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if social data already exists
    //$airdrop_id_chk = mysqli_real_escape_string($conn, $_POST['airdrop_sno']);
    $check_sql = "SELECT * FROM airdrop_coin_social WHERE airdrop_sno = '$airdrop_coin_id'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<h2 style='color:red'>Airdrop Social Links with the same Coin Name already exists.</h2>";
        mysqli_close($conn);
    } 
    else {
        // Prepare the SQL statement
        $sql = "INSERT INTO airdrop_coin_social (airdrop_sno, website_link, join_link, twitter_link, medium_link, youtube_link, facebook_link, instagram_link, discord_link, telegram_link, blog_link, github_link, reddit_link, linkedin_link) VALUES ('".$airdrop_coin_id."', ";

        // Add non-empty values to the SQL statement
        $fields = array('web_link', 'airdrop_join_link', 'twitter_link', 'medium_link', 'youtube_link', 'facebook_link', 'insta_link', 'discord_link', 'telegram_link', 'blog_link', 'github_link', 'reddit_link', 'linkedin_link');
        $values = array();
        foreach ($fields as $field) {
            if (!empty($_POST[$field])) {
                $values[] = "'".mysqli_real_escape_string($conn, $_POST[$field])."'";
            } else {
                $values[] = "NULL";
            }
        }
        $sql .= implode(", ", $values) . ")";

        // Execute the statement
        if (mysqli_query($conn, $sql)) {
          echo "<div class='col-sm-10'>";
          echo "<h2>Airdrop Social Links Added Successfully.</h2>";
          echo "<a href='airdrops.php' class='btn btn-default'>Back to Airdrops List</a>";
          echo "</div>";
        } else {
            echo "" . mysqli_error($conn);
        }
    } 

    // Close the connection
    mysqli_close($conn);
} 
else {
    // Display the HTML form if no form was submitted
    echo '
              <form action="add-airdrop-social.php?id=28" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="web_link" class="col-sm-2 control-label form-label">Website Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="web_link" id="web_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="airdrop_join_link" class="col-sm-2 control-label form-label">Airdrop Join Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="airdrop_join_link" id="airdrop_join_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="twitter_link" class="col-sm-2 control-label form-label">Twitter Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="twitter_link" id="twitter_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="medium_link" class="col-sm-2 control-label form-label">Medium Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="medium_link" id="medium_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="youtube_link" class="col-sm-2 control-label form-label">Youtube Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="youtube_link" id="youtube_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="facebook_link" class="col-sm-2 control-label form-label">Facebook Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook_link" id="facebook_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="insta_link" class="col-sm-2 control-label form-label">Instagram Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="insta_link" id="insta_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="discord_link" class="col-sm-2 control-label form-label">Discord Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="discord_link" id="discord_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="telegram_link" class="col-sm-2 control-label form-label">Telegram Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telegram_link" id="telegram_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="blog_link" class="col-sm-2 control-label form-label">Blog Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="blog_link" id="blog_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="github_link" class="col-sm-2 control-label form-label">Github Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="github_link" id="github_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="reddit_link" class="col-sm-2 control-label form-label">Reddit Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="reddit_link" id="reddit_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="linkedin_link" class="col-sm-2 control-label form-label">Linkedin Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="linkedin_link" id="linkedin_link">
                  </div>
                </div>
              
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button> <a href="airdrops.php" class="btn btn-default">Back</a>
                  </div>
                </div>
                
              </form> ';
}
?>

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->

</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!--== Footer Start ==-->
<?php
        include('footer.php');
    ?>
    <!--== Footer End ==-->


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
Moment.js
================================================ -->
<script type="text/javascript" src="js/moment/moment.min.js"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="js/date-range-picker/daterangepicker.js"></script>


<!-- Basic Date Range Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-range-picker').daterangepicker(null, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<!-- Basic Single Date Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-picker').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<!-- Date Range and Time Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-range-and-time-picker').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    format: 'MM/DD/YYYY h:mm A'
  }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

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

<script>
  /* BOOTSTRAP WYSIHTML5 */
  $('.textarea').wysihtml5();

  /* SUMMERNOTE*/
  $(document).ready(function() {
  $('#summernote').summernote();
});
</script>

</body>
</html>