<!DOCTYPE html>
<html lang="fi">
<?php
$title = "Käyttäjäprofiili"; 
include 'headers.php'; 
session_start(); 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); 
    exit;
}

if (!isset($_SESSION['nimi']) || !isset($_SESSION['sahkoposti']) || !isset($_SESSION['salasana'])) {
    die("Käyttäjätiedot eivät ole saatavilla. Kirjaudu sisään uudelleen.");
}

$user_name = htmlspecialchars($_SESSION['nimi']); 
$user_email = htmlspecialchars($_SESSION['sahkoposti']);
$user_password = htmlspecialchars($_SESSION['salasana']);
$kaupunki = htmlspecialchars($_SESSION['kaupunki']);
$katuosoite = htmlspecialchars($_SESSION['katuosoite']);
$postinumero = htmlspecialchars($_SESSION['postinumero']);
$puhelinnumero = htmlspecialchars($_SESSION['puhelinnumero']);


?>
<body>
    <?php include 'navigointi.php'; ?> 
    
    <div class="container mt-5 pt-4">
        <h1>Käyttäjäprofiili</h1>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Profiilitiedot</h2>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item bg-secondary text-light">Nimi: <?php echo $user_name; ?></li>
                    <li class="list-group-item bg-secondary text-light">Sähköposti: <?php echo $user_email; ?></li>
                    <li class="list-group-item bg-secondary text-light">
                        Salasana: <span id="password-display">********</span>
                        <button type="button" id="toggle-password" class="btn btn-link">Näytä</button>
                    </li>
                    <li class="list-group-item bg-secondary text-light">Katuosoite: <?php echo $katuosoite; ?></li>
                    <li class="list-group-item bg-secondary text-light">Postinumero: <?php echo $postinumero; ?></li>
                    <li class="list-group-item bg-secondary text-light">Kaupunki: <?php echo $kaupunki; ?></li>
                    <li class="list-group-item bg-secondary text-light">Puhelinnumero: <?php echo $puhelinnumero; ?></li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Päivitä tietosi</h2>
            </div>
            <div class="card-body">
                <form action="update_profile.php" method="POST">
                    <div class="form-group">
                        <label for="username">Nimi</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $user_name; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="email">Sähköposti</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user_email; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="salasana">Salasana</label>
                        <input type="password" class="form-control" id="salasana" name="salasana">
                    </div>
                    <div class="form-group">
                        <label for="katuosoite">Katuosoite</label>
                        <input type="text" class="form-control" id="katuosoite" name="katuosoite">
                    </div>
                    <div class="form-group">
                        <label for="postinumero">Postinumero</label>
                        <input type="text" class="form-control" id="postinumero" name="postinumero">
                    </div>
                    <div class="form-group">
                        <label for="kaupunki">Kaupunki</label>
                        <input type="text" class="form-control" id="kaupunki" name="kaupunki">
                    </div>
                    <div class="form-group">
                        <label for="puhelinnumero">Puhelinnumero</label>
                        <input type="text" class="form-control" id="puhelinnumero" name="puhelinnumero">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Päivitä</button>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h2>Poista tili</h2>
            </div>
            <div class="card-body">
                <form action="remove_profile.php" method="POST">
                    <button type="submit" class="btn btn-danger btn-block">Poista tili</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'footer.html'; ?> 

    <script>
        document.getElementById('toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('salasana');
            const passwordDisplay = document.getElementById('password-display');
            const isPasswordVisible = passwordInput.type === 'text';
            
            if (isPasswordVisible) {
                passwordInput.type = 'password';
                passwordDisplay.textContent = '********';
                this.textContent = 'Näytä';
            } else {
                passwordInput.type = 'text';
                passwordDisplay.textContent = '<?php echo $user_password; ?>'; // Shows the actual password
                this.textContent = 'Piilota';
            }
        });
    </script>
</body>
</html>
