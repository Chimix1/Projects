<!DOCTYPE html>
<html lang="fi">
<?php
session_start(); 
$title = "JavaScript Kurssi"; 
include 'headers.php'; 
?>
<body>
<?php include 'navigointi.php'; ?>  

<div class="content container mt-6">
    <h1 class="text-left">JavaScript Kurssi</h1>
    <p class="text-left">
        Tervetuloa JavaScript-kurssille! Tässä kurssissa opit JavaScriptin perusteet ja kehität taitojasi dynaamisten verkkosivujen luomisessa.
    </p>

    <h2>Kurssin sisältö</h2>
    <ul>
        <li><strong>Johdanto JavaScriptiin</strong>
            <p>JavaScript on ohjelmointikieli, jota käytetään laajasti verkkosivujen kehittämisessä. Se mahdollistaa interaktiivisten elementtien lisäämisen sivustolle.</p>
        </li>
        <li><strong>Muuttujat ja tietotyypit</strong>
            <p>JavaScriptissä voit määrittää muuttujia useilla eri tietotyypeillä, kuten numeroilla, merkkijonoilla ja taulukoilla.</p>
        </li>
        <li><strong>Funktiot</strong>
            <p>Funktiot ovat uudelleenkäytettäviä koodikappaleita, joita voidaan kutsua useaan kertaan. Opit kuinka määritellä ja kutsua funktioita.</p>
        </li>
        <li><strong>DOM-manipulointi</strong>
            <p>Opit kuinka manipuloida HTML-dokumenttia JavaScriptin avulla ja tehdä verkkosivustasi dynaamisemman.</p>
        </li>
        <li><strong>Event-handling</strong>
            <p>JavaScript mahdollistaa käyttäjän syötteen käsittelyn, kuten hiiren klikkaukset ja näppäinpainallukset.</p>
        </li>
        <li><strong>Asynkroninen ohjelmointi</strong>
            <p>Ymmärrä asynkronisen ohjelmoinnin perusperiaatteet, mukaan lukien Promises ja async/await.</p>
        </li>
    </ul>

    <h2>Resurssit</h2>
    <p>Seuraavat linkit auttavat sinua syventämään JavaScript-taitojasi:</p>
    <ul>
        <li><a href="https://developer.mozilla.org/fi/docs/Web/JavaScript" target="_blank">Mozilla Developer Network (MDN) - JavaScript</a></li>
        <li><a href="https://www.w3schools.com/js/" target="_blank">W3Schools - JavaScript Tutorial</a></li>
        <li><a href="https://www.codecademy.com/learn/introduction-to-javascript" target="_blank">Codecademy - Learn JavaScript</a></li>
    </ul>

    <h2>Tehtävä</h2>
    <p>Kirjoita JavaScript-funktio, joka ottaa kaksi parametria ja palauttaa niiden summan. Kokeile funktiosi selaimessasi.</p>
    <pre>
        <code>
function sum(a, b) {
    return a + b;
}

console.log(sum(5, 10)); // Tulostaa 15
        </code>
    </pre>
    
    <p>Onnea opiskeluusi! Jos sinulla on kysyttävää, älä epäröi ottaa yhteyttä.</p>
</div>

<?php include 'footer.html'; ?> 
</body>
</html>
