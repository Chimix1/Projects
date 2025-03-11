<!DOCTYPE html>
<html>
<?php
session_start(); 
$title = "Etusivu"; 
include 'headers.php'; 
?>
<body>
<?php include 'navigointi.php'; ?>  

<div class="content">
  
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        
        <h1 class="left">Tervetuloa <?php echo htmlspecialchars($_SESSION['nimi']); ?></h1>
        <p class="left">Toivotamme sinulle hauskaa opiskelua! Jos tarvitset apua, älä epäröi ottaa yhteyttä.</p>
    <?php else: ?>
        
        <h1 class="left">Koulutusliike Talli</h1>
        <p class="left">Tervetuloa Koulutusliike Talli kotisivuille! Täältä löydät tietoa meidän koulutuksista ja rekrytointiohjelmistamme.</p>
        <p class="left">Tarjoamme paljon erillaisia koulutuksia kaiken tasoisille oppilaille tai halukkaille.</p>
        <p class="left">Pääset tästä katsomaan koulutuksiamme ja valitsemaan sopivan koulutuksen sinulle.</p>
        <div class="left">
        <a href="koulutukset.php" class="btn btn-primary">Koulutukset</a>
        </div>
    <?php endif; ?>
</div>

<?php include 'footer.html'; ?> 
</body>
</html>
