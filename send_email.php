<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted. ";
    if (isset($_POST['form_type']) && $_POST['form_type'] == 'contact_form') {
        echo "Contact form detected. ";
        // Handle the contact form submission
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        echo "Data received: $name, $email, $phone, $subject, $message. ";

        $to = "abdulrazak.jmus@gmail.com";
        $email_subject = "New Message from Website: " . $subject;
        $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $email_subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "Invalid form type.";
    }
} else {
    echo "Invalid request method.";
}
?>
