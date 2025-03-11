<!DOCTYPE html>
<html lang="fi">
<?php
session_start();
$title = "CSS Koulutus";
$css = "koulutuksiencss.css";
include 'headers.php';

if (isset($_SESSION['started_course']) && $_SESSION['started_course'] == 'css') {
    header("Location: start_course_css.php"); 
    exit;
}
?>
<body>
    <?php include 'navigointi.php'; ?>  

    <div class="content container mt-6">
      
        <h1>CSS Koulutus</h1>
        
        <p>
            CSS (Cascading Style Sheets) on tyyliohjeiden kieli, jota käytetään verkkosivujen ulkoasun määrittämiseen. CSS-koulutuksessa
            opit luomaan visuaalisesti houkuttelevia ja responsiivisia verkkosivuja, jotka toimivat saumattomasti eri laitteilla.
        </p>

        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <div class="text-center mt-4">
                <form action="" method="POST">
                    <button type="submit" name="start_course" class="btn btn-success">Aloita kurssi</button>
                </form>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['start_course'])) {
                $_SESSION['started_course'] = 'css'; 
                header("Location: start_course_css.php"); 
                exit;
            }
            ?>
        <?php else: ?>
            <div class="row justify-content-center mt-4">
                <div class="col-md-5">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title text-center">Kirjaudu sisään</h2>
                            <form method="POST" action="login.php?redirect=csskoulutus.php">
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

                <div class="col-md-5 mt-3 mt-md-0">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h2 class="card-title">Rekisteröidy</h2>
                            <p>Jos sinulla ei ole vielä tiliä, rekisteröidy nyt!</p>
                            <a href="rekisteroityminen.php" class="btn btn-primary">Rekisteröidy tästä</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php include 'footer.html'; ?>
</body>
</html>
