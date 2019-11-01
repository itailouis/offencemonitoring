<?php
include('../connect.php');
//session_start();
$offence = $_POST['offence'];
$discription= $_POST['discription'];
$fine=$_POST['fine']; 



// query
$sql = "INSERT INTO offence (offence ,fine, discription) VALUES (:offence,:fine,:discription)";
$q = $db->prepare($sql);
$q->execute(array(':offence'=>$offence,':fine'=>$fine,':discription'=>$discription));{
if($q){
      header("location:../index.php?success=true");
        }else{
            header("location:../index.php?failed=true");
        } 
		}
?>