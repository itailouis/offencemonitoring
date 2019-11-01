<?php
include('../connect.php');
//session_start();

////$flag_reason = $_POST['flag_reason'];
$flagged_date = $_POST['flagged_date'];


$flag_status = "open";

$a = $_POST['offence_id'];
$b = $_POST['vehicle_no'];
$c = "";
$d = "";
$e = "";
$f = "";
$g = $_POST['officer_reporting'];
$h = $_POST['flag_reason'];
// query
$sql = "INSERT INTO reported_offence (offence_id,vehicle_no,driver_license,name,address,gender,officer_reporting,offence,date ) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:z)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':z'=>$flagged_date));{
if($q){
      header("location:../index.php?success=true");
        }else{
            header("location:../index.php?failed=true");
        } 
		}

?>