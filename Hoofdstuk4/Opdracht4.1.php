<?php
    date_default_timezone_set("Europe/Amsterdam");
    $vandaag = date("d-m-Y H;i");

    echo "De datum en tijd in nederland is : $vandaag"
?>
<br>
<?php
    date_default_timezone_set("Asia/Tokyo");

    $vandaag = date("d-m-Y H:i");

    echo "De daatum en tijd in japan is nu : $vandaag"
?>
<br>
<?php
date_default_timezone_set("America/New_York");

$vandaag = date("d-m-Y H:i");

echo "De daatum en tijd in japan is nu : $vandaag"
?>
