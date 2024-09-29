<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
require 'vendor/autoload.php'; // Adjust the path as necessary

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags(trim($_POST['fname'] . ' ' . $_POST['lname'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $number = htmlspecialchars(strip_tags(trim($_POST['number'])));
    $topic = htmlspecialchars(strip_tags(trim($_POST['topic'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'officialchoice2@gmail.com'; // Your SMTP username
        $mail->Password = 'mxtvghtqqdeoebus'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('officialchoice2@gmail.com', 'Md Shahadat'); // Sender's email and name
        $mail->addAddress('shahadatmd645@gmail.com'); // Add a recipient

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = 'New Contact Submission From Portfolio';
        $mail->Body = "Name: $name\nEmail: $email\nNumber: $number\ntopic: $topic\nMessage: $message\n";

        $mail->send();
        $_SESSION['success'] = "Thank you for contacting me, $name. I will get back to you soon!";
        header("Location:index.php#contact");
    } catch (Exception $e) {
        $_SESSION['error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header("Location:index.php#contact");
    exit();
}

?>

