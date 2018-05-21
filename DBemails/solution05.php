<?php 
if(isset($_POST['submit'])){
    // The script will contain a hardcoded email address for the catalog's organizer.
    $to = "admin@stars.com";
    $from = $_POST['email'];
    //Star ID
    $star_ID = $_POST['star_ID'];
    $subject = "Form Submitted!";
    $subject2 = "Confirmed!";
    //Admin
    $message = $star_ID . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    
    //Confirmation
    $message2 = "Now create a confirmation email to be sent to the visitor who submitted the request. Again, include as much information as possible about the request- " . $star_ID . "\n\n" . $_POST['message'];
    //Headers
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers); // Admin
    mail($from,$subject2,$message2,$headers2); // Confirm
    //Use string function
    echo "Mail Sent. Thanks! " . $star_ID . ", we will contact you.." chop($message, "the following";

    // SMTP
    include "PHPMailer_5.2.4/class.phpmailer.php"; 
    $mail = new PHPMailer;
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;          
    $mail->Username = '***@gmail.com';
    $mail->Password = 'gmailpassword';           
    $mail->SMTPSecure = 'tls';              
    $mail->Port = 587; 
    
    $mail->setFrom('someaddress@example.com', 'Mailer');
    $mail->addAddress($email, 'Name');
//    $mail->addAttachment('fileaddress');       
//    $mail->isHTML(true);                              
    $mail->Subject = 'Here is the subject';
    // SMTP message with string function
    $mail->Body    = 'Write an instruction which will send the message to the administrator through an SMTP server. ' chop($message, "the following";
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
     } else {
        echo 'Message has been sent';
     }    
    
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Solution05.php</title>
</head>
<body>
<!--/ In the HTML portion of the web script, display the confirmation message sent to the visitor.-->
<?php if(isset($_POST['submit'])) {
    echo "<h2>$message2</h2>";
} ?>
<form action="" method="post">
Star ID: <input type="text" name="star_ID"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 