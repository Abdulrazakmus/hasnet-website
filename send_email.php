<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == 'contact_form') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Process form data (e.g., send email, save to database)
    // Example:
    $to = "info@hasnet.co.tz,abdulrazak.jmus@gmail.com";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid form submission.";
}
?>
