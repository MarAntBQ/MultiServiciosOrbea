<?php
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;

require('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

//	===================================================================
//	JUST EDIT BELOW FIVE LINES
//	===================================================================
$mail->Host = "mail.marbust.com";					// Enter "mail.my-domain.com"
$mail->Username = "#";			// Enter an email address created through cPanel
$mail->Password = "#";						// Enter the email password created through cPanel
$mail->AddAddress("info@multiserviciosorbea.com", "Marbust Sites MBTC"); // Enter the recipient "to" email address
$mail->Subject = "Contacto de Estructuras Metalicas Orbea";		// For subject "Any Preferred Email Subject";
//	===================================================================
//  DO NOT EDIT BELOW THIS ~~ MODIFY AT YOUR OWN RISK & DO NOT CONTACT SUPPORT
//  IF YOU NEED HELP, GOOGLE AND LEARN ABOUT PHPMAILER OR CONTACT A PROGRAMMER
//	===================================================================

$mail->From = $email;
$mail->FromName = $name;
$mail->WordWrap = 50;
$mail->IsHTML(true);
$mail->Body = $message;
$mail->AltBody ="Name    : {$name}\n\nEmail   : {$email}\n\nMessage : {$message}";
$mail->SMTPDebug  = 0;								// Change to "2" to see full SMTP connection output 

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo'<script type="text/javascript">
        alert("Gracias por enviar su mensaje, nos pondremos en contacto con usted lo mas pronto posible");
        window.location.href="index.php";
        </script>';
//echo "Thank You! Message Sent successfully.";		// Remove this "echo" line if redirecting to thankyou.html
//header('Location: thankyou.html'); 				// Remove the double slash to redirect to thankyou.html
?>