<?php
/**
 * User: Naam
 * Date: Datum
 * Time: Time
 * File: index.php
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Pagina 1"; ?></title>
    <link href="../CSS/stylesheet.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<?php
date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is: $vandaag";
?>
<br>
<br>
<?php
date_default_timezone_set("Asia/Tokyo");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in Japan is nu : $vandaag";
?>
<br>
<br>
<?php
date_default_timezone_set("America/New_York");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in New York is nu : $vandaag";
?>
<br>
<br>
<button><a href="../index.php">Home</a></button>
</body>
</html>