<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "app_db"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    
 

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP(); 
            $mail->Host = 'sandbox.smtp.mailtrap.io'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'b5d4fc4458fd21'; 
            $mail->Password = 'bd1fdfd53d1005'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525; 

         
            $mail->setFrom('talli@gmail.com', 'Mailer');
            $mail->addAddress($email); 


            $mail->isHTML(true); 
            $mail->Subject = 'Talli rekistoroityminen';
            $mail->Body = '<html><body><h1>Talli rekistoroityminen</h1>
            <p>Tervetuloa ' . htmlspecialchars($name) . ' Talliin. Klikkaa alla olevaa linkkiä valitsemaan koulutuksen ja hauskaa opiskelua.</p>
            <p><a href="https://hekmatyarch-hxayb4dxd0dhdkan.westeurope-01.azurewebsites.net/koulutukset.php">Klikkaa tästä</a></p></body></html>';

            $mail->send();
            echo 'Message has been sent to ' . htmlspecialchars($email);

          
            $conn = new mysqli($servername, $username, $password, $dbname);

           
            if ($conn->connect_error) {
                error_log("Connection failed: " . $conn->connect_error);
                echo "<script>console.error('Database connection failed: " . $conn->connect_error . "');</script>";
                die("Connection failed: " . $conn->connect_error);
            }

          
            $stmt = $conn->prepare("INSERT INTO users (name, email, message ) VALUES (?, ?, ?)");
            if (!$stmt) {
                error_log("Prepare failed: " . $conn->error);
                echo "<script>console.error('Prepare statement failed: " . $conn->error . "');</script>";
                die("Prepare failed: " . $conn->error);
            }

         
            $stmt->bind_param("sssssss", $name, $email, $message);

     
            if ($stmt->execute()) {
                echo "<p>Data saved to the database successfully!</p>";
            } else {
                error_log("Execution failed: " . $stmt->error);
                echo "<script>console.error('Execution failed: " . $stmt->error . "');</script>";
                echo "<p>Database error: " . $stmt->error . "</p>";
            }

         
            $stmt->close();
            $conn->close();
            header('Location: index.php');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Invalid email address.';
    }
} else {
    echo 'Form not submitted correctly.';
}
?>
