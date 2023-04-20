<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- Partial Navigation Start-->
        <?php
            include('partial-nav.php');
        ?>
        <!-- Partial Navigation End -->
      <div class="container-fluid page-body-wrapper">
        <!-- Main Navigation Start-->
        <?php
            include('main-nav.php');
        ?>
        <!-- Main Navigation End -->
        <div class="main-panel">
        <?php
// Database connection parameters
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

// Retrieve data from airdrop_coins table
$sql = "SELECT * FROM airdrop_coins";
$result = $conn->query($sql);
?>

<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Airdrops List </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="airdrops.php">Airdrop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Airdrops List</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Airdrops List</h4>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> sno </th>
                <th> Title </th>
                <th> Est Value </th>
                <th> Referral </th>
                <th> End Date </th>
                <th> Status </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["sno"] . "</td>";
                  echo "<td>" . $row["coin_name"] . "</td>";
                  echo "<td>" . $row["est_value"] . "</td>";
                  echo "<td>" . $row["referral_available"] . "</td>";
                  echo "<td>" . $row["end_date"] . "</td>";
                  echo "<td>" . $row["status"] . "</td>";
                  echo '<td><a href="edit_airdrop.php?id=' . $row["sno"] . '" class="btn btn-outline-secondary btn-icon-text">Edit <i class="mdi mdi-file-check btn-icon-append"></i></a>
                  </td>';
                  echo "</tr>";
                }
              } else {
                echo "<tr><td colspan='7'>No Airdrops found</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
// Close database connection
$conn->close();
?>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>