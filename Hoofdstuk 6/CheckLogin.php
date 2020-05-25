<?php
/**
 * User: Valentin Böck
 * Date: 24-4-2020
 * Time: 12:40
 * File: Checklogin.php
 */
?>

<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "JNGO" => "654321",
    "Rosalie" => "bloemblaadjes",
    "V-Böck" => "Bot3000",
    "Bruhh" => "Bruhmoment"
);
?>

<?php
foreach($authUsers as $user => $password) {

    if ($_POST['username'] == $user && $_POST['password'] == $password) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
    } else{
        $message = "Ongeldige username/wachtwoord, probeer het nog eens.";
    }
}
include "Hoofdstuk6.1.php";

?>