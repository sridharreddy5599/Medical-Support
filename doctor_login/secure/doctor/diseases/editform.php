<?php 
	require_once ("../functions/functions.php");
	get_internal_header();
?>

<?php

$id = $_GET['id'];
//add dbconnection
include('../class/dbconnect.php');

//create query

$query = "SELECT * FROM diseases WHERE disease_id='$id'";
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
  <h1>Disease Detail Entry Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6 offset3">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Disease-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="functions/edit.php" method="get" class="form-horizontal">
		  
		  <?php 
						  while ($row = mysqli_fetch_assoc($result)){
							
						  ?>
						  
			 <input type="hidden" name="disease_id" value="<?php echo $row['disease_id'];?>">
			 
            <div class="control-group">
              <label class="control-label">Disease Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="disease_name" placeholder="disease Name" value="<?php echo $row['disease_name'];?>" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Symptoms :</label>
              <div class="controls">
                <input type="text"  class="span11" name="symptoms" placeholder="Symptoms" value="<?php echo $row['symptoms'];?>" />
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label">Severity :</label>
              <div class="controls">
                <input type="text" class="span11" name="severity" placeholder="Severity" value="<?php echo $row['severity'];?>" />
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