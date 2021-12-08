<?php

if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $subject =  $_POST['subject'];    
    $mailFrom =  $_POST['mail'];    
    $message =  $_POST['message'];    

    $mailTo = "";
    $headers = "From: ".$mailFrom . "on Cov2019stats.live";
    $text = "You have received an email from ".$name ."\n\n ". $message;

    mail($mailTo, $subject, $text, $headers);
    header("location: contact.php?mailsent");
}

?>