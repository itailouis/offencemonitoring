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

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Users</h1>
          <p class="mb-4"></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>User ID</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Position</th>
									 	  <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>User ID</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Position</th>
									 	  <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php 
                 
	$result = $db->prepare("SELECT * FROM user ORDER BY id DESC");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){

                                       echo' <tr>';
                                        	echo'<td>'.$row['user_id'].'</td>'; 
                                        	echo'<td>'.$row['name'].'</td>';
                                        	echo'<td>'.$row['username'].'</td>';
                                        	echo'<td>'.$row['email'].'</td>';
                                        	echo'<td>'.$row['position'].'</td>';
											echo'<td><a  href="#" id="'.$row['id'].'" class="delbutton" title="Click to Delete the user"><i class="fa fa-trash fa-lg text-danger"></i></a></td>';
                                        	echo'</tr>';
	}?>
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
