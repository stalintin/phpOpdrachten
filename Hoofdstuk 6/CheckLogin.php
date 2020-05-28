<?php
/**
 * User: Valentin Böck
 * Date: 24-4-2020
 * Time: 12:40
 * File: Checklogin.php
 */
?>

<?php
 session_start();
$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "JNGO" => "654321",
    "Rosalie" => "bloemblaadjes",
    "V-Böck" => "Bot3000",
    "Bruhh" => "Bruhmoment"
);


$faultyMsg = "";
foreach($authUsers as $user => $password) {
if ($_POST['username'] == $user && $_POST['password'] == $password) {
$_SESSION['username'] = $_POST['username'];
header('location: welcome.php');
}
}

$faultyMsg = "faulty username or password try again";

header('location: Hoofdstuk6.1.php');

?>