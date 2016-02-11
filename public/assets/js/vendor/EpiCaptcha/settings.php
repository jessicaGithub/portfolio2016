<?php
/* 
 * These settings can be customized to make the content of the emails sent and 
 * recieved unique to your website.
 * If you have knowledge of HTML with inline styling, you can customize the
 * formatting of the email itself in the epicaptcha.php file.
 * The area for changing the HTML will be highlightes with comments.
 */



//// DO NOT EDIT ////
$systemArr = array();
$messageArr = array();

$systemArr["id"] = 1;
//// DO NOT EDIT ////

//////YOUR SETTINGS//////

// Email address used to send emails and recieve client enquiry forms
$systemArr["email"] = "your@emailaddress.com";

// SMTP server details for the email address
$systemArr["host"] = "mail.emailaddress.com";

// Set to 1 if your SMTP requires encryption like tls/ssl
$systemArr["encrypted"] = 0;

// Port used by the SMTP server
$systemArr["port"] = 587;

// Whether using SMTP requires a username and password (Usually 1)
$systemArr["authenticated"] = 1;

// Username for the email Address
$systemArr["username"] = "your@emailaddress.com";

// Password for the email address
$systemArr["password"] = 'yourpassword';

// Name of the person/department being placed on the email responses sent to client
$systemArr["name"] = "Company/Person Name";

// SMTP Encryption type, e.g ssl or tls (only use lowercase)
$systemArr["encryption"] = null;

// Message title that you will recieve from the client when they fill in the form on your website.
$messageArr["messageHead"] = "an Enquiry";

// Subject of the message you will recieve from the client when they fill in the form on your website.
$messageArr["messageSubject"] = "Contact Form";

// Message title the client will recieve from the auto-response message after filling in the form.
$messageArr["responseHead"] = "Thank you for contacting Company/Person Name.";

// Subject of the auto-response message.
$messageArr["responseSubject"] = "Company/Person Name Auto-Response.";

// Message used in the auto-response email
$messageArr["responseMessage"] = "A representative will be in contact with you as soon as possible";

// End piece used in the auto-response.
$messageArr["responseEnd"] = "Enjoy your day!";

// Signature used in the auto-response.
$messageArr["responseSig"] = "Company/Person Name.";

//////YOUR SETTINGS//////

