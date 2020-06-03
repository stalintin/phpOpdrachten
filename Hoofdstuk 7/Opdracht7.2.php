<?php
/**
 * User: Valentin Böck
 * Date: 18-5-2020
 * Time: 11:18
 * File: Opdracht7.1.php
 */
?>
<?php
 include "../Includes/Header.php"
?>
<?php
try //de code in het try block is de enige code die wordt uitgevoerd
// als deze code succesvol wordt uitgevoerd
{
$pdo = new PDO("odbc:odbc2sqlserver");
echo "database connectie gelukt <br><br>";
} // de code in het catch blok wordt alleen uitgevoerd als er een fout
// optreedt in de code in het try block
catch (PDOException $e)
{
echo "<h1>Database error:</h1>";
echo $e->getMessage();
die();
}

?>
<?php
// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
    $counter = $row['id'];
}

?>

<table>
    <tr>
        <th>ID</th>
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
