<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Use your SMTP host (e.g., Gmail, Outlook, etc.)
        $mail->SMTPAuth = true;
        $mail->Username = 'chibiis088@gmail.com'; // Your SMTP email
        $mail->Password = 'fxqe rqsh fzui qvex'; // App password (not your actual email password!)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
        $mail->Port = 587; // SMTP port for TLS

        // Email headers
        $mail->setFrom($email, $name);
        $mail->addAddress('chibiis088@gmail.com'); // Where you want to receive emails
        $mail->addReplyTo($email, $name);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from $name";
        $mail->Body = "<strong>Name:</strong> $name <br> 
                       <strong>Email:</strong> $email <br> 
                       <strong>Message:</strong> <br> $message";

        // Send email
        $mail->send();
        header('Location: index.html');
        echo "Viesti lähetetty onnistuneesti!";
    } catch (Exception $e) {
        echo "Virhe viestin lähettämisessä: {$mail->ErrorInfo}";
    }
} else {
    echo "Virheellinen pyyntö.";
}
?>
