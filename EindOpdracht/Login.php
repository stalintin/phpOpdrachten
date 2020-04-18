<?php
/**
 * User: valentin böck
 * Date: 18-4-2020
 * Time: 11:21
 * File: Eindopdracht
 */

include  "../Includes/Variables.php";
$Opdracht = "login.php";
include  "../Includes/Header.php";
?>
        <h3>Login Formulier Bergheen</h3>
        <div class="well well-lg">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                UserName: <input type="text" name="Username">
                <span class="error">* <?php echo $UsernameErr;?></span>
                <br>
                Password:
                <input type="password" name="password">
                <span class="error">* <?php echo $PasswordErr;?></span>
                <br>
                <input type="submit" name ="verzend" value="verzend">
            </form>
        </div>
        <h3>Reactie op ingevoerde waardes</h3>
        <div class="well well-lg">
            <?php
                include "script.php";
            ?>
        </div>
<?php
include "../Includes/Footer.php"
?>
