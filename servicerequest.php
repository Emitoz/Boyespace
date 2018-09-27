<?php 
if(isset($_POST['submit'])){
    $to = "boye_space@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $your_name = $_POST['your_name'];
    $company_name = $_POST['company_name'];
    $subject = "New Service Request";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $company_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Request Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>