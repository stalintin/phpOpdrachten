<?php
/**
 * User: valentin Böck
 * Date: 26-05-2020
 * Time: 19:00
 * File: Opdracht7.3.php
 */
?>

<?php
include "../Includes/Header.php"
?>

<?php
// Inladen functies bestand
include("function7.3.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
if (isset($_GET['inputText']) == false){

    $query = "SELECT * FROM joke";
}
else{
    $query = "SELECT * FROM joke WHERE joketext". "'%" . $_GET['inputText'] . "%'";
}
$jokes = executeQuery($query);


$aJokes = array();

// Resultaten rij voor rij ophalen
while ($row = $jokes->fetch(PDO::FETCH_ASSOC)) {
    $aJokes[] = $row;
    $counter = $row['id'];
}

?>


    <p><?php echo $query?></p>
    <form action="Opdracht7.3.php" method="GET">
        <label>Zoekterm:</label>
        <input name="inputText" type="text">
        <input type="submit" value="Zoeken">
    </form>
    <hr>
    <table>
        <tr>
            <th>Jokeid</th>
            <th>Joketext</th>
            <th>Jokeclou</th>
            <th>Jokedate</th>
        </tr>
        <?php
        for($i=0; $i<$counter; $i++) {
            echo "<tr><td>" . $aJokes[$i]['id'] . "</td><td>" . $aJokes[$i]['joketext'] . "</td><td>" .$aJokes[$i]['jokeclou'] . "</td><td>" . $aJokes[$i]['jokedate'] . "</td></tr>";
        }
        ?>

    </table>

<?php
include "../Includes/Footer.php"
?>