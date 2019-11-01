<?php
include('connect.php');
//session_start();
$a = $_POST['offence_id'];
$b = $_POST['vehicle_no'];
$c = $_POST['driver_license'];
$d = $_POST['name'];
$e = $_POST['address'];
$f = $_POST['gender'];
$cell = $_POST['cell'];
$i = $_POST['region'];

$g = $_POST['officer_reporting'];
$h = $_POST['offence'];



$msg = "Please not that You have Commited an offence ".$h." to view more visit www.offence.org using this reference ".$a  ;


// query
$url= "http://portal.bulksmsweb.com/index.php?app=ws&u=itai&h=406d87af8a1702088644bda4f0e32fa1&op=pv&to=".$cell."&msg=".$msg;
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($ch);
curl_close($ch);

$jsonArrayResponse - json_decode($phoneList);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $phoneList);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

print $result;
$sql = "INSERT INTO reported_offence (offence_id,vehicle_no,driver_license,name,address,gender,officer_reporting,offence,date,region ) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,now(),:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i));{
if($q){
      header("location:index.php?success=true");
        }else{
            header("location:index.php?failed=true");
        } 
		}


?>
                            