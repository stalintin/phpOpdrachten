<?php
/**
 * User: valentin bock
 * Date: 6-4-2020
 * Time: 11:07
 * File: Opdracht5.4.php
 */
?>

<?php
include "../Includes/Header.php"
?>
    <style>
        .groen{
            color: green;
        }
        .rood{
            color: red;
        }
    </style>
    <form action="Opdracht5.4.php" method="post">
        <label>Komt er een ambulance aan?</label>
        <input name="ambulanceComing" type="radio" value="ja">ja
        <input name="ambulanceComing" type="radio" value="nee">nee<br>

        <label>Stoplicht kleur?</label>
        <input name="trafficLightColor" type="radio" value="groen">Groen
        <input name="trafficLightColor" type="radio" value="oranje">Oranje
        <input name="trafficLightColor" type="radio" value="red">Rood<br>
        <input type="submit" name="submit" value="submit">
    </form>

<?php
//de action is hetzelfde script als het formulier, eerst testen of het formulier
//verzonden is
if (isset($_POST['submit'])) {
    echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
    //Een van de of beide radiobuttons is/zijn niet aangevinkt
    if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulanceComing'])) {
        echo "Of stoplicht kleur is onbekend of het is onbekend of de ambulance komt.";
    }
    else
    {
        $trafficLightColor = $_POST['trafficLightColor'];
        $ambulanceComing = $_POST['ambulanceComing'];
        echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een
ambulance aan.";
        //Bepalen of je wel of niet mag doorrijden
        if ($trafficLightColor == "groen" && $ambulanceComing == 'nee')
        {
            echo "<div class='groen box'>U mag doorrijden";
        }
        else
        {
            echo " <div class='rood box'>U moet stoppen";
        }
        echo "</div>";
    }
}
?>

<?php
include "../Includes/Footer.php"
?>