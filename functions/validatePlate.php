<?php
include('../connect.php');
//session_start();

$vehicle_no = isset($_GET['report_vehicle_no']) ? trim($_GET['report_vehicle_no']) : '';
$vehicle_no = $vehicle_no;
ini_set('memory_limit', '-1');
// query
$sql = "SELECT * FROM  cvr_db WHERE vehicle_no = :vehicle_no";
$result  = $db->prepare($sql);
$result->execute(array(':vehicle_no'=>$vehicle_no));
 $row = $result->fetch();
 echo json_encode($row);
?>

