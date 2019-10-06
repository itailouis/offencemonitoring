<?php
include('../connect.php');
//session_start();
$offence = $_POST['input'];

// query
$sql = "SELECT * FROM  reported_offence WHERE offence_id = :offence";
$result  = $db->prepare($sql);
$result->execute(array(':offence'=>$offence));
 $row = $result->fetch();
 echo json_encode($row);
?>

