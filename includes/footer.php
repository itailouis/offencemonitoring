
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Milipade 2019</span>
          </div>
        </div>
      </footer>
      
      <!-- End of Footer -->
      </div>
    <!-- End of Content Wrapper -->

  </div>
  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title m-0 font-weight-bold text-primary" id="exampleModalLabel">Report Offence</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
        <!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Report Offence</h6>
                </div>
                <div class="card-body">
                  <p> Please fill in the field to report an Offence</p> -->
                  <form  id="reportOffence" action="save-reported.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Offense ID</label>
                                                <input type="text" name="offence_id" class="form-control" placeholder="Offense ID" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,6));?>" readonly>
                                            </div>
                                        </div>
                                      </div>
                                   <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Vehicle Reg. No.</label>
                                                <input type="text" id="report_vehicle_no"   name="vehicle_no"  class="form-control" placeholder="Vehicle Reg. No." required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Driver's License</label>
                                                <input type="text" name="driver_license"  class="form-control" placeholder="Driver's License" required>
                                            </div>
                                        </div> 
                                    </div>

                                

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Driver's Cell Number</label>
                                                <input type="text" name="cell" class="form-control" placeholder="Driver's Cell Number" required>
                                            </div>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Driver's Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Driver's Name" required>
                                            </div>
                                        </div>
                                     </div>


                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Incedent Location</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Address of Incident" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Region</label>
                                                <select  name="region"  class="form-control" placeholder="Address of Incident" required>
                                                <?php
	                                                $regions = $db->prepare("SELECT * FROM para_regions ");
                                  $regions->execute();
                                              //var_dump($regions);
                                              

                                              for($i=0; $row = $regions->fetch(); $i++){?>
                                                       
                                                         <option value="<?php echo $row['region_name'] ?>"><?php echo $row['region_name'] ?></option>
                                               <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                 <select class="form-control" name="gender" >
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select> 
                                            </div>
                                        </div>
										<?php 
							 // $user=$_SESSION['SESS_MEMBER_ID'];
	//$result = $db->prepare("SELECT id,username,email,name,address FROM user WHERE id='$user'");
	//$result->execute();
	//for($i=0; $row = $result->fetch(); $i++){
?>
		
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Officer Reporting</label>
                                                <input type="text" name="officer_reporting"  class="form-control" placeholder="Officer Name" value="" readonly required>
                                            </div>
                                        </div>
  <?php // }
  ?>
                                    </div>
 <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Offense</label>
<select class="form-control" name="offence" required >
  <option selected disabled>..Choose Offense Type..</option>
  <?php $result = $db->prepare("SELECT * FROM offence ORDER BY id DESC");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){?>

    <option value="<?php echo $row['offence']; ?>"><?php echo $row['offence']; ?></option>

    <?php } ?>
            
            <!-- <option value="Drinking & Driving">Drinking & Driving</option>
             <option value="Assaulting Road Marshall">Assaulting Road Marshall</option>
             <option value="Dangerous Driving">Dangerous Driving</option>
            <option value="Driver's License Violation">Driver's License Violation</option>
            <option value="Do not move violation">Do not move violation</option>
            <option value="Driving Under Drug Influence">Driving Under Drug Influence</option>
            <option value="Driving with worn out tyres">Driving with worn out tyres</option>
            <option value="Constantly caught for No seatbelt">Constantly caught for No seatbelt</option>
            <option value="Excessive smoke emission">Excessive smoke emission</option>
            <option value="Failure to fix red flag on projected load">Failure to fix red flag on projected load</option>
            <option value="Fire extinguisher violation">Fire extinguisher violation</option>
            <option value="No Caution">No Caution</option>
            <option value="Holding with forged documents">Holding with forged documents</option>
            <option value="Riding Motorcycle without crash helmet">Riding Motorcycle without crash helmet</option>
            <option value="Road obstruction">Road obstruction</option>
            <option value="Speed Limit violation">Speed Limit violation</option>
            <option value="Under age driving">Under age driving</option>
            <option value="Making calls while driving">Making calls while driving</option>
            <option value="Other offences and violation">Other offences and violation</option> -->
</select>
</select>                                                 
												</div>
                                        </div>
                                    </div>
                                  <!--  <button type="submit" class="btn btn-info btn-fill pull-right">Report Offence</button> -->
                                    <div class="clearfix"></div>
                                    <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button id="report"  type="submit" class="btn btn-primary" >Report Offence</button>
        </div>
                                </form>
                
              <!-- </div>-->
        
        </div> 
        
      </div>
    </div>
  </div>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="AddOffenceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new offence</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="functions/addOffence.php" method="post">
        <div class="modal-body">
        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Offence Summury</label>
                                                <input type="text" name="offence" class="form-control" placeholder="Summary " required value="<?php echo $row['offence']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Offence Discription</label>
                                                <input type="text" name="discription" class="form-control" placeholder="Discription" required value="<?php echo $row['offence']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Find Amount </label>
                                                <input type="number" name="fine" class="form-control" placeholder="amount To be Charged " required value="<?php echo $row['offence']; ?>">
                                            </div>
                                        </div>
                                      
                                    </div>
        
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit"class="btn btn-primary" href="addOffence.php">Add New</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  

  <div class="modal fade" id="flagVihecleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Track offence</h5>
          
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="functions/flagVihecle.php" method="post">
        <div class="modal-body">
        <div class="row">
           <div class="col-md-12">
           <input type="text" name="offence_id"  hidden class="form-control" placeholder="Offense ID" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,6));?>" readonly>

<input type="text" name="officer_reporting"  hidden class="form-control" placeholder="Offense ID" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,6));?>" readonly>
               <div class="form-group">
                  <label>Enter Plate Number</label>
                  <input type="text" id="vehicle_no_2" name="vehicle_no" class="form-control" required placeholder="Enter Plate Number" value="<?php echo $row['offence']; ?>">
               </div>

               <div class="form-group">
                  <label>Incident Location</label>
                  <input type="text" name="address" class="form-control"  required placeholder="Incident Location" value="<?php echo $row['offence']; ?>">
               </div>
               <div class="form-group">
                  <label>Insident Date</label>
                  <input type="date" name="flagged_date" class="form-control"  required  >
               </div>

               <div class="form-group">
                  <label>Enter Vihecle Discription </label>
                  <textarea type="text" name="flag_reason" class="form-control" placeholder=" Vihecle Discription " required></textarea>
               </div>
            </div>
         </div>
        
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit"class="btn btn-danger" href="addFlag.php">Flag Vihecle</button>
        </div>
        </form>
      </div>
    </div>
  </div>



  <div class="modal fade" id="SearchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Track offence</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="TrackOffence.php" method="post">
        <div class="modal-body">
        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Enter Plate Number or Lisense number </label>
                                                <input type="text" name="offence" class="form-control" placeholder="Enter Plate Number or Lisense number" value="<?php echo $row['offence']; ?>">
                                            </div>
                                        </div>
                                      
                                    </div>
        
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit"class="btn btn-primary" href="addOffence.php">Track</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="UnflagVihecleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="functions/UnflagVihecle.php" method="post">
        <div class="modal-body">
        <input type="hidden" name="bookId" id="bookId" value=""/>
       Are You Sure you want to Unflag This Vihecle  </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary"  >Yes Im Sure</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="PayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Payment?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="functions/UnflagVihecle.php" method="post">
        <div class="modal-body">
        <input type="hidden" name="bookId" id="bookId" value=""/>
       Are You Sure you want to Unflag This Vihecle  </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary"  >Yes Im Sure</button>
        </div>
        </form>
      </div>
    </div>
  </div>






 <!-- Logout Modal-->
 <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
        <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card"> 
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>-->
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Your information was updated Successfully!")?>
                                            </div>
                                            <?php endif;?>
                            <div class="content">
							<?php 
							  $user=$_SESSION['SESS_MEMBER_ID'];
	$result = $db->prepare("SELECT id,username,email,name,address FROM user WHERE id='$user'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
							 <form action="update-user.php" method="post">
                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Company" value="<?php echo $row['name']; ?>">
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Home Address" value="<?php echo $row['address']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                   
         <!-- <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button> -->

         <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary"  >Update Profile</button>
        </div>
                                    <div class="clearfix"></div>
                                </form>
	<?php }?>
                          <!--   </div>
                        </div>
                    </div>
                      </div>  -->

                
            </div>
        
        
        </div>
       <!--  <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div> -->
      </div>
    </div>
  </div>




<!-- Logout Modal-->
<div class="modal fade" id="AdduserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        
        <form action="saveuser.php" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>User ID</label>
                                                <input type="text" name="user_id" class="form-control" placeholder="Company" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,10));?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username"  class="form-control" placeholder="Username" ">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" name="pass"  class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email"  class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" name="name"  class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Home Address" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    
                                       
										  <div class="col-md-12">
                                            <div class="form-group">
                                                <label>User Type</label>
                                                 <select class="form-control" name="position" >
  <option value="admin">Administrator</option>
  <option value="officer">Officer</option>
</select> 
                                            </div>
                                        </div>
                                       
                                    </div>
        <!--  <button type="submit" class="btn btn-info btn-fill pull-right">Create User</button> -->
                                    <div class="clearfix"></div>

                                    <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-info btn-fill pull-right"  href="logout.php">Create User</button>
        </div>
                                </form>
        
        
        
        
        </div>
       <!--  <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div> -->
      </div>
    </div>
  </div>

  <div class="modal fade" id="validPlate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The Number You Have Enter Doent Exist </p>
        <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      Its An Internation Plate Instade 
      </label>
    </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Payment Proccess</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="functions/PayOffence.php" method="post">
        <div class="modal-body">
        <div class="row">
        <input type="hidden" name="offence_id" id="offence_id" value="" />
     
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" name="amount" class="form-control" placeholder="amount" value="<?php echo $row['offence']; ?>" required>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Cell Number </label>
                                                <input type="number" name="pay_phone" class="form-control" placeholder="Enter Cell Number" value="<?php echo $row['offence']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="pay_phone" class="form-control" placeholder="Enter Email" value="<?php echo $row['offence']; ?>" required>
                                            </div>
                                        </div>
                                      
                                    </div>
        
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit"class="btn btn-primary" >Pay now</button>
        </div>
        </form>
      </div>
    </div>
  </div>






  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
 <script src="js/demo/chart-area-demo.js"></script> 
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>


  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script>
  $('#UnflagVihecleModal').on('show.bs.modal', function(e) {

//get data-id attribute of the clicked element
var bookId = $(e.relatedTarget).data('vihecle-id');

//populate the textbox
$(e.currentTarget).find('input[name="bookId"]').val(bookId);
});
/* function lookup(){
  alert("Stolen vihecle")

}
function myoffence(){
  // input = document.getElementById("vehicle_no");
  //var input_value=input.value;


//i//f(input_value.length>=4){
 
//}
} */





$('#payModal').on('show.bs.modal', function(e) {

//get data-id attribute of the clicked element
var bookId = $(e.relatedTarget).data('id');



//populate the textbox
$(e.currentTarget).find('input[name="offence_id"]').val(bookId);
});
 
$('#reportOffence').on('submit', function() {

  var report_vehicle_no = $('#report_vehicle_no').val().trim();
 
 
 $.ajax({
    
     url: 'functions/validatePlate.php',
     data: {
      report_vehicle_no: report_vehicle_no
     },
     success: function(returnData){
        console.log(returnData);
         var results = JSON.parse(returnData);
        
         if(results.length == 0 || results==false){
          $('#validPlate').modal({show: true});
          return false;  
            //$('#search_results').html('No employees with that name were found!');
         }else{
          return true; 
         }
         
     }
     
 });
 

});


</script>