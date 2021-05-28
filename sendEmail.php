<?php

// My email
$hellodimianni = 'dmytro.anikin@gmail.com';

if ($_POST) {

    $name = trim(stripslashes($_POST['name']));
    $email = trim(stripslashes($_POST['email']));
    $phone = trim(stripslashes($_POST['phone']));
    $color = trim(stripslashes($_POST['color']));
    $robot = trim(stripslashes($_POST['robot']));


    // Check Name
    // if (strlen($name) < 2 or !ctype_alpha($name)) {
    //     $error['name'] = "Name";
    // }

    // Check Email
    // if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
    //     $error['email'] = "Email";
    // }

    // Check Message
    // if (strlen($message) < 15) {
    //     $error['message'] = "Please, provide more information.";
    // }

    // Subject
    $subject = "Contact Form Submission";

    // Set Message
    // $message .= "<br /> ----- <br /> Пользователь связался с нами. <br />";
    $message .= "Email from: " . $name . " ";
    $message .= "Email address: " . $email . " ";
    $message .= "Phone:" . $phone . " ";
    $message .= "Color:" . $color . " ";
    $message .= "Robot:" . $robot . " ";





    // Set From: header
    $from = $name . " <" . $email . ">";

    // Email Headers
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";



    if (!$error) {

        ini_set("sendmail_from", $hellodimianni); // for windows server
        $mail = mail($hellodimianni, $subject, $message, $headers);

        if ($mail) {echo "OK";} else {echo "Something went wrong. Please try again.";}

    } # end if - no validation error
    

}
