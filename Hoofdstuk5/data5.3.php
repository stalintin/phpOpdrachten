<?php
<?php
/**
 * User: valentin Böck
 * Date: 30-3-2020
 * Time: 10:36
 * File: data5.3.php
 */
?>

    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <title>

        </title>

        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="utf-8">

    </head>
<body>
    <style>
        table, tr, th, td{
            border: 1px solid black;
        }
    </style>
    <h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>
<div class="box">

<?php
include "../../Includes/Function.php"
?>
    <table>
        <tr>
            <th>Vraag</th>
            <th>Antwoord</th>
        </tr>
        <tr>
            <th>Naam</th>
            <td><?php echo $_POST["First-LastName"]; ?></td>
        </tr>
        <tr>
            <th>Leeftijd</th>
            <td><?php echo $_POST["Age"]; ?></td>
        </tr>
        <tr>
            <th>Gemeente</th>
            <td><?php echo $_POST["Township"]; ?></td>
        </tr>
        <tr>
            <th>Inwoners</th>
            <td><?php echo $_POST["citizens"]; ?></td>
        </tr>
        <tr>
            <th>Aantal besmet</th>
            <td><?php echo $_POST["infected"]; ?></td>
        </tr>
        <tr>
            <th>Kennissen besmet</th>
            <td><?php echo $_POST["Question"]; ?></td>
        </tr>
        <tr>
            <th colspan="2">De kans is n realiteit groter omdat je via je eigen netwerk besmet kan raken.</th>
        </tr>
        <tr>
            <th>Kans per ontmoeting op besmetting</th>
            <td><?php echoKans() ?>%</td>
        </tr>
        <tr>
            <th>Kans is 1 op</th>
            <td><?php
                $kans1op = getKans1Op();
                echo $kans1op;

                ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <?php
                $vergelijkOorzaken = vergelijkOorzaken ($kans1op);
                echo $vergelijkOorzaken;
                ?>
            </td>
        </tr>
    </table>

<?php
include "../Includes/Footer.php"
?>