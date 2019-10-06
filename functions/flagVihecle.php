<?php
include('../connect.php');
//session_start();
$vihecle_no = $_POST['vihecle_no'];
$flag_reason = $_POST['flag_reason'];
$flagged_date = $_POST['flagged_date'];

$flag_status = "open";

// query
$sql = "INSERT INTO vihecle_flags (vihecle_no,flag_reason,flag_status,flagged_date) VALUES (:vihecle_no,:flag_reason, :flag_status,:flagged_date)";
$q = $db->prepare($sql);
$q->execute(array(':vihecle_no'=>$vihecle_no,':flag_reason'=>$flag_reason,':flag_status'=>$flag_status,':flagged_date'=>$flagged_date));{
if($q){
      header("location:../flaggedVihecle.php?success=true");
        }else{
            header("location:../flaggedVihecle.php?failed=true");
        } 
		}
?>