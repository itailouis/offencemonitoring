<!DOCTYPE html>
<html lang="en">


<?php 

include "includes/header.php";
      ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <?php 

include "includes/sidebar.php";
      ?>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php 

              include "includes/toolbar.php";
      ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
         
<a href="#"  data-toggle="modal" data-target="#flagVihecleModal"  class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Flag Vihecle</a>
</div>
          <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

              <?php
                            
                $id=$_GET['id'];
               // $id='2';
	$result = $db->prepare("SELECT * FROM reported_offence where id= :post_id");
	$result->bindParam(':post_id', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                
?>

              <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="294px" 
							id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $row['address']; ?>
							&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" 
							marginwidth="0"></iframe><a href="https://www.webdesign-muenchen-pb.de"></a></div>
							<style>.mapouter{text-align:right;height:294px;width:100%;}.gmap_canvas 
							{overflow:hidden;background:none!important;height:294px;width:100%;}</style><small></small></div>
                            </div>
                
              <div class="content table-responsive  table-upgrade">
							 <table class="table" >
                                   
                                    <tbody>
									<tr>
                                        	<td class="nav-link" style="background-color:#4e73df;">Offense:</td>
                                        	<td><?php echo $row['offence']; ?></td>
                                        </tr>
									<tr>
                                        	<td style="background-color:#4e73df;">Offense ID:</td>
                                        	<td><?php echo $row['offence_id']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#4e73df;">Vehicle Reg. No:</td>
                                        	<td><?php echo $row['vehicle_no']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#4e73df;">Driver's Licence:</td>
                                        	<td><?php echo $row['driver_license']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#4e73df;">Name of Offender:</td>
                                        	<td><?php echo $row['name']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#4e73df;">Sex of Offender:</td>
                                        	<td><?php echo $row['gender']; ?></td>
                                        </tr>
                                        <tr>
                                        	<td style="background-color:#4e73df;">Reported By:</td>
                                        	<td><?php echo $row['officer_reporting']; ?></td>
                                        </tr>
										 <tr>
                                        	<td style="background-color:#4e73df;">Location of Offense:</td>
                                        	<td><?php echo $row['address']; ?></td>
                                        </tr>
										<tr>
                                        	<td style="background-color:#4e73df;">Date of Offense:</td>
                                        	<td><?php echo date('l jS \of F Y h:i:s A');?></td>
                                        </tr>
										</tbody>
										</table>
								 </div>
                                 </div> <?php }?>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php 

include "includes/footer.php";
 ?>

</body>

</html>
