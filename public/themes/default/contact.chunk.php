<div class="container-wide section" id="contact" data-anchor="da-contact">
    <?php
        /*
        require '/libraries/PHPMailer/PHPMailer.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'user@example.com';                 // SMTP username
        $mail->Password = 'secret';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress('ellen@example.com');               // Name is optional
        
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
        */
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12" id="contact_content">
                <h1>Contact Me</h1>
                <form class="form-inline">
                    <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="name">Your name</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <label for="email">Your email</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-xs-12">
                            <label for="message">Your message</label>
                            <textarea class="form-control" rows="3" id="message" ></textarea>
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
