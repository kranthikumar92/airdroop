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
    <h1 class="title">Edit Airdrop Listing</h1>
      <ol class="breadcrumb">
        <li><a href="airdrops.php">Airdrop</a></li>
        <li class="active">Edit Airdrop</li>
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

            <!--Retrieve data from db (Airdrops List) -->
    <?php
    $req_reference = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Escape user inputs for security
  $request_status = mysqli_real_escape_string($conn, $_POST['request_status']);
  $update_date = date('Y-m-d');


  // Prepare the SQL statement
  $sql = "UPDATE new_airdrop_requests SET update_date='$update_date', status='$request_status' WHERE reference='$req_reference'";

  // Execute the statement
  if (mysqli_query($conn, $sql)) {
    echo "<div class='col-sm-10'>";
    echo "<h2>Airdrop Request Status Updated Successfully.</h2>";
    echo "<a href='edit-airdrop-request.php?id=" . $req_reference . "' class='btn btn-default'>Back to Message Editing</a>";
    echo "&nbsp;";
    echo "<a href='airdrop-requests.php' class='btn btn-default'>Back to Airdrop Request List</a>";
    echo "</div>";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }



} else {

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM new_airdrop_requests WHERE reference = $req_reference";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);
    $status = $post['status'];
    
    ?>

              <form action="edit-airdrop-request?id=<?php echo $post['reference']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="request_reference" class="col-sm-2 control-label form-label">Reference</label>
                  <div class="col-sm-10">
                    <p class="form-control-static">#<?php echo $post['reference']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="designation" class="col-sm-2 control-label form-label">Posted by</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['designation']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Coin Name</label>
                  <div class="col-sm-10">
                     <p class="form-control-static"><?php echo $post['coin_name']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Project Name</label>
                  <div class="col-sm-10">
                     <p class="form-control-static"><?php echo $post['project_name']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Email Address</label>
                  <div class="col-sm-10">
                     <p class="form-control-static"><?php echo $post['email']; ?></p>
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label form-label">ICO Start Date</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['ico_start_date']; ?></p>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">ICO End Date</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['ico_end_date']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Referral Available</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['referral_bonus']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Total Airdrop Value</label>
                  <div class="col-sm-10">
                    <p class="form-control-static">$<?php echo $post['total_airdrop_value']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Individual Reward Value</label>
                  <div class="col-sm-10">
                    <p class="form-control-static">$<?php echo $post['individual_reward_value']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Coin Price</label>
                  <div class="col-sm-10">
                    <p class="form-control-static">$<?php echo $post['coin_rate_against_usd']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Project Telegram Link</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['project_telegram_link']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Project Twitter Link</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['project_twitter_link']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Project Discord Link</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['project_discord_link']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Contact Telegram Link</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['project_contact_telegram_id']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Request Submit Date</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['create_date']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Update Date</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['update_date']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Description</label>
                  <div class="col-sm-10">
                    <p class="form-control-static"><?php echo $post['more_information']; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Update Status</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="request_status" id="request_status">
                        <option value="Submitted" <?php if ($status == 'Submitted') echo 'selected'; ?>>Submitted</option>
                        <option value="Processing" <?php if ($status == 'Processing') echo 'selected'; ?>>Processing</option>
                        <option value="Rejected" <?php if ($status == 'Rejected') echo 'selected'; ?>>Rejected</option>
                        <option value="Listed" <?php if ($status == 'Listed') echo 'selected'; ?>>Listed</option>
                      </select>                  
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button> <a href="airdrop-requests.php" class="btn btn-default">Back</a>
                  </div>
                </div>

                                
              </form> 
<?php
            } else {
    // No rows were returned, so display an error message
    echo "No Message Data found";
}
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