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
</div>
</body>
</html>