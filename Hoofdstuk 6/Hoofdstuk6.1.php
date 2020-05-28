<?php
/**
 * User: Valentin Böck
 * Date: 24-4-2020
 * Time: 12:18
 * File: Opdracht_6.1.php
 */
?>

<?php
include "../Includes/Header.php"
?>

<form action="CheckLogin.php" method="post">
    <label>Username: </label>
    <label>
        <input type="text" name="username">
    </label><br>
    <label>Password: </label>
    <label>
        <input type="password" name="password">
    </label><br>
    <input type="submit" value="Submit">
</form>


<?php
if (isset($faultyMsg))
{
    echo $faultyMsg;
}
?>


<?php
include "../Includes/Footer.php"
?>
