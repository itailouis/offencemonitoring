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
        
       <?php $value = $_POST['offence']; ?>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
         
<a href="#"  data-toggle="modal" data-target="#flagVihecleModal"  class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Flag Vihecle</a>
</div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Search result : Track of  <?php  echo  $value?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Offence ID</th>
                                    	<th>Offence</th>
                                    	<th>Offender</th>
                                      <th>Vihicle</th>
                                      <th>Reporter</th>
                                      
                                    	<th>Address</th><th>Status</th>
										<th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Offence ID</th>
                                    	<th>Offence</th>
                                    	<th>Offender</th>
                                      <th>Vihicle</th>
                                      <th>Reporter</th>
                                      
                                    	<th>Address</th><th>Status</th>
										<th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php 
                
                 
                  $result = $db->prepare("SELECT * FROM reported_offence where vehicle_no ='$value' or driver_license='$value'  ORDER BY id DESC");
                  $result->execute();
                  for($i=0; $row = $result->fetch(); $i++){
                ?>
                                                        <tr>
                                    <td><?php echo $row['offence_id']; ?></td>
                                    <td><a title="Click to view details"  href="offense_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['offence']; ?></a></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['vehicle_no']; ?></td>
                                    <td><?php echo $row['officer_reporting']; ?></td>
                                    
                                    <td><?php echo $row['address']; ?></td>
                                    <td>open</td>
                                    <td>
                                    <a href='#' data-toggle='modal' data-target='#payModal' class='btn btn-primary btn-icon-split btn-sm'><span class='icon text-white-50'><i class='fas fa-flag'></i></span><span class='text'>Pay the bill</span></a>
                                   <!--  <a rel="facebox" title="Click to edit view details" href="offense_view.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye  fa-lg text-success"></i> </a>
                      <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click to Delete the Offense"><i class="fa fa-trash fa-lg text-danger"></i></a> -->
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
