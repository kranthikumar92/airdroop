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
    $ads_id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_FILES['file']['name'])) {
    // Execute this block if the file is not selected or null
    $new_filename = $_POST['ads_img_alt'];
  } else {
    // Define the directory where the images will be stored
    $target_dir = "../ads_imgs/";
  
    // Get the name of the uploaded file
    $original_filename = basename($_FILES["file"]["name"]);
    $file_extension = pathinfo($original_filename, PATHINFO_EXTENSION);
    $new_filename = uniqid() . "." . $file_extension; // Generate a unique filename
    $target_file = $target_dir . $new_filename;

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      // File uploaded successfully
    } else {
      // Error uploading file
      echo "Error uploading image.";
      exit;
    }
  }

  // Escape user inputs for security
  $ads_location = mysqli_real_escape_string($conn, $_POST['ads_location']);
  $banner_title = mysqli_real_escape_string($conn, $_POST['banner_title']);
  $banner_link = mysqli_real_escape_string($conn, $_POST['banner_link']);
  $ads_status = mysqli_real_escape_string($conn, $_POST['ads_status']);


  // Prepare the SQL statement
  $sql = "UPDATE advertisement SET ads_location='$ads_location', banner_title='$banner_title', banner_img='$new_filename', banner_link='$banner_link', status='$ads_status' WHERE sno='$ads_id'";

  // Execute the statement
  if (mysqli_query($conn, $sql)) {
    echo "<div class='col-sm-10'>";
    echo "<h2>Advertisement Updated Successfully.</h2>";
    echo "<a href='edit-advertisement.php?id=" . $ads_id . "' class='btn btn-default'>Back to Ads Editing</a>";
    echo "&nbsp;";
    echo "<a href='ads-corner.php' class='btn btn-default'>Back to Ads Corner</a>";
    echo "</div>";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }



} else {

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM advertisement WHERE sno = $ads_id";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);
    $status = $post['status'];
    $ads_location = $post['ads_location'];
    
    ?>

              <form action="edit-advertisement?id=<?php echo $post['sno']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Advertisement Location</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="ads_location" id="ads_location">
                        <option value="top_banner" <?php if ($ads_location == 'top_banner') echo 'selected'; ?>>Top Banner</option>
                        <option value="bottom_banner" <?php if ($ads_location == 'bottom_banner') echo 'selected'; ?>>Bottom Banner</option>
                        <option value="airdrop_desc" <?php if ($ads_location == 'airdrop_desc') echo 'selected'; ?>>Airdrop Description</option>
                        <option value="airdrop_list_blog" <?php if ($ads_location == 'airdrop_list_blog') echo 'selected'; ?>>Airdrop List & Blog</option>
                        <option value="req_contact_left" <?php if ($ads_location == 'req_contact_left') echo 'selected'; ?>>Request & Contact (Left)</option>
                        <option value="req_contact_right" <?php if ($ads_location == 'req_contact_right') echo 'selected'; ?>>Request & Contact (Right)</option>
                      </select>                  
                  </div>
                </div>
              
                <div class="form-group">
                  <label for="banner_title" class="col-sm-2 control-label form-label">Banner Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['banner_title']; ?>" name="banner_title" id="banner_title">
                    <span id="helpBlock" class="help-block">Write Banner Title upto 60 letters which will be used for alt text.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="banner_link" class="col-sm-2 control-label form-label">Banner Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['banner_link']; ?>" name="banner_link" id="banner_link">
                  </div>
                </div>

                <div class="form-group">
                  <label for="airdrop_join_link" class="col-sm-2 control-label form-label">Banner Preview</label>
                  <div class="col-sm-10">
                    <img src="../ads_imgs/<?php echo $post['banner_img']; ?>" alt="preview" style="max-width: 400px; max-height: 300px;">
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Select new banner to upload:</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="file" id="file"><br>
                  </div>
                </div> 

                <div class="form-group" hidden>
                  <label for="ads_img_alt" class="col-sm-2 control-label form-label">Hidden</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['banner_img']; ?>" name="ads_img_alt" id="ads_img_alt">
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Blog Status</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="ads_status" id="ads_status">
                        <option value="Active" <?php if ($status == 'Active') echo 'selected'; ?>>Active</option>
                        <option value="Inactive" <?php if ($status == 'Inactive') echo 'selected'; ?>>Inactive</option>
                      </select>                  
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
            } else {
    // No rows were returned, so display an error message
    echo "No Advertisement Data found";
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