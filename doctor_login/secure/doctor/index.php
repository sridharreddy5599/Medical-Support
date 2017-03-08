<?php
include ("../db_connect.php");
include ("../functions.php");
sec_session_start(); // Our custom secure way of starting a php session.
if(login_check($mysqli) == true) { ?>

<?php 
	require_once("functions/functions.php");
?>

<?php
	get_header();
?>

<?php
	get_navbar();
?>

<?php
	get_sidebar();
?>

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span3"> <a href="patient_details/index.php"> <i class="icon-dashboard"></i>Patient Details </a> </li>
        <li class="bg_lg span3"> <a href="diseases/index.php"> <i class="icon-signal"></i> Diseases</a> </li>
        <li class="bg_lo span3"> <a href="medicines/index.php"> <i class="icon-th"></i> Medicines</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Health Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>254</strong> <small>Total Doctors</small></li>
                <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Doctors </small></li>
                <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>657</strong> <small>Total Patients</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>94</strong> <small>Total Diseases</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong>100</strong> <small>Pending Cases</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong>85</strong> <small>Online Assistance</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
<!--end-main-container-part-->

<?php
	get_footer();
?>

<?php } else {
   echo 'You are not authorized to access this page, please login. <br/>';
}

;?>