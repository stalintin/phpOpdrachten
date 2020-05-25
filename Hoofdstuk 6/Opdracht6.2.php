<?php
/**
 * User: Valentin Böck
 * Date: 29-04-2020
 * Time: 10:10
 * File: Opdracht6.2
 */
?>

<?php
include "../Includes/Header.php"
?>

<style>
    img{
        width:200px;
    }
    </style>

<form id="GameFrame" method="get" action="Opdracht6.2.php">
    <div class="float">
        <input type="radio" onchange="document.getElementById('GameFrame').submit();"   naam="keuze" value="steed">steen
        <img src="steen.jpg">
    </div>
    <div>

    </div>
</form>