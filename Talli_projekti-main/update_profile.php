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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['sahkoposti'])) {
        die("Käyttäjätiedot eivät ole saatavilla. Kirjaudu sisään uudelleen.");
    }

    $sahkoposti = $_SESSION['sahkoposti'];
    $username = !empty($_POST['username']) ? $_POST['username'] : null;
    $email = !empty($_POST['email']) ? $_POST['email'] : null;
    $salasana = !empty($_POST['salasana']) ? $_POST['salasana'] : null; // New password input
    $kaupunki = !empty($_POST['kaupunki']) ? $_POST['kaupunki'] : null;
    $puhelinnumero = !empty($_POST['puhelinnumero']) ? $_POST['puhelinnumero'] : null;
    $postinumero = !empty($_POST['postinumero']) ? $_POST['postinumero'] : null;
    $katuosoite = !empty($_POST['katuosoite']) ? $_POST['katuosoite'] : null;

    // Build the update query dynamically based on the fields provided
    $updates = [];
    if ($username !== null) {
        $updates[] = "nimi = '" . $conn->real_escape_string($username) . "'";
    }
    if ($email !== null) {
        $updates[] = "sahkoposti = '" . $conn->real_escape_string($email) . "'";
    }
    if ($salasana !== null) {
        $updates[] = "salasana = '" . $conn->real_escape_string($salasana) . "'";
    }
    if ($kaupunki !== null) {
        $updates[] = "kaupunki = '" . $conn->real_escape_string($kaupunki) . "'";
    }
    if ($puhelinnumero !== null) {
        $updates[] = "puhelinnumero = '" . $conn->real_escape_string($puhelinnumero) . "'";
    }
    if ($postinumero !== null) {
        $updates[] = "postinumero = '" . $conn->real_escape_string($postinumero) . "'";
    }
    if ($katuosoite !== null) {
        $updates[] = "katuosoite = '" . $conn->real_escape_string($katuosoite) . "'";
    }

    if (!empty($updates)) {
        // Ensure user identification through their email
        $sql = "UPDATE users SET " . implode(", ", $updates) . " WHERE sahkoposti = '$sahkoposti'";
        if ($conn->query($sql) === TRUE) {
            header("Location: logout.php");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        header("Location: profile.php?update=nothing");
        exit;
    }
}

$conn->close();
