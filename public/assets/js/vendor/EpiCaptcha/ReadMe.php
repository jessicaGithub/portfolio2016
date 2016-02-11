<!-- THIS CODE IS TO BE PLACED IN THE FILE WHERE THE CONTACT FORM IS -->        


        <!-- TO BE PLACED IN THE HEAD HTML TAG -->
        <script src="EpiCaptcha/js/jquery.1.9.1.min.js"></script>
        <script type="text/javascript" src="EpiCaptcha/js/epicaptcha.js"></script>
        <link rel="stylesheet" href="EpiCaptcha/css/epicaptcha.css" type="text/css">
        <script type="text/javascript">
          $(function(){
              ////epicaptcha div////
               $("#epicaptcha").Epicaptcha( {
                   buttonID: "epi", // the id of the form button
                   theFormID: "contact-form" // the id of the form tag
               })   
           });

        </script>
        <!-- TO BE PLACED IN THE HEAD HTML TAG -->        
        
        
            <!-- TO BE PLACED AT THE BOTTOM INSIDE THE FORM TAG -->
            <div id="epicaptcha"></div>
            <input id="epi" type="button" value="Send"/> <!-- THIS MUST BE OF TYPE BUTTON, DO NOT USE SUBMIT -->
            <div id="contactMessage"></div>
            <!-- TO BE PLACED AT THE BOTTOM INSIDE THE FORM TAG -->
            
<!---------------------------------------------------DEFAULT SETTINGS-------------------------------------------------------->
            <?php
            /* DEFAULT SETTINGS: 
                width : 179,
                mobile:0,
                Messages
                successMessage: "Thank you! Your message has been sent!",
                startMessage: "Move your mouse cursor through the bar above from left to right",
                startMessageMobile: "Touch each circle from left to right to unlock",
                errorMessage:"MOVE your CURSOR through the bar above from LEFT to RIGHT",
                limitMessage:"You can only submit this form once",
                completeMessage:"Got it!",
                notCompleteMessage:"Please complete the security check first.",
                halfwayMessage:"Half Way, keep going...",
                threeQuarterMessage:"Almost there...",
                Messages              ////////        THEMES TO CHOSE FROM              ////////
                theme:"lightblue",   //default,fancy,greyscale,lightblue,tribal,basic,bluebar//
                fontColour:"#555",
                errorColour:"#cc0000",
                successColour: "#006898",
                submitUrl: "EpiCaptcha/epicaptcha.php",
                theFormID: "contact-form",
                buttonID: "btnEpi"
             */
            ?>
<!-- The above default settings can be found in the epicaptcha.js page however must be adjusted in the script tags on the page your epicaptcha will be on: -->
               <!--For Example-->
          <script type="text/javascript">
          $(function(){
              ////epicaptcha div////
              // EACH SETTING NEEDS A COMMA (,) AFTER IT - EXCEPT THE LAST SETTING IN THE LIST!! 
               $("#epicaptcha").Epicaptcha( {
                   buttonID: "epi", // the id of the form button
                   theFormID: "contact-form", // the id of the form tag
                   theme:"lightblue", // this will adjust the theme
                   submitUrl: "EpiCaptcha/epicaptcha.php" // The .php that must be used.
                   // Last setting doesnt have the (,) __^
               })   
           });

        </script>
<!--------------------------------------------------------------------------------------------------------------------------->

<?php
/* IF YOUR WEBSITE HAS MULTIPLE FORMS THAT YOU WISH TO USE THE CAPTCHA ON:
 * 
 * This captcha currently DOES NOT support multiple instances on the same page.
 * 
 * If you have multiple forms across different pages on your website, you can use epicaptcha on each.
 * If each form is different, for example, you have a contact form, registration form and an order form,
 * Epicaptcha can be used on all those forms and provide you with all the information you need!
 * 
 * To do this, simply duplicate (Make copies of) the "epicaptcha.php" file and name them differently:
 * Example:
 * 
 * Order Form: epicaptcaOrder.php
 * Contact Form: epicaptchaContact.php
 * Registration Form: epicaptchaReg.php
 * 
 * These files will all sit in the same Epicaptcha folder in your website folder.
 * 
 * The next step would be to adjust each Epicaptcha to suit your form.
 * 
 */
?>

<!-------------------------------------------- ORDER FORM EXAMPLE ----------------------------------------------------------->
        
            <script src="EpiCaptcha/js/jquery.1.9.1.min.js"></script>
            <script type="text/javascript" src="EpiCaptcha/js/epicaptcha.js"></script>
            <link rel="stylesheet" href="EpiCaptcha/css/epicaptcha.css" type="text/css">
            <script type="text/javascript">
            $(function(){
                ////epicaptcha div////
                $("#epicaptcha").Epicaptcha( {
                   buttonID: "epi", // the id of the form button
                   theFormID: "order-form", // the id of the form tag
                   submitURL: "EpiCaptcha/epicaptchaOrder.php" // Thise points to the correct php file required for this form
                })   
            });

            </script>
            <!-- MAKE SURE TO PUT THE NAME ELEMENT ON EACH INPUT/SELECT/TEXTAREA YOU PLACE IN YOUR FORM -->
            <form id="order-form">
                            
                <div>
                    <label>Name:</label>
                    <input type="text" name="name" placeholder="your name..." />
                </div>
                       
                <div>
                    <label>Email Address:</label>
                    <input type="email" name="email" placeholder="your email address..." />
                </div>
                            
                <div>
                    <label>Contact Number:</label>
                    <input type="text" name="number" placeholder="your number..." />
                </div>
                            
                <div>
                    <label>Choose a type:</label>
                    <select class="type" name="type">
                        <option value="none">Choose a Type</option>
                        <option value="Nissan">Nissan</option> <!-- the value element is what will be shown in your email -->
                    </select>
                </div>
                            
                <div>
                    <label>Choose a Model:</label>
                    <select name="model">
                        <option value="none">Choose a Type to see Models</option>
                        <option value="GTR">GTR<option>
                    </select>
                </div>
                            
                <div>
                    <label>Additional Info:</label>
                    <textarea name="add_info" placeholder="additional info..."></textarea>
                </div>
                
                <div id="epicaptcha"></div>
                <input type="button" id="epi" value="Request Order" /> <!-- THIS MUST BE OF TYPE BUTTON, DO NOT USE SUBMIT -->
                <div id="contactMessage"></div>
            </form>
            
<!---------------------------------------------EPICAPTCHA.PHP EXAMPLE--------------------------------------------------->

<?php
/* In the epicaptchaOrder.php file, you can adjust:
 * 
 * The variables that come from the form.
 * The Layout of the email sent to the user and to your email address.
 * The headings/subjects/content of the emails.
 * 
 * The settings.php is designed to contain the Headings/Subjects/Content of a single epicaptcha.php file.
 * In the case of multiple forms, you will ignore the messageArr array information and adjust that in the epicaptcha.php files.
 * The systemArr array will still be used by all epicaptcha.php files.
 *
 */
//////////////////////////////////////////INSIDE EPICAPTCHAORDER.PHP//////////////////////////////////////////////////////////
        
        //// DO NOT CHANGE ////
        global $systemArr;
        global $messageArr;

    
        $SystemEmailAccount = $systemArr;
        $email = $systemArr["email"];
        $error = "";
        $returnMessage = "";
        $success = true;
        //// DO NOT CHANGE //// 
        
        
       //// These can be adjusted to suit the form you are using ////
       /// You can add more if you need more cotent in your emails //// 
        
/*before*/  $messageheading = $messageArr["messageHead"];
/*after*/   $messageheading = "an Order"; // this is only a piece of the message heading, the rest is set in the HTML code below

/*before*/  $messageSubject = $messageArr["messageSubject"];
/*after*/   $messageSubject = "Order Form";

/*before*/  $responseHeading = $messageArr["responseHead"];
/*after*/   $responseHeading = "Thank you for orering from Company/Person Name.";

/*before*/  $responseMessage = $messageArr["responseMessage"];
/*after*/   $responseMessage = "A representative will be in contact with you as soon as possible to assist in the completion of your order.";

/*before*/  $responseSig = $messageArr["responseSig"];
/*after*/   $responseSig = "Company/Person Name Order Auto-Response.";

////////////////Can be left alone if you use the same on all forms///////////////////////////////
/*before*/  $responseEnd = $messageArr["responseEnd"]; 
/*after*/   $responseEnd = "Enjoy your day!";          

/*before*/  $responseSubject = $messageArr["responseSubject"];
/*after*/   $responseSubject = "Company/Person Name.";

////////////////Can be left alone if you use the same on all forms///////////////////////////////

        

        //// DO NOT CHANGE //// 
        if (isset($_POST["email"])) {
            //$emailClient = mysql_real_escape_string($_POST["email"]);
            $emailClient = $_POST["email"];
            if (validate_email($emailClient)) {
        //// DO NOT CHANGE //// 

                // These are the variables gathered from the order form above
                // The $_POST[""] section of the variable is the name element of the form inputs
                // You do not need to put the email variable here, it is created and checked above
                // if your email field in the form is named differently, change that in the - $_POST["change here"] - above
                
                $name = $_POST["name"]; 
                
                $number = $_POST["number"];
                
                $type = $_POST["type"];
                
                $model = $_POST["model"];
                
                $additionalInfo = $_POST["add_info"];
                
                // These variables will produce the data shown in the email sent to you below.
                
                $messageContent =
/////////////////////////////////////////////// HTML CODE FOR CLIENT ENQUIRY EMAIL /////////////////////////////////////////////
                       
                       // This code can be adjusted to suit the form.
                       // To adjust this code, you can copy any of the <tr> and it's content and then place the new informtaion into it:
                        
                       " <!DOCTYPE html>
                            <html>
                                <head>
                                    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                                </head>
                                <body style='font-family: calibri, sans-serif; font-size: 16px;'>
        
                                    <h1 style='padding: 10px; background-color: #1f1f1f; color: #ffffff; font-size: 28px;'>Hi there! You've received $messageheading from your website :)</h1>
        
                                    <table style='border-spacing: 0px; border: 1px solid #ccc; border-bottom: none;'>
||||| COPY THIS PIECE HERE |||||
                                        <tr>                                                                                                  || CHANGE THIS ||
                                            <td width='20%' style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Enquirer's Name</td>
                                            <td width='80%' style='padding: 5px; border-bottom: 1px solid #ccc;'>$name</td>
                                        </tr>                                                             || PUT VARIABLE HERE ||
||||| COPY THIS PIECE HERE |||||
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Enquirer's Email Address</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$emailClient</td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Enquirer's Number</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$number</td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Type</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$type</td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Model</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$model</td>
                                        </tr>
                                        <tr>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc; border-right: 1px solid #ccc;'>Additional Information</td>
                                            <td style='padding: 5px; border-bottom: 1px solid #ccc;'>$additionalInfo</td>
                                        </tr>
                                    </table>
        
                                    <h2 style='padding: 10px; background-color: #1f1f1f; color: #ffffff; font-size: 28px;'>Enjoy your day!</h2>
        
                                    <p style='padding: 10px; background-color: #eee; color: #777; font-size: 12px;'>Brought to you by <b>Epicdev</b><sup>tm</sup>. Please do not hesitate to contact us for any general or support related queries at info@epicdev.co.za</p>
        
                                </body>
                            </html> ";
//////////////////////////////////////////// HTML CODE FOR CLIENT ENQUIRY EMAIL //////////////////////////////////////////////
                
                //////////////// DO NOT CHANGE //////////////////////////////
                $status = sendMail(array($email), $SystemEmailAccount, $messageSubject, $messageContent, null);
                if ($status["status"] == true) {
                    $returnMessage = "Message Sent";
                    $messageRespond =
                //////////////// DO NOT CHANGE ////////////////////////////// 
                       
///////////////////////////////////////// HTML CODE FOR CLIENT RESPONSE EMAIL ////////////////////////////////////////////////
                   
                   // This is the auto-response email that your client will recieve
                   // Generally you will only change this in the messageArr or variables above
                   // If you wish to add more information into this email, simply adjust it like the email above.
                            
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
///////////////////////////////////////////// HTML CODE FOR CLIENT RESPONSE EMAIL ////////////////////////////////////////////                    
        }}}
                ?>