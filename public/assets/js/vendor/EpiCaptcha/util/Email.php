<?php
require_once("phpmailer/class.phpmailer.php");
function sendMail($toAddreses,$fromAccount,$subject,$messageHtml, $attachments){
    $mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
    try {
        //$mail = new PHPMailer();
        $status = array();
        $status["status"] = false;
        $status["message"] = "failed default message";


        $mail->IsSMTP();  // telling the class to use SMTP
        $mail->Host = $fromAccount["host"]; // SMTP server

        if ($fromAccount["encrypted"] == true) {
            $mail->SMTPSecure = $fromAccount["encryption"];
        }
        $mail->Port = $fromAccount["port"]; //out going port required for proper authentication

        if ($fromAccount["authenticated"] == true) {
            $mail->SMTPAuth = $fromAccount["authenticated"]; // turn on SMTP authentication
            $mail->Username = $fromAccount["username"]; // SMTP username
            $mail->Password = $fromAccount["password"]; // SMTP password
        }

        $mail->SetFrom($fromAccount["email"], $fromAccount["name"]); //from address more detailed
        //$mail->From = $fromAccount["email"], $fromAccount["name"]; //from address 

        foreach ($toAddreses as $address) {
            $mail->AddAddress($address); //to addresses
        }

        $mail->Subject = $subject;
        $mail->IsHTML(true);
        $mail->Body = $messageHtml;
        

        if ($attachments != null) {
            foreach ($attachments as $attachment) {
                $mail->AddAttachment($attachment);      // attachment
            }
        }
        //$mail->WordWrap = 50; //not essential

        if (!$mail->Send()) {
            $status["status"] = false;
            $status["message"] = 'Error Sending mail';
        } else {
            $status["status"] = true;
            $status["message"] = 'Message has been sent.';
        }
    } catch (phpmailerException $e) {
        //echo $e->errorMessage(); //Pretty error messages from PHPMailer
        $status["status"] = false;
        $status["message"] = 'Mailer error: ' . $e->errorMessage();
    } catch (Exception $e) {
        //echo $e->getMessage(); //Boring error messages from anything else!
        $status["status"] = false;
        $status["message"] = 'Mailer error: ' . $e->getMessage();
    }
    return $status;
}
?>
