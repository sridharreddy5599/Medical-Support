<?php 
	require_once ("../functions/functions.php");
	get_internal_header();
?>

<?php
//add dbconnection
include('../class/dbconnect.php');

//create query

$query = "SELECT * FROM medicines ORDER BY medicine_id";
$result = mysqli_query($conn ,$query);
  ?>
  
			<?php
			
			get_internal_sidebar();
			
			?>
				
				<?php
			
			get_internal_navbar();
			
			?>
    
	<!--Form Content Start-->
	
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
          <form action="functions/insert.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Medicine ID:</label>
              <div class="controls">
                <input type="number" class="span11" name="medicine_id" placeholder="Medicine ID" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Medicine Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="medicine_name" placeholder="Medicine name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Disease</label>
              <div class="controls">
                <input type="text"  class="span11" name="disease" placeholder="Disease"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Dosage :</label>
              <div class="controls">
                <input type="text" class="span11" name="dosage" placeholder="Dosage" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description:</label>
              <div class="controls">
                <input type="text" class="span11" name="description" placeholder="description" />
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
	<!--Form Content End-->

	<!--Table Content Start-->
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Medicine Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Medicine ID </th>
                  <th>Medicine Name </th>
                  <th>Disease </th>
                  <th>Dosage</th>
                  <th>Description</th>
				  <th>Edit data</th>
                  <th>Delete data</th>
                </tr>
              </thead>
			  
			  <?php 
					while ($row = mysqli_fetch_assoc($result)){
				?>
			  
              <tbody>
                <tr>
                  <td class=" "><?php echo $row['medicine_id'];?></td>
                            <td class=" "><?php echo $row['medicine_name'];?></td>
                            <td class=" "><?php echo $row['disease'];?></td>
                            <td class=" "><?php echo $row['dosage'];?></td>
                            <td class=" "><?php echo $row['description'];?></td>
							<td><a href="editform.php?id=<?php echo $row['medicine_id']; ?>" >edit</a></td>
                            <td><a href="functions/delete.php?id=<?php echo $row['medicine_id']; ?>" >delete</a></td>
                </tr>
				
				<?php 
						}
					mysqli_close($conn);
				?>
				
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  	
	<!--Table Content End-->
  
</div>
	
	<?php 
			get_internal_footer();
	?>