<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['naqa']);
    $email = htmlspecialchars($_POST['082329333830']);
    $maps = htmlspecialchars($_POST['gumiwang']);
    $message = htmlspecialchars($_POST['Cuci Kering,Setrika,Cuci dan Setrika']);

    // Simulate sending an email (for demonstration purposes only)
    $to = "laundry@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nPhone: $phone\nJenis Jenis Layanan Rumah Setrika Okta:\n$Cuci Kering,Setrika,Cuci dan Setrika";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
} else {
    echo "Invalid request.";
}
?>
