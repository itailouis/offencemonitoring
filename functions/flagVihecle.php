<?php
include('../connect.php');
//session_start();
$vihecle_no = $_POST['vihecle_no'];
$flag_reason = $_POST['flag_reason'];
$flag_status = $_POST['flag_status'];

// query
$sql = "INSERT INTO vihecle_flags (vihecle_no,flag_reason,flag_status) VALUES (:vihecle_no,:flag_reason, :flag_status)";
$q = $db->prepare($sql);
$q->execute(array(':vihecle_no'=>$vihecle_no,':flag_reason'=>$flag_reason,':flag_status'=>$flag_status));{
if($q){
      header("location:../index.php?success=true");
        }else{
            header("location:../index.php?failed=true");
        } 
		}
?>