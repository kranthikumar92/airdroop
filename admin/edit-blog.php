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
    $blog_id = $_GET['id'];
    //$update_id = $_GET['update'];
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

  if (empty($_FILES['file']['name'])) {
    // Execute this block if the file is not selected or null
    $new_filename = $_POST['blog_img_alt'];
  } else {
    // Define the directory where the images will be stored
    $target_dir = "../blog_imgs/";
  
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
  $airdrop_title = mysqli_real_escape_string($conn, $_POST['airdrop_title']);
  $airdrop_tagline = mysqli_real_escape_string($conn, $_POST['airdrop_tagline']);
  $airdrop_description = mysqli_real_escape_string($conn, $_POST['airdrop_description']);
  $step_bystep = mysqli_real_escape_string($conn, $_POST['step_by_step_guide']);
  $whitepaper = mysqli_real_escape_string($conn, $_POST['whitepaper']);
  $tokens = mysqli_real_escape_string($conn, $_POST['tokens']);
  $est_value = mysqli_real_escape_string($conn, $_POST['est_value']);
  $end_date = mysqli_real_escape_string($conn, $_POST['end_date']);
  $referral_available = mysqli_real_escape_string($conn, $_POST['referral_available']);
  $referral_link = mysqli_real_escape_string($conn, $_POST['referral_link']);
  $blockchain = mysqli_real_escape_string($conn, $_POST['blockchain']);
  $website_link = mysqli_real_escape_string($conn, $_POST['website_link']);
  $airdrop_join_link = mysqli_real_escape_string($conn, $_POST['airdrop_join_link']);
  $publist_date = mysqli_real_escape_string($conn, $_POST['publish_date']);
  $status = mysqli_real_escape_string($conn, $_POST['status']);

  // Prepare the SQL statement
  $sql = "UPDATE airdrop_coins SET coin_name='$airdrop_title', coin_img='$new_filename', coin_tagline='$airdrop_tagline', airdrop_description='$airdrop_description', airdrop_steps='$step_bystep', whitepaper='$whitepaper', tokens='$tokens', est_value='$est_value', end_date='$end_date', referral_available='$referral_available', referral_link='$referral_link', blockchain='$blockchain', website_link='$website_link', airdrop_join_link='$airdrop_join_link', publish_date='$publist_date', status='$status' WHERE sno='$update_id'";

  // Execute the statement
  if (mysqli_query($conn, $sql)) {
    echo "<div class='col-sm-10'>";
    echo "<h2>Airdrop Listing Updated Successfully.</h2>";
    echo "<a href='edit-airdrop.php?id=" . $update_id . "' class='btn btn-default'>Back to Airdrop Editing</a>";
    echo "&nbsp;";
    echo "<a href='airdrops.php' class='btn btn-default'>Back to Airdrops List</a>";
    echo "</div>";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }



} else {

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM blog_posts WHERE id = $blog_id";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);
    $status = $post['status'];
    
    ?>

              <form action="edit-airdrop.php?id=<?php echo $post['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="blog_title" class="col-sm-2 control-label form-label">Blog Post Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['title']; ?>" name="blog_title" id="blog_title">
                    <span id="helpBlock" class="help-block">Write Blog Post Title upto 60 letters.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Blog Author</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="blog_author" id="blog_author">
                        <option value="Admin" <?php if ($author == 'Admin') echo 'selected'; ?>>Admin</option>
                        <option value="Employee" <?php if ($author == 'Employee') echo 'selected'; ?>>Employee</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="blog_tags" class="col-sm-2 control-label form-label">Blog Tags</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['tags']; ?>" name="blog_tags" id="blog_tags">
                    <span id="helpBlock" class="help-block">Use "," to seperate tags.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Blog Content</label>
                  <div class="col-sm-10">
                    <div class="panel-body">
                      <textarea name="blog_content" id="summernote"><?php echo $post['content']; ?></textarea>
                    </div>
                  </div>
                </div>

               <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Select image to upload:</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="file" id="file"><br>
                  </div>
                </div> 

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Blog Status</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="blog_status" id="blog_status">
                        <option value="Active" <?php if ($status == 'Active') echo 'selected'; ?>>Active</option>
                        <option value="Inactive" <?php if ($status == 'Inactive') echo 'selected'; ?>>Inactive</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group" hidden>
                  <label for="blog_img_alt" class="col-sm-2 control-label form-label">Hidden</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['feature_image']; ?>" name="blog_img_alt" id="blog_img_alt">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button> <a href="blog-list.php" class="btn btn-default">Back</a>
                  </div>
                </div>

                                
              </form> 
<?php
            } else {
    // No rows were returned, so display an error message
    echo "No Blog Data found";
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