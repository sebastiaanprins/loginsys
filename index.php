<HTML>
<form method="POST">
    <input name="voornaam" placeholder="Voornaam.."><br>
    <input name="achternaam" placeholder="Achternaam.."><br><br>
    <input type="submit" value="Verzenden">
</form>


<?php

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];

echo $voornaam . " " . $achternaam;





?>