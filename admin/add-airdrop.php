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
                  <label for="input002" class="col-sm-2 control-label form-label">Est Value ($)</label>
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
                      <div class="input-group-addon">.00</div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input002" class="col-sm-2 control-label form-label">End Date</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input002">
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
                  <label for="input4" class="col-sm-2 control-label form-label">Disable</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input4" placeholder="Disable Input" disabled>
                  </div>
                </div>

                <div class="form-group has-success">
                  <label for="input6" class="col-sm-2 control-label form-label">Input with success</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="input6">
                  </div>
                </div>

                <div class="form-group has-warning">
                  <label for="input7" class="col-sm-2 control-label form-label">Input with warning</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="input7">
                  </div>
                </div>

                <div class="form-group has-error">
                  <label for="input8" class="col-sm-2 control-label form-label">Input with warning</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="input8">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Readonly input</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputAmount" class="col-sm-2 control-label form-label">With Icons</label>
                  <div class="col-sm-10">
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                      <div class="input-group-addon">.00</div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputAmount2" class="col-sm-2 control-label form-label">Another With Icons</label>
                  <div class="col-sm-10">
                    <label class="sr-only" for="exampleInputAmount2">Login</label>
                    <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-user"></i></div>
                      <input type="text" class="form-control" id="exampleInputAmount2" placeholder="Username">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">Textarea</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="3" id="textarea1" placeholder="Type your message..."></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label form-label">With a Line</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-line" placeholder="What is your name?">
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
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">Date Pickers</div>
            <div class="panel-body">

              <p>Date Range Picker - A JavaScript widget for choosing date ranges. - <a href="http://www.daterangepicker.com/" target="_blank">Official documentation</a></p>

              <div class="col-md-12 col-lg-3">
                <h5>Date Picker</h5>
                 <form class="form-horizontal">
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
                 </form>
              </div>
              
              <div class="col-md-12 col-lg-3">
                <h5>Date Range Picker</h5>
                 <form class="form-horizontal">
                   <fieldset>
                    <div class="control-group">
                      <div class="controls">
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input type="text" id="date-range-picker" class="form-control" value="03/18/2015 - 03/23/2015" /> 
                       </div>
                      </div>
                    </div>
                   </fieldset>
                 </form>
              </div>
              
              <div class="col-md-12 col-lg-6">
                <h5>Date Range and Time Picker</h5>
                 <form class="form-horizontal">
                   <fieldset>
                    <div class="control-group">
                      <div class="controls">
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input type="text" id="date-range-and-time-picker" class="form-control" value="08/01/2015 1:00 PM - 08/01/2015 1:30 PM"  class="span4"/>
                       </div>
                      </div>
                    </div>
                   </fieldset>
                 </form>
              </div>
              

            </div>
      </div>
    </div>
  </div>
  <!-- End Row -->



  
  <!-- Start Row -->
  <div class="row">

    <div class="col-md-12 col-lg-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Selectboxes
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">

              <p>Bootstrap-select is a custom select for Bootstrap using button dropdown - <a href="http://silviomoreto.github.io/bootstrap-select" target="_blank">Official documentation</a><br><br></p>

              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Basic</label>
                  <div class="col-sm-8">
                    <select class="selectpicker">
                        <option>Themeforest</option>
                        <option>Codecanyon</option>
                        <option>Photodune</option>
                        <option>Graphicriver</option>
                        <option>Activeden</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">With group option</label>
                  <div class="col-sm-8">
                   <select class="selectpicker">
                      <optgroup label="Marketplace">
                        <option>Themeforest</option>
                        <option>Codecanyon</option>
                        <option>Photodune</option>
                        <option>Graphicriver</option>
                        <option>Activeden</option>
                      </optgroup>
                      <optgroup label="Community">
                        <option>Forums</option>
                        <option>Blog</option>
                        <option>Meetups</option>
                      </optgroup>
                    </select>                             
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Multiple selects</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" multiple>
                        <option>Themeforest</option>
                        <option>Codecanyon</option>
                        <option>Photodune</option>
                        <option>Graphicriver</option>
                        <option>Activeden</option>
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">With Search input</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-live-search="true">
                      <option>Hot Dog, Fries and a Soda</option>
                      <option>Burger, Shake and a Smile</option>
                      <option>Sugar, Spice and all things nice</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">With Subtext</label>
                  <div class="col-sm-8">
                    <select class="selectpicker">
                        <option data-subtext="Theme">Themeforest</option>
                        <option data-subtext="Codes">Codecanyon</option>
                        <option data-subtext="Design">Graphicriver</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">With Icons</label>
                  <div class="col-sm-8">
                    <select class="selectpicker">
                        <option data-icon="fa fa-heart">Themeforest</option>
                        <option data-icon="fa fa-flask">Codecanyon</option>
                        <option data-icon="fa fa-fire">Graphicriver</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">HTML content</label>
                  <div class="col-sm-8">
                    <select class="selectpicker">
                        <option data-content="<span class='label label-warning'>Themeforest</span>">Themeforest</option>
                        <option data-content="<span class='label label-danger'>Codecanyon</span>">Codecanyon</option>
                        <option data-content="<span class='label label-success'>Graphicriver</span>">Graphicriver</option>
                      </select>                  
                  </div>
                </div>

              </form> 


              <form class="form-horizontal">

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Option 2</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-option2">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Primary</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-primary">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Danger</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-danger">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                      </select>                  
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">Success</label>
                  <div class="col-sm-8">
                    <select class="selectpicker" data-style="btn-success">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                      </select>                  
                  </div>
                </div>

              </form> 


            </div>

      </div>
    </div>



    <div class="col-md-12 col-lg-6">
      <div class="panel panel-default">

        <div class="panel-title">
          Checkbox and Radios
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
          </ul>
        </div>

            <div class="panel-body">
              <p>Checkbox and Radios based on Awesome Bootstrap Checkbox - <a href="https://github.com/flatlogic/awesome-bootstrap-checkbox" target="_blank">Official documentation</a></p>
              <h4>Checkboxes</h4>
              <div class="col-md-6">

                    <div class="checkbox">
                        <input id="checkbox101" type="checkbox">
                        <label for="checkbox101">
                            Default
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox102" type="checkbox" checked>
                        <label for="checkbox102">
                            Primary
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox103" type="checkbox">
                        <label for="checkbox103">
                            Success
                        </label>
                    </div>
                    <div class="checkbox checkbox-info">
                        <input id="checkbox104" type="checkbox">
                        <label for="checkbox104">
                            Info
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input id="checkbox105" type="checkbox" checked>
                        <label for="checkbox105">
                            Warning
                        </label>
                    </div>
                    <div class="checkbox checkbox-danger">
                        <input id="checkbox106" type="checkbox" checked>
                        <label for="checkbox106">
                            Check me out
                        </label>
                    </div>
                    <p class="margin-t-20">Inline checkboxes</p>
                    <div class="checkbox checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox11" value="option1">
                        <label for="inlineCheckbox11"> Inline One </label>
                    </div>
                    <div class="checkbox checkbox-success checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox12" value="option1" checked>
                        <label for="inlineCheckbox12"> Inline Two </label>
                    </div>
                    <div class="checkbox checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox13" value="option1">
                        <label for="inlineCheckbox13"> Inline Three </label>
                    </div>


              </div>

              <div class="col-md-6">

                    <p>
                        <br><code>.checkbox-circle</code> for roundness.
                    </p>
                    <div class="checkbox checkbox-circle">
                        <input id="checkbox77" type="checkbox">
                        <label for="checkbox77">
                            Simply Rounded
                        </label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox88" type="checkbox" checked>
                        <label for="checkbox88">
                            I'm a checkbox
                        </label>
                    </div>
                    <div class="checkbox checkbox-success checkbox-circle">
                        <input id="checkbox55" type="checkbox" checked>
                        <label for="checkbox55">
                            Me too
                        </label>
                    </div>
                    <div class="checkbox checkbox-danger checkbox-circle">
                        <input id="checkbox66" type="checkbox" checked>
                        <label for="checkbox66">
                            Yeah, me too
                        </label>
                    </div>

                    <p>
                        <br>Disabled state also supported.
                    </p>
                    <div class="checkbox">
                        <input id="checkbox9" type="checkbox" disabled>
                        <label for="checkbox9">
                            Can't check this
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox10" type="checkbox" disabled checked>
                        <label for="checkbox10">
                            Don't think about it
                        </label>
                    </div>
                    <div class="checkbox checkbox-warning checkbox-circle">
                        <input id="checkbox11" type="checkbox" disabled checked>
                        <label for="checkbox11">
                            Disable
                        </label>
                    </div>

              </div>

              <h4>Radios</h4>
              <div class="col-md-6">
                    <div class="radio">
                        <input type="radio" name="radio1" id="radio1" value="option1" checked>
                        <label for="radio1">
                            Fruits
                        </label>
                    </div>
                    <div class="radio radio-warning">
                        <input type="radio" name="radio1" id="radio2" value="option2">
                        <label for="radio2">
                            Meat
                        </label>
                    </div>
                    <div class="radio radio-danger">
                        <input type="radio" name="radio2" id="radio3" value="option1">
                        <label for="radio3">
                            Male
                        </label>
                    </div>
                    <div class="radio radio-danger">
                        <input type="radio" name="radio2" id="radio4" value="option2" checked>
                        <label for="radio4">
                            Female
                        </label>
                    </div>

                    <p class="margin-t-20">Inline radios</p>
                    
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                        <label for="inlineRadio1"> Inline One </label>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio2" value="option1" name="radioInline">
                        <label for="inlineRadio2"> Inline Two </label>
                    </div>
              </div>


              <div class="col-md-6">
                    <p>Disabled state also supported.</p>
                    <div class="radio radio-danger">
                        <input type="radio" name="radio3" id="radio5" value="option1" disabled>
                        <label for="radio5">
                            Next
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="radio3" id="radio6" value="option2" checked disabled>
                        <label for="radio6">
                            One
                        </label>
                    </div>
              </div>


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