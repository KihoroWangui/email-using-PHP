<?php
$to = "hannahkihoro1@gmail.com";
$subject = "Test Email from XAMPP";
$message = "Hello, this is a test email from XAMPP using PHP mail()!";
$headers = "From: hannahkihoro@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "✅ Email sent successfully!";
} else {
    echo "❌ Email failed!";
}
?>
