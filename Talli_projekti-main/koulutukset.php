<!DOCTYPE html>
<html>
<?php
session_start();
$title = "koulutukset";
$css = "koulutukset.css";
include 'headers.php';
?>
<body>
<?php include 'navigointi.php'; ?>  

<div class="content">
  <div class="container">
    <h2>Koulutukset ja kurssit</h2>
    <p>Tässä ovat Tallin tarjoamat koulutukset ja kurssit.</p>

    <div class="row">
      <h2>Koulutuksia</h2>
      
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="javascriptkoulutus.php">
            <img class="card-img-top" src="kuva.png" alt="Javascript kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">Javascript kurssi</h5>
          </div>
        </div>
      </div>

     
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="phpkoulutus.php">
            <img class="card-img-top" src="kuva2.png" alt="PHP kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">PHP kurssi</h5>
          </div>
        </div>
      </div>

    
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="mysqlkoulutus.php">
            <img class="card-img-top" src="kuva3.png" alt="MySQL kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">MySQL kurssi</h5>
          </div>
        </div>
      </div>

      
      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="htmlkoulutus.php">
            <img class="card-img-top" src="kuva4.png" alt="HTML kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">HTML kurssi</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100">
          <a href="csskoulutus.php">
            <img class="card-img-top" src="kuva5.png" alt="CSS kurssi">
          </a>
          <div class="card-body text-center">
            <h5 class="card-title">CSS kurssi</h5>
          </div>
        </div>
      </div>

    </div> 
  </div>
</div>

<?php include 'footer.html'; ?>
</body>
</html>