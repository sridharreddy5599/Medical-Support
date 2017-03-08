<?php 
	require_once ("../functions/functions.php");
	get_internal_header();
?>

<?php

$id = $_GET['id'];
//add dbconnection
include('../class/dbconnect.php');

//create query

$query = "SELECT * FROM patient_details WHERE patient_id='$id'";
$result = mysqli_query($conn ,$query);
  ?>
  
			<?php
			
			get_internal_sidebar();
			
			?>
			
            <?php
			
			get_internal_navbar();
			
			?>
    
					
				  
				  
		<div id="content">
<div id="content-header">
  <h1>Patient Detail Entry Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6 offset3">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Patient-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="functions/edit.php" method="get" class="form-horizontal">
		  
		  <?php 
						  while ($row = mysqli_fetch_assoc($result)){
							
						  ?>
						  
			 <input type="hidden" name="patient_id" value="<?php echo $row['patient_id'];?>">
			 
            <div class="control-group">
              <label class="control-label">patient Name:</label>
              <div class="controls">
                <input type="text" class="span11" name="patient_name" placeholder="patient Name" value="<?php echo $row['patient_name'];?>" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Disease</label>
              <div class="controls">
                <input type="text"  class="span11" name="disease" placeholder="Disease" value="<?php echo $row['disease'];?>" />
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label">Medicine Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="medicine_name" placeholder="Medicine_name" value="<?php echo $row['medicine_name'];?>" />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Contact :</label>
              <div class="controls">
                <input type="number" class="span11" name="contact" placeholder="contact" value="<?php echo $row['contact'];?>" />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" placeholder="email" value="<?php echo $row['email'];?>" />
              </div>
            </div>
			
			
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
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
</div>
</div>
	<!--Form Content End-->
  
</div>		  		
	<?php 
			get_internal_footer();
	?>