<!DOCTYPE html>
<html>
<?php
session_start();
$title = "Yhteydenottopyyntö";
$css = "yhteystiedot.css";

// Display all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "app_db";

include 'headers.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

   
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 20); 

   
    if ($conn->connect_error) {
        error_log("Connection failed: " . $conn->connect_error);
        echo "<script>console.error('Database connection failed: " . $conn->connect_error . "');</script>";
        die("Connection failed: " . $conn->connect_error);  
    } else {
        echo "<script>console.log('Database connected successfully!');</script>";
    }

   
    $stmt = $conn->prepare("INSERT INTO contact_requests (name, email, message) VALUES (?, ?, ?)");

    if (!$stmt) {
        error_log("Prepare failed: " . $conn->error);
        echo "<script>console.error('Prepare statement failed: " . $conn->error . "');</script>";
        die("Prepare failed: " . $conn->error);
    }

  
    $stmt->bind_param("sss", $name, $email, $message);
    
    
    if ($stmt->execute()) {
        echo "<script>console.log('Form submitted successfully');</script>";
        echo "<p>Yhteydenottopyyntö on lähetetty onnistuneesti!</p>";
    } else {
        error_log("Execution failed: " . $stmt->error);
        echo "<script>console.error('Execution failed: " . $stmt->error . "');</script>";
        echo "<p>Virhe: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
<body>
<?php include 'navigointi.php'; ?>  
<div class="content container mt-5 pt-4"> 
  <h1>Yhteydenottopyyntö</h1>
  
  <div>
    <h2>Ota yhteyttä</h2>
    <p>Voit ottaa meihin yhteyttä alla olevalla lomakkeella pyrimme ottamaan yhteyttä mahdollisimman pian</p>


    <form action="" method="post">
      <div class="row mb-3"> 
        <label for="name" class="col-sm-2 col-form-label">Nimi:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
      </div>
      
      <div class="row mb-3"> 
        <label for="email" class="col-sm-2 col-form-label">Sähköposti:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      </div>
      
      <div class="row mb-3"> 
        <label for="message" class="col-sm-2 col-form-label">Viesti:</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
      </div>
      
      <div class="row mb-3"> 
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary w-100">Lähetä</button> 
        </div>
      </div>
    </form>
    
  </div>
</div>

<?php include 'footer.html'; ?>
</body>
</html>
