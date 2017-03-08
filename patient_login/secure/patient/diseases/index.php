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
	  <h1>Disease Details</h1>
	</div>

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