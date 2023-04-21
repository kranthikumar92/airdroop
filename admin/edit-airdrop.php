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
    <h1 class="title">Add New Airdrop Listing</h1>
      <ol class="breadcrumb">
        <li><a href="airdrops.php">Airdrop</a></li>
        <li class="active">Add New Airdrop</li>
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
    $airdrop_id = $_GET['id'];
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Define the directory where the images will be stored
$target_dir = "../airdrop_imgs/";
$publist_date = date('Y-m-d');

// Get the name of the uploaded file
$original_filename = basename($_FILES["file"]["name"]);
$file_extension = pathinfo($original_filename, PATHINFO_EXTENSION);
$new_filename = uniqid() . "." . $file_extension; // Generate a unique filename
$target_file = $target_dir . $new_filename;

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

  // Prepare the SQL statement
  $sql = "UPDATE airdrops SET (coin_name, coin_img, coin_tagline, airdrop_description, airdrop_steps, whitepaper, tokens, est_value, end_date, referral_available, referral_link, blockchain, website_link, airdrop_join_link, publish_date, status) VALUES ('".$_POST['airdrop_title']."', '".$new_filename."', '".$_POST['airdrop_tagline']."', '".$_POST['airdrop_description']."', '".$_POST['step_by_step_guide']."', '".$_POST['whitepaper']."', '".$_POST['tokens']."', '".$_POST['est_value']."', '".$_POST['end_date']."', '".$_POST['referral_available']."', '".$_POST['referral_link']."', '".$_POST['blockchain']."', '".$_POST['website_link']."', '".$_POST['airdrop_join_link']."', '".$publist_date."', '".$_POST['status']."') WHERE id=1";

  // Execute the statement
  if (mysqli_query($conn, $sql)) {
      echo "<h2>Airdrop Listing Updated Successfully.</h2>";
  } else {
      echo "" . mysqli_error($conn);
  }

}

} else {

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM airdrop_coins WHERE sno = $airdrop_id";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);
    $status = $post['status'];
    $ref_available = $post['referral_available'];
    
    ?>

              <form action="airdrop-submit.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="airdrop_title" class="col-sm-2 control-label form-label">Airdrop Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['coin_name']; ?>" name="airdrop_title" id="airdrop_title">
                  </div>
                </div>

                <div class="form-group">
                  <label for="airdrop_tagline" class="col-sm-2 control-label form-label">Airdrop or Project Tagline</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['coin_tagline']; ?>" name="airdrop_tagline" id="airdrop_tagline">
                    <span id="helpBlock" class="help-block">Write Airdrop or Crypto Project Tagline in 50 letters.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="whitepaper" class="col-sm-2 control-label form-label">Whitepaper</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['whitepaper']; ?>" name="whitepaper" id="whitepaper">
                  </div>
                </div>

                <div class="form-group">
                  <label for="tokens" class="col-sm-2 control-label form-label">Tokens</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['tokens']; ?>" name="tokens" id="tokens">
                  </div>
                </div>

              
                <div class="form-group">
                  <label for="est_value" class="col-sm-2 control-label form-label">Est Value</label>
                  <div class="col-sm-10">
                    <label class="sr-only" for="est_value">Amount (in dollars)</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                      <input type="text" class="form-control" value="<?php echo $post['est_value']; ?>" name="est_value" id="est_value" placeholder="Amount">
                      
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="end_date" class="col-sm-2 control-label form-label">End Date</label>
                  <div class="col-sm-10">
                  <fieldset>
                    <div class="control-group">
                      <div class="controls">
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input type="text" name="end_date" id="end_date" class="form-control" value="<?php echo $post['end_date']; ?>"/> 
                       </div>
                      </div>
                    </div>
                   </fieldset>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Referral Available</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="referral_available" id="referral_available">
                        <option value="Yes" <?php if ($status == 'Yes') echo 'selected'; ?>>Yes</option>
                        <option value="No" <?php if ($status == 'No') echo 'selected'; ?>>No</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="referral_link" class="col-sm-2 control-label form-label">Referral Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['referral_link']; ?>" name="referral_link" id="referral_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="blockchain" class="col-sm-2 control-label form-label">Blockchain</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['blockchain']; ?>" name="blockchain" id="blockchain">
                  </div>
                </div>

                <div class="form-group">
                  <label for="website_link" class="col-sm-2 control-label form-label">Website Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['website_link']; ?>" name="website_link" id="website_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="airdrop_join_link" class="col-sm-2 control-label form-label">Airdrop Join Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['airdrop_join_link']; ?>" name="airdrop_join_link" id="airdrop_join_link">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Status</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="status" id="status">
                    <option value="active" <?php if ($status == 'active') echo 'selected'; ?>>Active</option>
                    <option value="ended" <?php if ($status == 'ended') echo 'selected'; ?>>Ended</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Airdrop Description</label>
                  <div class="col-sm-10">
                    <div class="panel-body">
                      <textarea name="airdrop_description" id="summernote"><?php echo $post['airdrop_description']; ?></textarea>
                    </div>
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Step by Step Guide</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="3" name="step_by_step_guide" id="step_by_step_guide" value="<?php echo $post['airdrop_steps']; ?>"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Select image to upload:</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" value="<?php echo $post['coin_img']; ?>" name="file" id="file"><br>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
                
              </form> 
<?php
           } } else {
    // No rows were returned, so display an error message
    echo "No Airdrop Data found";
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