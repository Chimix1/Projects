<?php
$servername = " datasql7.westeurope.cloudapp.azure.com";
$username = "hekmatyarch";
$password = "73711"; 
$dbname = "app_db";

// luo yhteys
$yhteys = new mysqli($servername, $username, $password, $dbname);

// jos yhteyden muodostaminen ei onnistunut, keskeytä
if ($yhteys->connect_error) {
   die("Yhteyden muodostaminen epäonnistui: " . $yhteys->connect_error);
}
// aseta merkistökoodaus (muuten ääkköset sekoavat)
$yhteys->set_charset("utf8");

$hakusql = "SELECT * FROM auton";
$result = $yhteys->query($hakusql);

// jos tulosrivejä löytyi
if ($result->num_rows > 0) {
   // hae joka silmukan kierroksella uusi rivi
   while($row = $result->fetch_assoc()) {
      // taulukon avaimet (hakasuluissa olevat nimet) ovat TIETOKANNAN KENTTIÄ (sarakkeita)
      echo "Rekisterinumero: " . $row["rekisterinro"]. " - Vuosimalli: " . $row["vuosimalli"]. " - Väri: " . $row["vari"]. " - Omistaja: " . $row["omistaja"]."<br>";
   }
} else {
   echo "Ei tuloksia";
}



$hakusql = "INSERT INTO auton (rekisterinro, vari, vuosimalli, omistaja) VALUES ('ROA-630', 'harmaa', '2011', '080173-169T')";
$result = $yhteys->query($hakusql);
if ($result === TRUE) {
   echo "Uusi auto lisätty onnistuneesti!";
} else {
   echo "Virhe: " . $hakusql . "<br>" . $yhteys->error;
}



?>
