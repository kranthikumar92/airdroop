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
    <h1 class="title">Airdrop Listing Requests</h1>
      <ol class="breadcrumb">
        <li><a href="airdrops-requests.php">Airdrop Requests</a></li>
        <li class="active">Listing Requests</li>
      </ol>

  </div>
  <!-- End Page Header -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">


  <!-- Start Row -->
  <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body table-responsive">

        <?php

// Retrieve data from the airdrop_coins table
$sql = "SELECT * FROM new_airdrop_requests";
$result = $conn->query($sql);

// Create a table with the retrieved data
if ($result->num_rows > 0) {
    echo "<table id='airdrop-listing' class='table display'>";
    echo "<thead><tr><th>Reference</th><th>Coin Name</th><th>Email</th><th>Airdrop Value ($)</th><th>Coin Price ($)</th><th>Submit Date</th><th>Update Date</th><th>Status</th><th>Action</th></tr></thead>";
    echo "<tfoot><tr><th>Reference</th><th>Coin Name</th><th>Email</th><th>Airdrop Value ($)</th><th>Coin Price ($)</th><th>Submit Date</th><th>Update Date</th><th>Status</th><th>Action</th></tr></tfoot>";
    echo "<tbody>";

// Determine the CSS class for status


    while ($row = $result->fetch_assoc()) {
    //Status Color Settings    
        $statusClass = '';
switch ($row['status']) {
    case 'Submitted':
        $statusClass = 'blue';
        break;
    case 'Processing':
        $statusClass = 'orange';
        break;
    case 'Rejected':
        $statusClass = 'red';
        break;
    case 'Listed':
        $statusClass = 'green';
        break;
    default:
        $statusClass = '';
        break;
}
        echo "<tr>";
        echo "<td>" . $row["reference"] . "</td>";
        echo "<td>" . $row["coin_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["total_airdrop_value"] . "</td>";
        echo "<td>" . $row["coin_rate_against_usd"] . "</td>";
        echo "<td>" . $row["create_date"] . "</td>";
        echo "<td>" . $row["update_date"] . "</td>";
        echo "<td  style='color:" . $statusClass . "'><strong>" . $row["status"] . "</strong></td>";
        echo "<td><a href='edit-airdrop-request.php?id=" . $row["reference"] . "' class='btn btn-warning'>Edit</a></td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "No Airdrop Request data found.";
}

// Close database connection
$conn->close();
?>



        </div>

      </div>
    </div>
    <!-- End Panel -->


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
Data Tables
================================================ -->
<script src="js/datatables/datatables.min.js"></script>



<script>
$(document).ready(function() {
    $('#airdrop-listing').DataTable();
} );
</script>



<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );
</script>


</body>
</html>