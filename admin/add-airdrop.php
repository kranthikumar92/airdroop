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
                         <input type="text" id="date-picker" class="form-control" value="03/18/2015"/> 
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


              </form> 

            </div>

      </div>
    </div>

  </div>
  <!-- End Row -->

  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Switches
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <form class="form-horizontal">
                
                  
                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Basic</label>
                  <div class="col-sm-8">
                    <input type="checkbox" checked data-toggle="toggle" data-on=" " data-off=" ">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Default</label>
                  <div class="col-sm-8">
                    <input type="checkbox" checked data-toggle="toggle">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Disabled</label>
                  <div class="col-sm-8">
                    <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Disabled</label>
                  <div class="col-sm-8">
                    <input type="checkbox" checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Play" data-off="<i class='fa fa-pause'></i> Pause">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Disabled</label>
                  <div class="col-sm-8">
                    <input type="checkbox" disabled data-toggle="toggle">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Colors</label>
                  <div class="col-sm-8">
                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                    <input type="checkbox" checked data-toggle="toggle" data-onstyle="danger">
                  </div>
                </div>


              </form> 

            </div>

      </div>
    </div>




    <div class="col-md-6">

      <div class="panel panel-default">

        <div class="panel-title">
          Groups
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <p>All groups available for btn class.</p>
              <h5>Checkbox Groups</h5>
                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active">
                      <input type="checkbox"> One
                    </label>
                    <label class="btn btn-default">
                      <input type="checkbox"> Two
                    </label>
                    <label class="btn btn-default">
                      <input type="checkbox"> Three
                    </label>
                  </div>
              <br><br>
                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-warning active">
                      <input type="checkbox"> One
                    </label>
                    <label class="btn btn-warning">
                      <input type="checkbox"> Two
                    </label>
                    <label class="btn btn-warning">
                      <input type="checkbox"> Three
                    </label>
                  </div>

              <h5>Radio Groups</h5>
                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-danger active">
                      <input type="radio" name="options" id="option1"> One
                    </label>
                    <label class="btn btn-danger">
                      <input type="radio" name="options" id="option2"> Two
                    </label>
                    <label class="btn btn-danger">
                      <input type="radio" name="options" id="option3"> Three
                    </label>
                  </div>
              <br><br>
                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-info active">
                      <input type="radio" name="options" id="option11"> One
                    </label>
                    <label class="btn btn-info">
                      <input type="radio" name="options" id="option12"> Two
                    </label>
                    <label class="btn btn-info">
                      <input type="radio" name="options" id="option13"> Three
                    </label>
                  </div>

            </div>

      </div>

    </div>





  </div>
  <!-- End Row -->





  <!-- Start Row -->
  <div class="row">
  </div>
  <!-- End Row -->

  <!-- Start Row -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">Control Sizing</div>
            <div class="panel-body">

                <form>
                  <div class="controls">
                    <input class="form-control input-lg" type="text" placeholder=".input-lg"><br>
                    <input type="text" class="form-control" placeholder="Default input"><br>
                    <input class="form-control input-sm" type="text" placeholder=".input-sm"><br>

                    <select class="form-control input-lg">
                      <option value="">.input-lg</option>
                    </select>
                    <br>
                    <select class="form-control">
                      <option value="">Default select</option>
                    </select>
                    <br>
                    <select class="form-control input-sm">
                      <option value="">.input-sm</option>
                    </select>
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

</body>
</html>