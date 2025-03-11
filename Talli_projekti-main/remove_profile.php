<?php
session_start();

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "app_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}


$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        
        session_destroy();
        header("Location: index.php"); 
        exit;
    } else {
        echo "Error deleting account: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
