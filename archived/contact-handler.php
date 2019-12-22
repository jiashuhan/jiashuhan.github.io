<?php
    // this doesn't actually work on github, see: https://stackoverflow.com/questions/24348223/send-email-from-static-page-hosted-on-github-pages
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'hanjs1997@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "Name: $name\n".
                  "Email: $visitor_email\n".
                  "Message: $message.\n".
    
    $to = "hanjs1997@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    //done. redirect to index page.
    header("Location: index.html");
?>