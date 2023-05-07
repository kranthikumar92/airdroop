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
    <h1 class="title">Update Info Pages</h1>
      <ol class="breadcrumb">
        <li><a href="info-pages.php">Information Pages</a></li>
        <li class="active">Edit Info Page</li>
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
    $page_id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Escape user inputs for security
$page_title = mysqli_real_escape_string($conn, $_POST['page_title']);
$page_content = mysqli_real_escape_string($conn, $_POST['page_content']);
$page_slug = mysqli_real_escape_string($conn, $_POST['page_slug']);
$page_status = mysqli_real_escape_string($conn, $_POST['page_status']);


  // Prepare the SQL statement
  $sql = "UPDATE info_pages SET page_title='$page_title', content='$page_content', slug='$page_slug', status='$page_status' WHERE sno='$page_id'";

  // Execute the statement
  if (mysqli_query($conn, $sql)) {
    echo "<div class='col-sm-10'>";
    echo "<h2>Page Details Updated Successfully.</h2>";
    echo "<a href='edit-info-page.php?id=" . $page_id . "' class='btn btn-default'>Back to Page Editing</a>";
    echo "&nbsp;";
    echo "<a href='info-pages.php' class='btn btn-default'>Back to Info Pages List</a>";
    echo "</div>";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }



} else {

// Query to retrieve blog post with ID 1
$sql = "SELECT * FROM info_pages WHERE sno = $page_id";
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Fetch the first row as an associative array
    $post = mysqli_fetch_assoc($result);
    $status = $post['status'];
    
    ?>

              <form action="edit-info-page.php?id=<?php echo $post['sno']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                  <label for="page_title" class="col-sm-2 control-label form-label">Page Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $post['page_title']; ?>" name="page_title" id="page_title">
                    <span id="helpBlock" class="help-block">Update Page Title upto 60 letters.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="page_slug" class="col-sm-2 control-label form-label">Page Slug</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value= "<?php echo $post['slug']; ?>" name="page_slug" id="page_slug">
                    <span id="helpBlock" class="help-block">Slug is used for url, use "-" between words.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Blog Content</label>
                  <div class="col-sm-10">
                    <div class="panel-body">
                      <textarea name="page_content" id="summernote"><?php echo $post['content']; ?></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Update Status</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="page_status" id="page_status">
                        <option value="Active" <?php if ($status == 'Active') echo 'selected'; ?>>Active</option>
                        <option value="Inactive" <?php if ($status == 'Inactive') echo 'selected'; ?>>Inactive</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button> <a href="info-pages.php" class="btn btn-default">Back</a>
                  </div>
                </div>
                
              </form> 
              <?php
            } else {
    // No rows were returned, so display an error message
    echo "No Information Page Data found";
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