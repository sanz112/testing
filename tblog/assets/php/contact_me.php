<?php
// Check for empty fields
if(empty($_POST['name1'])      ||
   empty($_POST['email1'])     ||
   empty($_POST['phone1'])     ||
   empty($_POST['message1'])   ||
   !filter_var($_POST['email1'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name1']));
$email_address = strip_tags(htmlspecialchars($_POST['email1']));
$phone = strip_tags(htmlspecialchars($_POST['phone1']));
$message = strip_tags(htmlspecialchars($_POST['message1']));
   
// Create the email and send the message
$to = 'samueljohn498@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>