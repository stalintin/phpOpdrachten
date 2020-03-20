<?php
/**
 * User: valentin bock
 * Date: 7-3-2020
 * Time: 12:24
 * File: Opdracht4.4.php
 */
?>

<?php
include "../includes/Header.php"
?>

<?php
echo "<h1>oefening 4.4</h1>";
// Vandaag
$nu = strtotime("now");
$datumVandaag = date('d-m-y', $nu);

// Dag van de week 0-7
$datumDag = date('w', $nu);
echo "Vandaag is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo "<br>";
$dagenWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
echo "Vandaag is het ".$dagenWeek[$datumDag] . " en datum is ". $datumVandaag;

// Morgen
$nu = strtotime('+1 days');
$datumVandaag = date('d-m-y', $nu);
$datumDag = date('w',$nu);

echo "<br>Morgen is het de ".$datumDag. " dag en de datum is ".$datumVandaag;
echo"<br>";
echo "Morgen is het ".$dagenWeek[$datumDag]. " en de datum is ". $datumVandaag;
?>

<?php

echo "<br>";
echo "<br>";

echo "<h1>Opdracht 4.4</h1>";

$dagenVanDeWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"); //Dit is een array met alle dagen van de week
$test = ""; //Dit is een lege string
for($x=0; $x <8; $x++) {
    $dagnr = date('w', strtotime("+$x days")); //Dit laat de nummer van de dag zien van een week
    $eendatum = date('d-m-Y', strtotime("+$x days")); //Dit laat de datums zien voor de week
    $test .= "Dag $dagnr is {$dagenVanDeWeek[$dagnr]} $eendatum <br>"; //Hierin laat laat ik zien wat er in de lege string moet staan
}//Dit is een for loop om alles opnieuw af te spelen
echo $test //Dit zorgt er voor dat het word laten zien op het scherm
?>


<?php
include "../includes/Footer.php"
?>