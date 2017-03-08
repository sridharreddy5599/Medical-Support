<?php 
	require_once ("../functions/functions.php");
	get_internal_header();
?>

<?php
//add dbconnection
include('../class/dbconnect.php');

//create query

$query = "SELECT * FROM diseases ORDER BY disease_id";
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
          <form action="functions/insert.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Disease ID:</label>
              <div class="controls">
                <input type="number" class="span11" name="disease_id" placeholder="Disease ID" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Disease Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="disease_name" placeholder="Disease name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Symptoms :</label>
              <div class="controls">
                <input type="text"  class="span11" name="symptoms" placeholder="Symptoms"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Severity :</label>
              <div class="controls">
                <input type="text" class="span11" name="severity" placeholder="Severity" />
              </div>
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
	<!--Form Content End-->

	<!--Table Content Start-->
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Disease Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Disease ID </th>
                  <th>Disease Name </th>
                  <th>Symptoms</th>
                  <th>Severity</th>
				  <th>Edit data</th>
                  <th>Delete data</th>
                </tr>
              </thead>
			  
			  <?php 
					while ($row = mysqli_fetch_assoc($result)){
				?>
			  
              <tbody>
                <tr>
                  <td class=" "><?php echo $row['disease_id'];?></td>
                            <td class=" "><?php echo $row['disease_name'];?></td>
                            <td class=" "><?php echo $row['symptoms'];?></td>
                            <td class=" "><?php echo $row['severity'];?></td>
							<td><a href="editform.php?id=<?php echo $row['disease_id']; ?>" >edit</a></td>
                            <td><a href="functions/delete.php?id=<?php echo $row['disease_id']; ?>" >delete</a></td>
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