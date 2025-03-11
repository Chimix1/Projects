<!DOCTYPE html>
<html lang="fi">
<?php
session_start();
$title = "HTML Kurssi"; 
include 'headers.php';
?>
<body>
<?php include 'navigointi.php'; ?>  

<div class="content container mt-6">
    <h1 class="text-left">HTML Kurssi</h1>
    <p class="text-left">
        Tervetuloa HTML-kurssille! Tässä kurssissa opit HTML:n perusteet ja kuinka luoda verkkosivuja.
    </p>

    <h2>Kurssin sisältö</h2>
    <ul>
        <li><strong>Johdanto HTML:ään</strong>
            <p>HTML (Hypertext Markup Language) on verkkosivujen rakennuskieli. Opit HTML:n perusmerkinnät ja niiden käytön.</p>
        </li>
        <li><strong>HTML-elementit</strong>
            <p>Ymmärrä, kuinka eri HTML-elementtejä käytetään, kuten otsikot, kappaleet, listat ja linkit.</p>
        </li>
        <li><strong>Taulukot ja lomakkeet</strong>
            <p>Opit, kuinka luodaan taulukoita ja lomakkeita HTML:ssä käyttäjän syötteen keräämiseksi.</p>
        </li>
        <li><strong>Verkkosivuston rakenne</strong>
            <p>Ymmärrä, kuinka verkkosivuston rakenne suunnitellaan ja toteutetaan HTML:n avulla.</p>
        </li>
    </ul>

    <h2>Resurssit</h2>
    <p>Seuraavat linkit auttavat sinua syventämään HTML-taitojasi:</p>
    <ul>
        <li><a href="https://developer.mozilla.org/fi/docs/Web/HTML" target="_blank">Mozilla Developer Network (MDN) - HTML</a></li>
        <li><a href="https://www.w3schools.com/html/" target="_blank">W3Schools - HTML Tutorial</a></li>
    </ul>

    <h2>Tehtävä</h2>
    <p>Kirjoita HTML-dokumentti, joka sisältää otsikon, kappaleen ja linkin. Kokeile dokumenttiasi selaimessasi.</p>
    <pre>
        <code>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Otsikko</title>
</head>
<body>
    <h1>Tervetuloa!</h1>
    <p>Tämä on esimerkki HTML-dokumentista.</p>
    <a href="https://example.com">Siirry esimerkkisivustolle</a>
</body>
</html>
        </code>
    </pre>
    
    <p>Onnea opiskeluusi! Jos sinulla on kysyttävää, älä epäröi ottaa yhteyttä.</p>
</div>

<?php include 'footer.html'; ?> 
</body>
</html>
