<?php
include('../connect.php');

require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require '../vendor/PHPMailer/src/Exception.php';
//require '../vendor/PHPMailer/src/PHPMailer.php';
//require '../vendor/PHPMailer/src/SMTP.php';

//header("location:../PaidOffences.php?status=UNPAID");
$offence_id = @$_POST['offence_id'];
$amount= @$_POST['amount'];
$email= @$_POST['email'];

$pay_phone=@$_POST['pay_phone'];
$mydate = date("Y-m-d");
//'
//INSERT INTO transcations (date, amount, offence_id) VALUES (:mydate, :amount, :offence_id_me)

$sql1 = "INSERT INTO transcations (date, amount, offence_id,email) VALUES (:mydate, :amount, :offence_id_me,:email)";
$q1 = $db->prepare($sql1);
$q1->execute(array(':amount'=>$amount,':mydate'=>$mydate,':offence_id_me'=>$offence_id,':email'=>$email));{
if($q1){
        //header("location:../PaidOffences.php?status=UNPAID");
        //header("location:../index.php?success=true");
        }else{
           // header("location:../PaidOffences.php?status=UNPAID");
            //header("location:../index.php?failed=true");
        } 
		}

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                        // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = ' ';                     // SMTP username
            $mail->Password   = ' ';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom('', 'Mailer');
            $mail->addAddress('m', ' ');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
           // $mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
        
            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }




$sql = "UPDATE  reported_offence SET status='PAID' WHERE id = :offence_id";
// query
$sql = "UPDATE  reported_offence SET status='PAID' WHERE id = :offence_id";
$q = $db->prepare($sql);
$q->execute(array(':offence_id'=>$offence_id));{
if($q){
       //header("location:../PaidOffences.php?status=UNPAID");
      //header("location:../index.php?success=true");
        }else{
            //header("location:../PaidOffences.php?status=UNPAID");
            //header("location:../index.php?failed=true");
        } 
		}
?>

