<?php
/**
 * User: Valemton Böck
 * Date: 25-3-2020
 * Time: 11:21
 * File: Opdracht_5.2.php
 */
?>

<?php
include "../Includes/Header.php"
?>

    <h1>Uitschrijfformulier KW1C</h1>
    <hr>
    <form action="Opdracht_5.2/uitschrijving.php" method="get">
        <label>Voor en achternaam</label>
        <input name="Voor-Achternaam" type="text"><br>

        <label>Studentennummer</label>
        <input name="Studentennummer" type=number><br>

        <label>Datum van uitschrijving</label>
        <input name="DatumUitschrijving" type="text"><br>

        <label>Reden van uitschrijving</label>
        <select name="Reden">
            <option value="Geen leuke opleiding">Geen leuke opleiding</option>
            <option value="Te moeilijk">Te moeilijk</option>
            <option value="Niks van berijpen">Niks van berijpen</option>
            <option value="Switchen">Switchen</option>
        </select><br>

        <label>Leerjaar</label><br>
        <input name="Leerjaar" type="radio" value="1e leerjaar">1e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="2e leerjaar">2e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="3e leerjaar">3e leerjaar</input><br>

        <input name="Aanmelden" type="checkbox" value="ja">Ik wil me aanmeldden bij de succesklas<br>
        <input name="Verwijder" type="checkbox" value="ja">Verwijder mijn gegevens uit het systeem<br>
        <label>Geef hieronder de reden van je uitschrijving op</label><br>
        <input name="Bericht" type="text"><br>

        <input type="submit" name="verzenden" value="verzenden">
    </form>


<?php

?>


<?php
include "../Includes/Footer.php"
?>