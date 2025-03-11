<!DOCTYPE html>
<html>
<?php
$title = "kirjaudu";
$css = "login.css";

include 'headers.php';
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
    $sahkoposti = $_POST['sahkoposti'];
    $salasana = $_POST['salasana'];

    if (!empty($sahkoposti) && !empty($salasana)) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE sahkoposti = ?");
        $stmt->bind_param("s", $sahkoposti);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        
         
            if ($salasana === $user['salasana']) {
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['nimi'] = $user['nimi']; 
                $_SESSION['sahkoposti'] = $user['sahkoposti'];
                $_SESSION['salasana'] = $user['salasana']; 
                $_SESSION['kaupunki'] = $user['kaupunki'];
                $_SESSION['katuosoite'] = $user['katuosoite'];
                $_SESSION['postinumero'] = $user['postinumero'];
                $_SESSION['puhelinnumero'] = $user['puhelinnumero'];
                
                $redirect_url = isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php';
                header("Location: $redirect_url");
                exit;
            } else {
                $error_message = "Virheellinen sähköposti tai salasana!"; 
            }
        } else {
            $error_message = "Virheellinen sähköposti tai salasana!"; 
        }

        $stmt->close();
    } else {
        $error_message = "Anna sekä sähköpostiosoite että salasana!"; 
    }
}

$conn->close();
?>
<body>
    <?php include 'navigointi.php'; ?>  

    <div class="d-flex flex-column min-vh-100">
        <div class="flex-grow-1 content container mt-6">

            <div class="row justify-content-center mt-4">
                <div class="col-md-5">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title text-center">Kirjaudu sisään</h2>
                            
                            
                            <?php if (!empty($error_message)): ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $error_message; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <form action="login.php" method="POST">
                                <div class="mb-3">
                                    <label for="sahkoposti" class="form-label">Sähköposti:</label>
                                    <input type="email" class="form-control" id="sahkoposti" name="sahkoposti" required>
                                </div>
                                <div class="mb-3">
                                    <label for="salasana" class="form-label">Salasana:</label>
                                    <input type="password" class="form-control" id="salasana" name="salasana" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Kirjaudu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.html'; ?>
    </div>
</body>
</html>