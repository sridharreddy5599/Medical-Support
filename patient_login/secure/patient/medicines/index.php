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
  <h1>Medicine Details</h1>
</div>

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