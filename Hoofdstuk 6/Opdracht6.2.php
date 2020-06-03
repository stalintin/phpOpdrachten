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

<form id="gameFrm" method="get" action="Opdracht6.2.php">
    <div class="float">
        <label>
        <input type="radio" onchange="document.getElementById('gameFrm').submit();"   name="keuze" value="steen">steen
        </label>
        <img src="images/steen.jpg" alt="foto">
    </div>
    <div class="float">
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">Papier
        <img src="images/papier.jpg" alt="">
    </div>
    <div class="float">
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">Schaar
        <img src="images/shaar.jpg" alt="">
    </div>
</form>

<?php
//als je de sessie nog niet hebt aan gemaakt moet je hem aan maken en initialiseren.
    if (isset($_SESSION['computer'])==false) {
        $_SESSION['computer'] = 0;
        $_SESSION['player'] = 0;
    }
    if (isset($_GET['keuze'])) {
        echo "Jij koos: <img src='../Hoofdstuk%206/images/{$_GET['keuze']}.jpg'> {$_GET['keuze']} <br>";
        $persoonkeuze = $_GET['keuze'];

        $opties = array("steen","papier","schaar");
        $computerkeuzegetal = rand(0,2);
        $computerkeuze = $opties[$computerkeuzegetal];
        echo "&nbsp;&nbsp;De computer heeft gekozen: <img src='../Hoofdstuk%206/images/{$computerkeuze}.jpg'> $computerkeuze <br>";



    //schaar wint van papier
    if ($computerkeuze == 'schaar' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'schaar' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }
    //steen wint van schaar
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'schaar'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'schaar'){
        $_SESSION['player'] +=1;
    }
    //papier wint van steen
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }

}

echo 'De stand is: <br>';
echo $_SESSION['computer'] . ' voor de computer <br>';
echo $_SESSION['player'] . ' voor jou <br>';

if($_SESSION['computer'] == 5){
    echo 'The winner is the computer';

    unset($_SESSION['computer']);
    unset($_SESSION['player']);

}
elseif($_SESSION['player'] == 5){
    echo 'The winner is the player';

    unset($_SESSION['computer']);
    unset($_SESSION['player']);
}


?>
<?php
include "../Includes/Footer.php"
?>
