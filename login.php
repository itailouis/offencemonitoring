<?php
include"connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		<title><?php echo $row['site_name']; ?></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <?php }?>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-imagef">
              <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">offence Tracker</h1>
                  </div>
                  <form class="user" method="post">
                    <div class="form-group">
                    <div class="input-group">
                    <input type="text" id="search_field" class="form-control bg-light border-0 small" onkeyup="mysearch()" placeholder="Enter Offence Fef..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                  </div>
                  
                  </form>
                  <hr>

                  <span id="search_results"> </span>

                  <p id="search_results_value"> it will appear here</p>
                  
                </div>















              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action="login2.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username" required="" id="username" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" placeholder="Password" required="" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button  class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                    
                    <hr>
                   <!--  <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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

  <script>
  function mysearch(){
var input = document.getElementById("search_field");

var input_value=input.value;


if(input_value.length>=4){
 $.ajax('functions/search.php',{
   dataType:'json',
   method:'POST',
   data:{input:input_value},
   timeout:500,
   success:function(data){
    var search = document.getElementById("search_results_value");
  //if (data.offence_id=='undefined'){
      //search.innerHTML = '<h4> no match <h4>' ;
    //}else{
     search.innerHTML = "<h4>"+data.offence+"<h4> <br> with vihicle plate <b>"+data.vehicle_no+"</b><br> Date:"+data.date+"<br> bill $25: <a href='#' data-toggle='modal' data-target='#payModal' class='btn btn-primary btn-icon-split btn-sm'><span class='icon text-white-50'><i class='fas fa-flag'></i></span><span class='text'>Pay the bill</span></a>" ;


    //}

    
       


   },error:function(data){
     console.log(data)
   }


 });


}

  }
  
  </script>

</body>

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
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Amount</label>
                                                <input type="number" name="offence" class="form-control" placeholder="amount" value="<?php echo $row['offence']; ?>">
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

</html>
