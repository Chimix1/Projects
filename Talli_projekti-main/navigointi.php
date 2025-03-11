

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="z-index: 2000;">
    <div class="container-fluid">
       
        <a class="navbar-brand nav-link" href="index.php">
            <strong>Talli</strong>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php" id="nav-home">Etusivu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="koulutukset.php" id="nav-koulutukset">Koulutukset</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="yhteydenotto.php" id="nav-yhteydenotto">Ota yhteyttä</a>
                </li>
            </ul>

            <ul class="navbar-nav list-inline">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><?php echo $_SESSION['nimi']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Kirjaudu ulos</a>
                    </li>
                <?php else: ?>
                   
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php" id="nav-kirjaudu">Kirjaudu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="rekisteroityminen.php" id="nav-rekisteroityminen">Rekisteröidy</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
