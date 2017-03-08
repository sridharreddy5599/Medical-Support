<?php 
	require_once ("../functions/functions.php");
	get_internal_header();
?>

<?php

$id = $_GET['id'];
//add dbconnection
include('../class/dbconnect.php');

//create query

$query = "SELECT * FROM medicines WHERE medicine_id='$id'";
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
  <h1>Medicine Detail Entry Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6 offset3">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Medicine-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="functions/edit.php" method="get" class="form-horizontal">
		  
		  <?php 
						  while ($row = mysqli_fetch_assoc($result)){
							
						  ?>
						  
			 <input type="hidden" name="medicine_id" value="<?php echo $row['medicine_id'];?>">
			 
            <div class="control-group">
              <label class="control-label">Medicine Name:</label>
              <div class="controls">
                <input type="text" class="span11" name="medicine_name" placeholder="Medicine Name" value="<?php echo $row['medicine_name'];?>" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Disease</label>
              <div class="controls">
                <input type="text"  class="span11" name="disease" placeholder="Disease" value="<?php echo $row['disease'];?>" />
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label">Dosage :</label>
              <div class="controls">
                <input type="text" class="span11" name="dosage" placeholder="Dosage" value="<?php echo $row['dosage'];?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description:</label>
              <div class="controls">
                <input type="text" class="span11" name="description" placeholder="description" value="<?php echo $row['description'];?>" />
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