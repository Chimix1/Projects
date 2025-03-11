<!DOCTYPE html>
<html lang="fi">
<?php
session_start(); 
$title = "CSS Kurssi"; 
include 'headers.php'; 
?>
<body>
<?php include 'navigointi.php'; ?>  

<div class="content container mt-6">
    <h1 class="text-left">CSS Kurssi</h1>
    <p class="text-left">
        Tervetuloa CSS-kurssille! Tässä kurssissa opit CSS:n perusteet ja kuinka muokata verkkosivujen ulkoasua.
    </p>

    <h2>Kurssin sisältö</h2>
    <ul>
        <li><strong>Johdanto CSS:ään</strong>
            <p>CSS (Cascading Style Sheets) on tyylisivukieli, jota käytetään verkkosivujen ulkoasun määrittämiseen.</p>
        </li>
        <li><strong>CSS-säännöt ja -valitsimet</strong>
            <p>Ymmärrä, kuinka CSS-säännöt toimivat ja miten valitsimia käytetään eri elementtien muokkaamiseen.</p>
        </li>
        <li><strong>Värit ja fontit</strong>
            <p>Opit, kuinka värejä ja fontteja käytetään verkkosivujen tyylissä.</p>
        </li>
        <li><strong>Layout ja responsiivisuus</strong>
            <p>Ymmärrä, kuinka sivun asettelu tehdään ja kuinka responsiivinen suunnittelu toimii.</p>
        </li>
    </ul>

    <h2>Resurssit</h2>
    <p>Seuraavat linkit auttavat sinua syventämään CSS-taitojasi:</p>
    <ul>
        <li><a href="https://developer.mozilla.org/fi/docs/Web/CSS" target="_blank">Mozilla Developer Network (MDN) - CSS</a></li>
        <li><a href="https://www.w3schools.com/css/" target="_blank">W3Schools - CSS Tutorial</a></li>
    </ul>

    <h2>Tehtävä</h2>
    <p>Kirjoita CSS-tiedosto, joka muuttaa HTML-elementin väriä ja fonttikokoa. Liitä CSS-tiedosto HTML-dokumenttiisi.</p>
    <pre>
        <code>
h1 {
    color: blue;
    font-size: 24px;
}
        </code>
    </pre>
    
    <p>Onnea opiskeluusi! Jos sinulla on kysyttävää, älä epäröi ottaa yhteyttä.</p>
</div>

<?php include 'footer.html'; ?> 
</body>
</html>
