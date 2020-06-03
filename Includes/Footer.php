</div>
<div class="box">
<?php
date_default_timezone_set("Europe/Amsterdam");
$uur = date("H");
$jaar = date("Y");
$moment ='';

if($uur >= 0 && $uur <= 5){
    $moment = 'Goedennacht';
}
elseif ($uur >= 5 && $uur < 12){
    $moment = 'Goedenochtend';
}
elseif($uur >= 12 && $uur <= 17){
    $moment = 'Goedenmiddag';
}
elseif ($uur >= 17 && $uur <= 0){
    $moment = 'Goedenavond';
}
echo $moment . ' bezoeker, &copy; Valentin Böck ' . $jaar;
?>

<?php

if (isset($_SESSION['username'])) {
    $bezoeker = $_SESSION['username']. "&nbsp;<a
href='../Hoofdstuk 6/LogOut.php'>Logout</a>";
}
else {
    $bezoeker = "onbekende bezoeker". "&nbsp;<a
href='../Hoofdstuk 6/Hoofdstuk6.1.php'>Login</a>";
}
echo  $bezoeker;

?>
</div>
</body>
</html>