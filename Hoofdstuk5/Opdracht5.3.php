<?php
/**
 * User: valentin böck
 * Date: 30-3-2020
 * Time: 10:36
 * File: Opdracht_5.3.php
 */
?>

<?php
include "../Includes/Header.php"
?>
    <form action="data5.3.php" method="post">

        <label>Corona enquete:</label><br>
        <hr>
        <label>Wat is je naam:</label><input name="First-LastName" type="text"><br>
        <label>Wat is je leeftijd:</label><input name="Age" type="number"><br>
        <label>Gemeente:</label>
        <select name="Township">
            <option value="Den Bosch">Den Bosch</option>
            <option value="Tilburg">Tilburg</option>
            <option value="Someren">Someren</option>
            <option value="Hilvarenbeek">Hilvarenbeek</option>
        </select><br>
        <label>Aantal inwoners gemeente:</label><input name="citizens" type="number"><br>
        <label>Ken je mensen die besmet zijn in je woonplaats?</label>
        <input name="Question" type="radio" value="Ja">Ja</input>
        <input name="Question" type="radio" value="Nee">Nee</input><br>
        <label>Aantal mensen besmet in je gemeente?*</label><input name="infected" type="number"><br>
        <input type="submit" name="verzenden" value="verzenden"><br>
        <label>* Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente">site RIVM</a></label>

    </form>
<?php
?>


<?php
include "../Includes/Footer.php"
?>