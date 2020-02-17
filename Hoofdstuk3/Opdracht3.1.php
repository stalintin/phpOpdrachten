<?php
/**
 * User: valentin
 * Date: Datum
 * Time: Time
 * File: Opdracht3.1.php
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Pagina 1"; ?></title>
    <link href="../CSS/stylesheet.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<?php
    $event = "Elfstedentocht";
    $eventFries = "Alvestêdetocht";
    $afstand = "200";
    $beschrijving = "schaatstocht";
    $icetype = "natuurijs";
    $kvdfes = "Koningklijke Vereniging De Friesche Elf Steden";
    $City = "Leeuwarden";
    $Friesland = "Friesland";
    $timesheld = "15";
    $Year = "1909";
    $timesheldperyear = "1";
    $verhaal = "De $event (Fries: $eventFries) is een $afstand kilometer lange $beschrijving over $icetype die word georganiseerd door de $kvdfes. $City de hoofdstad van $Friesland, is start- en aankomstplaats. De $event"
?>
<button><a href="../index.php">Home</a></button>
</body>
</html>