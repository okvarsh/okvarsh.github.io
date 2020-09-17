<?php
$name = $_POST['feedback_name'];
$visitor_email = $_POST['feedback_email'];
$message = $_POST['feedback_msg'];

$email_from = 'varshvilas@gmail.com';//<== update the email address

$email_subject = "New Form submission";
$email_body = "You have received a new feedback from the user $name.\n".
    "Here is the message:\n $message".;
    
$to = "varshinivj19@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: index.html');

?>