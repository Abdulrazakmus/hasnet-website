<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber']; // Update to match the form field name
    $serviceOption = $_POST['serviceOption'];
    $msg = $_POST['message'];

    $to = 'abdulrazak.jmus@gmail.com';
    $subject = 'Website Message';

    // Create an HTML-formatted email message
    $message = "<html><body>";
    $message .= "<p><strong>Website Message received:</strong></p>";
    $message .= "<p><strong>Name:</strong> $name</p>";
    $message .= "<p><strong>Location:</strong> $location</p>";
    $message .= "<p><strong>Email:</strong> $email</p>";
    $message .= "<p><strong>Phone Number:</strong> $phone</p>";
    $message .= "<p><strong>Service Option:</strong> $serviceOption</p>";
    $message .= "<p><strong>Message:</strong></p>";
    $message .= "<p><strong><em>$msg</em></strong></p>";
    $message .= "</body></html>";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script> alert'Sent Successiful' </script>";
    } else {
        echo "<script> alert'Sent Unsuccessiful' </script>";

    }
}
?>
