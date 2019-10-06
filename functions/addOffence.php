<?php
include('../connect.php');
//session_start();
$offence = $_POST['offence'];

// query
$sql = "INSERT INTO offence (offence) VALUES (:offence)";
$q = $db->prepare($sql);
$q->execute(array(':offence'=>$offence));{
if($q){
      header("location:../index.php?success=true");
        }else{
            header("location:../index.php?failed=true");
        } 
		}
?>