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
        $text1 = "Hallo";
        $text2 = "een makkelijke taal";
        $text3 = "toch zo'n makkelijke taal";
        $text4 = "wat is";
        $text5 = "PHP";
        $text6 = "Nooit gedacht dat";
        $text7 = "De instalatie is best ingewikkeld";
        $text8 = "Fijn";
        $text9 = "?";
        $text10 = ".";
        $text11 = ",";
        $text12 = "<br>";
        $text13 = "is";
        $text14 = "Vind je niet";
        $text15 = "toch";
    ?>
<h1>Taak 2</h1>
<?php
echo ("<p> $text1  $text4 $text5  $text15 $text2$text10  $text12  $text7  $text8  $text15$text9  $text12  $text6  $text5  $text3 $text13$text10 </p>")
?>
<h1>Taak 2</h1>
<?php
echo ("<p>$text1 $text8 $text15 dat $text5 $text3 $text13$text10 $text12 $text7 $text14 $text9 $text12</p>")
?>

<button><a href="../index.php">Home</a></button>


</body>
</html>
