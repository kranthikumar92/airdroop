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
    <h1 class="title">Edit User</h1>
      <ol class="breadcrumb">
        <li><a href="users.php">Users</a></li>
        <li class="active">Edit Users</li>
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
    $user_id = $_GET['id'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Escape user inputs for security
        $user_status = mysqli_real_escape_string($conn, $_POST['user_status']);

        // Check if password is given, update password otherwise update only status
        if (!empty($_POST['password'])) {
            // Hash the password using Argon2
            $password = password_hash($_POST['password'], PASSWORD_ARGON2ID);

            // Prepare the SQL statement
            $sql = "UPDATE users SET password='$password', status='$user_status' WHERE sno='$user_id'";
        } else {
            // Prepare the SQL statement
            $sql = "UPDATE users SET status='$user_status' WHERE sno='$user_id'";
        }

        // Execute the statement
        if (mysqli_query($conn, $sql)) {
            echo "<div class='col-sm-10'>";
            echo "<h2>User Details Updated Successfully.</h2>";
            echo "<a href='edit-user.php?id=" . $user_id . "' class='btn btn-default'>Back to User Editing</a>";
            echo "&nbsp;";
            echo "<a href='users.php' class='btn btn-default'>Back to Users List</a>";
            echo "</div>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {

        // Query to retrieve user with given ID
        $sql = "SELECT * FROM users WHERE sno = $user_id";
        $result = mysqli_query($conn, $sql);

        // Check if the query returned any rows
        if (mysqli_num_rows($result) > 0) {
            // Fetch the first row as an associative array
            $user = mysqli_fetch_assoc($result);
            $status = $user['status'];
        } else {
            // No user found with given ID
            echo "No user found with ID " . $user_id;
            exit;
        }
      
?>

          <form action="edit-user.php?id=<?php echo $user['sno']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group">
                  <label for="username" class="col-sm-2 control-label form-label">Username</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $user['username']; ?>" name="username" id="username" disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label for="full_name" class="col-sm-2 control-label form-label">Full Name</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $user['full_name']; ?>" name="full_name" id="full_name" disabled>
                  </div>
              </div>

              <div class="form-group">
                  <label for="password" class="col-sm-2 control-label form-label">Password</label>
                  <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Enter new password" name="password" id="password">
              </div>
              </div>

              <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Update Status</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" name="user_status" id="user_status">
                        <option value="Active" <?php if ($status == 'Active') echo 'selected'; ?>>Active</option>
                        <option value="Inactive" <?php if ($status == 'Inactive') echo 'selected'; ?>>Inactive</option>
                      </select>                  
                  </div>
                </div>

              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="update_user">Update User</button> <a href="users.php" class="btn btn-default">Back</a>
                  </div>
              </div>
          </form> 
              
              <?php
    }
    
    mysqli_close($conn);

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