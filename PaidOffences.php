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
   <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Offences</h1>
         
<a href="#"  data-toggle="modal" data-target="#flagVihecleModal"  class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Flag Vihecle</a>
</div>

       
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Offences</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Offence ID</th>
                                    	<th>Summary</th>
                                    	<th>Number Plate</th>
                                    	<th>Payment Status</th>
                                    	<!--<th>Action</th>-->
									
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Offence ID</th>
                                    	<th>Summary</th>
                                    	<th>Number Plate</th>
                                    	<th>Payment Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php 
                 /// include('connect.php');

                 if(isset($_GET['status'])){
                     $status= $_GET['status'];

                    $result = $db->prepare("SELECT * FROM reported_offence where status='$status' ORDER BY id DESC");
                 }else{
                     $result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC");
                 }
	
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                                        <tr>
										<td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['offence']; ?></td>
                    
          <td><?php echo $row['vehicle_no']; ?></td>
                    <td><?php if ($row['status']=="UNPAID") {echo "<a href='' data-toggle='modal' data-id='". $row['id']."'   data-target='#payModal'><font color='red'>".$row['status']."</font></a>";
                         }else{
                          echo "<font color='green'>".$row['status']."</font>";
                         }
                         
                         ?></td>
										
                                        	
                                        </tr>
                                        <?php } 
                                        
                                        ?>
                  </tbody>
                </table>
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
