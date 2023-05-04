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
    <h1 class="title">Add Advertisement</h1>
      <ol class="breadcrumb">
        <li><a href="ads-corner.php">Ads Corner</a></li>
        <li class="active">Add Advertisement</li>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Define the directory where the images will be stored
$target_dir = "../ads_imgs/";
//$publist_date = date('Y-m-d');

// Get the name of the uploaded file
$original_filename = basename($_FILES["file"]["name"]);
$file_extension = pathinfo($original_filename, PATHINFO_EXTENSION);
$new_filename = uniqid() . "." . $file_extension; // Generate a unique filename
$target_file = $target_dir . $new_filename;

// Escape user inputs for security
$ads_location = mysqli_real_escape_string($conn, $_POST['ads_location']);
$banner_title = mysqli_real_escape_string($conn, $_POST['banner_title']);
$banner_link = mysqli_real_escape_string($conn, $_POST['banner_link']);
$status = 'Active';
//$publish_date = date('Y-m-d');

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

    // Prepare the SQL statement
    $sql = "INSERT INTO advertisement (ads_location, banner_title, banner_img, banner_link, status) 
        VALUES ('".$ads_location."', '".$banner_title."', '".$new_filename."', '".$banner_link."', '".$status."')";

    // Execute the statement
    if (mysqli_query($conn, $sql)) {
        echo "<div class='col-sm-10'>";
        echo "<h2>New Advertisement Added Successfully.</h2>";
        echo "<a href='ads-corner.php' class='btn btn-default'>Back to Ads Corner</a>";
        echo "</div>";
    } else {
        echo "" . mysqli_error($conn);
    }

} else {

    echo "Error uploading image.";
}

// Close the connection
mysqli_close($conn);


} else {
    
    ?>

              <form action="add-advertisement" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label form-label">Advertisement Location</label>
                <div class="col-sm-8">
                  <select class="selectpicker" name="ads_location" id="ads_location" onchange="showText()">
                    <option value="top_banner">Top Banner</option>
                    <option value="bottom_banner">Bottom Banner</option>
                    <option value="airdrop_desc">Airdrop Description</option>
                    <option value="airdrop_list_blog">Airdrop List & Blog</option>
                    <option value="req_contact_left">Request & Contact (Left)</option>
                    <option value="req_contact_right">Request & Contact (Right)</option>
                  </select>
                  <div id="text"></div>
                </div>
              </div>
              
                <div class="form-group">
                  <label for="banner_title" class="col-sm-2 control-label form-label">Banner Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="banner_title" id="banner_title">
                    <span id="helpBlock" class="help-block">Write Banner Title upto 60 letters which will be used for alt text.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="banner_link" class="col-sm-2 control-label form-label">Banner Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="banner_link" id="banner_link">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Select image to upload:</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="file" id="file"><br>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button> <a href="ads-corner.php" class="btn btn-default">Back</a>
                  </div>
                </div>
                
              </form> 
<?php
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

<script>
function showText() {
  var selectElement = document.getElementById("ads_location");
  var selectedValue = selectElement.value;
  var textElement = document.getElementById("text");
  
  // Clear previous text
  textElement.innerHTML = "";
  
  // Add text based on selected value
  switch (selectedValue) {
    case "top_banner":
      textElement.innerHTML = "This is the top banner location.";
      break;
    case "bottom_banner":
      textElement.innerHTML = "This is the bottom banner location.";
      break;
    case "airdrop_desc":
      textElement.innerHTML = "This is the airdrop description location.";
      break;
    case "airdrop_list_blog":
      textElement.innerHTML = "This is the airdrop list & blog location.";
      break;
    case "req_contact_left":
      textElement.innerHTML = "This is the request & contact (left) location.";
      break;
    case "req_contact_right":
      textElement.innerHTML = "This is the request & contact (right) location.";
      break;
    default:
      // No text to display
      break;
  }
}
</script>

</body>
</html>