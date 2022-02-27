<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $visitor_email = $_POST['mail'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $email_from = 'nindzamindza02@gmail.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $firstname $lastname.\n".
                    "User Email: $visitor_email.\n".
                    "Service: $service.\n".
                    "User message: $message.\n";

    $to = "marefaca2002@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: https://stankovich02.github.io/portfolio/index.html");

                    