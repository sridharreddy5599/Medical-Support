<?php 
	require_once ("../functions/functions.php");
	get_internal_header();
?>

<?php
//add dbconnection
include('../class/dbconnect.php');

//create query

$query = "SELECT * FROM patient_details ORDER BY patient_id";
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
          <form action="functions/insert.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Patient ID:</label>
              <div class="controls">
                <input type="number" class="span11" name="patient_id" placeholder="patient ID" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Patient Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="patient_name" placeholder="patient name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Disease</label>
              <div class="controls">
                <input type="text"  class="span11" name="disease" placeholder="Disease"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Medicine Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="medicine_name" placeholder="Dosage" />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Contact :</label>
              <div class="controls">
                <input type="number" class="span11" name="contact" placeholder="Dosage" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">email:</label>
              <div class="controls">
                <input type="email" class="span11" name="email" placeholder="description" />
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
            <h5>Patient Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Patient ID </th>
                  <th>Patient Name </th>
                  <th>Disease </th>
                  <th>Medicine Name</th>
				  <th>Contact</th>
                  <th>Email</th>
				  <th>Edit data</th>
                  <th>Delete data</th>
                </tr>
              </thead>
			  
			  <?php 
					while ($row = mysqli_fetch_assoc($result)){
				?>
			  
              <tbody>
                <tr>
                  <td class=" "><?php echo $row['patient_id'];?></td>
                            <td class=" "><?php echo $row['patient_name'];?></td>
                            <td class=" "><?php echo $row['disease'];?></td>
                            <td class=" "><?php echo $row['medicine_name'];?></td>
							<td class=" "><?php echo $row['contact'];?></td>
							<td class=" "><?php echo $row['email'];?></td>
							<td><a href="editform.php?id=<?php echo $row['patient_id']; ?>" >edit</a></td>
                            <td><a href="functions/delete.php?id=<?php echo $row['patient_id']; ?>" >delete</a></td>
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