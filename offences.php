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
          <h1 class="h3 mb-2 text-gray-800">Offences</h1>
          <p class="mb-4"> </p>

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
                                    	<th>Offence</th>
                                    	<th>Offender</th>
                                    	<th>Reporter</th>
                                    	<th>Address</th>
										<th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Offence ID</th>
                                    	<th>Offence</th>
                                    	<th>Offender</th>
                                    	<th>Reporter</th>
                                    	<th>Address</th>
										<th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php 
                 /// include('connect.php');
	$result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
                                        <tr>
										<td><?php echo $row['offence_id']; ?></td>
                    <td><a title="Click to view details"  href="offense_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['offence']; ?></a></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['officer_reporting']; ?></td>
										<td><?php echo $row['address']; ?></td>
										<td><a rel="facebox" title="Click to edit view details" href="offense_view.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye  fa-lg text-success"></i> </a>
			<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a>
													</td>
                                        	
                                        </tr>
                                        <?php } ?>
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
