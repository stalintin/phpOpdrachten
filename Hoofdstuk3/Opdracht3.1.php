<?php
/**
 * User: valentin
 * Date: Datum
 * Time: Time
 * File: Opdracht3.1.php
 */?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../CSS/stylesheet.css" type="text/css" rel="stylesheet">

</head>
<body>
<header>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>
</header>
<div class="box">
    <?php
    $evenement = "<u>Elfstedentocht</u>";
    $eventfries = "<u>Alvestêdetocht</u>";
    $km = "<u>200</u>";
    $schaats = "<u>schaatstocht</u>";
    $natuur = "<u>natuurijs</u>";
    $verenigingsnaam = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $stad = "<u>Leeuwarden</u>";
    $provincie = "<u>Friesland</u>";
    $number = "<u>15</u>";
    $jaar = "<u>1909</u>";
    $verhaal = "De $evenement (Fries: $eventfries) is een $km
                kilometer lange $schaats over $natuur die wordt
                georganiseerd door de $verenigingsnaam. $stad, de hoofdstad van $provincie, is start- en
                aankomstplaats. De $evenement is inmiddels $number maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 1</h1>");
    echo ("<p>$verhaal</p>");

    $verhaal2 = "De " . $evenement .  " (Fries: " . $eventfries . ") is een " . $km . " kilometer lange " . $schaats . " over " . $natuur . " die wordt
                georganiseerd door de " . $verenigingsnaam .". " . $stad . ",  de hoofdstad van " . $provincie . ",  is start- en
                aankomstplaats. De " . $evenement . " is inmiddels " . $number . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 2</h1>");
    echo ("<p>$verhaal2</p>");
    ?>
</div>
</body>
</html>