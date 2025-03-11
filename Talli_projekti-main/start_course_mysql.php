<!DOCTYPE html>
<html lang="fi">
<?php
session_start(); 
$title = "MySQL Kurssi"; 
include 'headers.php'; 
?>
<body>
<?php include 'navigointi.php'; ?>  

<div class="content container mt-6">
    <h1 class="text-left">MySQL Kurssi</h1>
    <p class="text-left">
        Tervetuloa MySQL-kurssille! Tässä kurssissa opit MySQL:n perusteet ja kuinka hallita tietokantoja.
    </p>

    <h2>Kurssin sisältö</h2>
    <ul>
        <li><strong>Johdanto MySQL:ään</strong>
            <p>MySQL on suosittu relaatiotietokannan hallintajärjestelmä, jota käytetään laajalti verkkosovelluksissa.</p>
        </li>
        <li><strong>Tietokannan luominen ja hallinta</strong>
            <p>Ymmärrä, kuinka tietokantoja luodaan, muokataan ja hallitaan MySQL:ssä.</p>
        </li>
        <li><strong>SQL-kyselyt</strong>
            <p>Opit, kuinka kirjoittaa SQL-kyselyitä tietojen hakemiseksi, päivittämiseksi ja poistamiseksi.</p>
        </li>
        <li><strong>Taulujen ja tietotyyppien käsittely</strong>
            <p>Ymmärrä, kuinka luodaan tauluja ja määritellään tietotyyppejä MySQL:ssä.</p>
        </li>
    </ul>

    <h2>Resurssit</h2>
    <p>Seuraavat linkit auttavat sinua syventämään MySQL-taitojasi:</p>
    <ul>
        <li><a href="https://dev.mysql.com/doc/" target="_blank">MySQL Documentation</a></li>
        <li><a href="https://www.w3schools.com/sql/" target="_blank">W3Schools - SQL Tutorial</a></li>
    </ul>

    <h2>Tehtävä</h2>
    <p>Kirjoita SQL-kysely, joka luo uuden taulun nimeltä "opiskelijat" ja lisää siihen esimerkkirivejä.</p>
    <pre>
        <code>
CREATE TABLE opiskelijat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nimi VARCHAR(100) NOT NULL,
    sahkoposti VARCHAR(100) NOT NULL
);

INSERT INTO opiskelijat (nimi, sahkoposti) VALUES ('Matti Meikäläinen', 'matti@example.com');
        </code>
    </pre>
    
    <p>Onnea opiskeluusi! Jos sinulla on kysyttävää, älä epäröi ottaa yhteyttä.</p>
</div>

<?php include 'footer.html'; ?> 
</body>
</html>
