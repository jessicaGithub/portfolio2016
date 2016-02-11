<?php include_once ("settings.php"); ?>
<?php include_once("util/Email.php"); ?>
<?php include_once("util/Validation.php"); ?>
<?php


header('Content-type: application/json');



function success() {
    
        global $systemArr;
        global $messageArr;

    
        $SystemEmailAccount = $systemArr;
        $email = $systemArr["email"];
        $error = "";
        $returnMessage = "";
        $success = true;
        
        
        $messageheading = $messageArr["messageHead"];
        $messageSubject = $messageArr["messageSubject"];
        $responseHeading = $messageArr["responseHead"];
        $responseMessage = $messageArr["responseMessage"];
        $responseSig = $messageArr["responseSig"];
        $responseSubject = $messageArr["responseSubject"];
        $responseEnd = $messageArr["responseEnd"];
        


        if (isset($_POST["email"])) {
            //$emailClient = mysql_real_escape_string($_POST["email"]);
            $emailClient = $_POST["email"];
            if (validate_email($emailClient)) {
                
                $name = $_POST["name"];
                
                
                //$emailClient = $_POST["email"];
                

                $title = $_POST["title"];
                

                $message = $_POST["message"];
                

                $messageContent =
//////////////////////////////////// HTML CODE FOR CLIENT ENQUIRY EMAIL ////////////////////////////////////
                       // ENSURE THAT ALL VARIABLES REMAIN IN THEIR CORRESPONDING LOCATIONS //
                       " <!DOCTYPE html>
                            <html>
                                <head>
                                    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                                </head>
                                <body style='font-family: calibri, sans-serif; font-size: 16px;'>
        
                                    <h1 style='padding: 10px; background-color: #1f1f1f; color: #ffffff; font-size: 28px;'>Hi there! You've received $messageheading from your website :)</h1>
        
                                    <table style='border-spacing: 0px; border: 1px solid #ccc; border-bottom: none;'>
                                        <tr>
                                            <td width='20%' style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Enquirer's Name</td>
                                            <td width='80%' style='padding: 5px; border-bottom: 1px solid #ccc;'>$name</td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Enquirer's Email Address</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$emailClient</td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Message Title</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$title</td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Enquirer's Message</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$message</td>
                                        </tr>
                                    </table>
        
                                    <h2 style='padding: 10px; background-color: #1f1f1f; color: #ffffff; font-size: 28px;'>Enjoy your day!</h2>
        
                                    <p style='padding: 10px; background-color: #eee; color: #777; font-size: 12px;'>Brought to you by <b>Epicdev</b><sup>tm</sup>. Please do not hesitate to contact us for any general or support related queries at info@epicdev.co.za</p>
        
                                </body>
                            </html> ";
//////////////////////////////////// HTML CODE FOR CLIENT ENQUIRY EMAIL ////////////////////////////////////

                $status = sendMail(array($email), $SystemEmailAccount, $messageSubject, $messageContent, null);
                if ($status["status"] == true) {
                    $returnMessage = "Message Sent";
                    $messageRespond = 
//////////////////////////////////// HTML CODE FOR CLIENT RESPONSE EMAIL ////////////////////////////////////
                   // ENSURE THAT ALL VARIABLES REMAIN IN THEIR CORRESPONDING LOCATIONS //
                   " <!DOCTYPE html>
                        <html>
                            <head>
                                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                            </head>
                            <body style='font-family: calibri, sans-serif; font-size: 16px;'>
        
                                <h1 style='padding: 10px; background-color: #00CB16; color: #ffffff; font-size: 28px;'>$responseHeading</h1>
        
                                <table style='border-spacing: 0px; border: 1px solid #ccc; border-bottom: none;'>
                                    <tr>
                                        <td width='100%' style='padding: 5px; border-bottom: 1px solid #ccc;'>$responseMessage</td>
                                    </tr>
                                </table>
        
                                <p style='padding: 10px 0 0 0; color: #00CB16; font-size: 24px; font-weight: bold; margin: 0'>$responseEnd</p>
                                <p style='padding: 0; color: #00CB16; font-size: 18px; margin: 0 0 10px 0'>$responseSig</p>
        
                                <p style='padding: 10px; background-color: #eee; color: #777; font-size: 11px;'>Brought to you by <b>Epicdev</b><sup>tm</sup> - www.epicdev.co.za. Please do not hesitate to contact us for any general or support related queries at info@epicdev.co.za</p>
        
                            </body>
                        </html> ";
//////////////////////////////////// HTML CODE FOR CLIENT RESPONSE EMAIL ////////////////////////////////////                    
                
                    if (validate_email($emailClient)) {
                    $status2 = sendMail(array($emailClient), $SystemEmailAccount, $responseSubject, $messageRespond, null);
                    if ($status2["status"] != true) {
                       
                    }
                }
                } else {
                    $returnMessage = "Failed to send message";
                    
                    $success = false;
                }
            } else {
                $returnMessage = "Invalid Email Address";
                $success = false;
            }
        }
        
    header('Content-type: application/json');
    if ($success == true) {
        $success = 1;
    } else {
        $success = 0;
    }

    echo "{\"status\":" . $success . ", \"message\":\"" . $returnMessage . "\"}";
}
    ///////////YOUR CODE//////////// 


////////////////////////////////////////////////////////////////////////////////
//////////////////////////epicaptcha check//////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
session_start();

if (!isset($_SESSION['checkpoint'])) {
    $_SESSION['checkpoint'] = 0;
} else {
    
}
if (!isset($_SESSION['restart'])) {
    $_SESSION['restart'] = 0;
} else {
    
}
if (!isset($_SESSION['epicaptcha'])) {
    $_SESSION['epicaptcha'] = 0;
} else {
    
}
if (!isset($_SESSION['limit'])) {
    $_SESSION['limit'] = 0;
} else {
    
}

if (isset($_POST['x']) && isset($_POST['ux']) && isset($_POST['y']) && isset($_POST['uy'])){

$x = $_POST['x'];
$ux = $_POST['ux'];
$y = $_POST['y'];
$uy = $_POST['uy'];
$mousein = $_POST['mousein'];
$send = $_POST['send'];
$mobile = $_POST['mobile'];


}

if(isset($_POST['val1'])){ $val1 = $_POST['val1'];}else{ $val1 = null; }
if(isset($_POST['val2'])){ $val2 = $_POST['val2'];}else{ $val2 = null; }


if (isset($_POST['reset']) && $_POST['reset'] == 1) {
    fail();
    failed2();
}

function fail() {
    $_SESSION['checkpoint'] = 0;
}

if ($mobile == 0) {
    if ($_SERVER['REQUEST_METHOD'] == "POST" && $mousein == 1) {


        if (($x < $ux + 10 && $x < $ux + $val1 && $_SESSION['checkpoint'] <= 0) || ($x < $ux + 10 && $x < $ux + $val1 && $_SESSION['checkpoint'] > 1)) {
            fail();
        }

        if ($x < $ux + 10 && $x < $ux + $val1 && $_SESSION['checkpoint'] == 0) {
            $_SESSION['checkpoint'] = 1;
            $_SESSION['restart'] = 0;
            $_SESSION['limit'] = 0;
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] == 1) {
            $_SESSION['checkpoint'] = 2;
            $_SESSION['restart'] = 0;
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] <= 1) {
            fail();
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] == 2 && $_SESSION['restart'] == 0) {
            $_SESSION['checkpoint'] = 3;
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] <= 2) {
            fail();
        }
        if ($x > $ux + $val1 && $x < $ux + $val2 & $_SESSION['checkpoint'] == 3 & $_SESSION['restart'] == 0) {
            $_SESSION['checkpoint'] = 4;
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] <= 3) {
            fail();
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] == 4 && $_SESSION['restart'] == 0) {
            $_SESSION['checkpoint'] = 5;
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] <= 4) {
            fail();
        }

        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] == 5 & $_SESSION['restart'] == 0) {
            $_SESSION['checkpoint'] = 6;
        }


        if ($x > $ux + $val1 && $x < $ux + $val2 && $_SESSION['checkpoint'] <= 5) {
            fail();
        }
        if ($x > $ux + $val2 && $_SESSION['checkpoint'] == 6 && $_SESSION['restart'] == 0) {
            $_SESSION['checkpoint'] = 7;
            $_SESSION['epicaptcha'] = 1;
        }

        if ($x > $ux + $val2 && $_SESSION['checkpoint'] <= 6) {
            fail();
        }
    } else {
        fail();
    }
}

function failed2() {
    $_SESSION['checkpoint'] = 0;
}

if ($mobile == 1) {
    if ($x == 1 && $_SESSION['checkpoint'] > 0) {
        failed2();
    }
    if ($x == 1 && $_SESSION['checkpoint'] == 0) {
        $_SESSION['checkpoint'] = 1;
        $_SESSION['limit'] = 0;
    }

    if ($x == 2 && $_SESSION['checkpoint'] != 1) {
        failed2();
    }
    if ($x == 2 && $_SESSION['checkpoint'] == 1) {
        $_SESSION['checkpoint'] = 2;
    }

    if ($x == 3 && $_SESSION['checkpoint'] != 2) {
        failed2();
    }
    if ($x == 3 && $_SESSION['checkpoint'] == 2) {
        $_SESSION['checkpoint'] = 3;
    }


    if ($x == 4 && $_SESSION['checkpoint'] != 3) {
        failed2();
    }
    if ($x == 4 && $_SESSION['checkpoint'] == 3) {
        $_SESSION['checkpoint'] = 4;
    }

    if ($x == 5 && $_SESSION['checkpoint'] != 4) {
        failed2();
    }
    if ($x == 5 && $_SESSION['checkpoint'] == 4) {
        $_SESSION['checkpoint'] = 5;
        $_SESSION['epicaptcha'] = 1;
    }
}

if (isset($_SESSION['checkpoint']) && $_SESSION['epicaptcha'] == 1 && $send == 1) {

    if ($_SESSION['limit'] == 0) {
        $_SESSION['limit'] = 1;
        success();
        //echo "success";
    } else {
        echo "{\"status\":0, \"message\":\"You can only submit this form once\"}";
        //echo "limit";
    }
} else {
    if ($send == 1) {
        fail();
        failed2();
    }
}
////////////////////////////////////////////////////////////////////////////////
//////////////////////////epicaptcha check//////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
?>
