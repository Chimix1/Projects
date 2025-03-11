<!DOCTYPE html>
<html lang="fi">
<?php
session_start(); 
$title = "PHP Kurssi"; 
include 'headers.php'; 
?>
<body>
<?php include 'navigointi.php'; ?>  

<div class="content container mt-6">
    <h1 class="text-left">PHP Kurssi</h1>
    <p class="text-left">
        Tervetuloa PHP-kurssille! Tässä kurssissa opit PHP:n perusteet ja kuinka luoda dynaamisia verkkosivustoja.
    </p>

    <h2>Kurssin sisältö</h2>
    <ul>
        <li><strong>Johdanto PHP:hen</strong>
            <p>PHP (Hypertext Preprocessor) on palvelinpuolen ohjelmointikieli, jota käytetään verkkosivujen kehittämisessä.</p>
        </li>
        <li><strong>PHP-syntaksi</strong>
            <p>Ymmärrä, kuinka PHP-syntaksi toimii ja miten skriptejä ajetaan palvelimella.</p>
        </li>
        <li><strong>Muuttujat ja tietotyypit</strong>
            <p>Opit, kuinka määritellään muuttujia ja käytetään erilaisia tietotyyppejä PHP:ssä.</p>
        </li>
        <li><strong>Tietokannan käsittely</strong>
            <p>Ymmärrä, kuinka PHP:llä voidaan tehdä tietokantakyselyjä ja käsitellä tietoja.</p>
        </li>
    </ul>

    <h2>Resurssit</h2>
    <p>Seuraavat linkit auttavat sinua syventämään PHP-taitojasi:</p>
    <ul>
        <li><a href="https://www.php.net/manual/fi/" target="_blank">PHP Manual</a></li>
        <li><a href="https://www.w3schools.com/php/" target="_blank">W3Schools - PHP Tutorial</a></li>
    </ul>

    <h2>Tehtävä</h2>
    <p>Kirjoita PHP-skripti, joka tulostaa "Tervetuloa PHP:hen!" selaimessasi.</p>
    <pre>
        <code>
<?php
echo "Tervetuloa PHP:hen!";
?>
        </code>
    </pre>
    
    <p>Onnea opiskeluusi! Jos sinulla on kysyttävää, älä epäröi ottaa yhteyttä.</p>
</div>

<?php include 'footer.html'; ?> 
</body>
</html>
