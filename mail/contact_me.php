<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['message']))
   {
   echo "בקשה למלא את הפרטים";
   return false;
   }
   

$name = $_POST['name'];
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'feedback@physio-quantax.co.il'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Feedback:  $name";
$email_body = "Name: $name\n\nEmail: $email_address\n\\nMessage:\n$message";
$headers = "From: noreply@physio-quantax.co.il\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
header("Location:../index.html#testimony");
//return true;         
?>