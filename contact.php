<?php
    // Check for empty fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    if(empty($name)      ||
       empty($email)     ||
       empty($phone)     ||
       empty($message)    ||
       !filter_var($email,FILTER_VALIDATE_EMAIL)
      )
       {
       echo "No arguments Provided!";
       return false;    
       }
    $name = strip_tags(htmlspecialchars($name));
    $email_address = strip_tags(htmlspecialchars($email));
    $phone = strip_tags(htmlspecialchars($phone));
    $message = strip_tags(htmlspecialchars($message));
       
    // Create the email and send the message
    $to = 'abdulrauf@devflovv.com'; // Add your email address inbetween the '' replacing your@email.com - This is where the form will send a message to.
    $email_subject = "Contact Us Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";  
      if (mail($to,$email_subject,$email_body,$headers)) {
            echo "mail send successfully" ; 
      }else {
         echo "sorry did not send successfully" ; 
      }
      echo $check ; 
    return true;         
  ?>