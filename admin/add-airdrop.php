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
              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Static Field</label>
                  <div class="col-sm-10">
                    <p class="form-control-static">email@example.com</p>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">Airdrop Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input001" class="col-sm-2 control-label form-label">Airdrop or Project Tagline</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input001">
                    <span id="helpBlock" class="help-block">Write Airdrop or Crypto Project Tagline in 50 letters.</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">Whitepaper</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">Tokens</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
                  </div>
                </div>

              
                <div class="form-group">
                  <label for="exampleInputAmount" class="col-sm-2 control-label form-label">Est Value</label>
                  <div class="col-sm-10">
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                      
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">End Date</label>
                  <div class="col-sm-10">
                  <fieldset>
                    <div class="control-group">
                      <div class="controls">
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input type="text" id="date-picker" class="form-control" value="04/20/2023"/> 
                       </div>
                      </div>
                    </div>
                   </fieldset>
                  </div>
                </div>

                

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Referral Available</label>
                  <div class="col-sm-8">
                    <select class="selectpicker">
                        <option>Yes</option>
                        <option>No</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">Referral Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">Blockchain</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">Website Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">Airdrop Join Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Status</label>
                  <div class="col-sm-8">
                    <select class="selectpicker">
                        <option>Active</option>
                        <option>Ended</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Airdrop Description</label>
                  <div class="col-sm-10">
                    <div class="panel-body">
                      <div id="summernote">Write Description of Airdrop</div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Airdrop Steps Guide</label>
                  <div class="col-sm-10">
                    <div class="panel-body">
                      <div id="summernote1">Step by Step Guide</div>
                    </div>
                  </div>
                </div>
                


              </form> 

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->

</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2015 <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="http://themeforest.net/user/egemem/portfolio" target="_blank">Egemem</a>
  </div> 
</div>
<!-- End Footer -->


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