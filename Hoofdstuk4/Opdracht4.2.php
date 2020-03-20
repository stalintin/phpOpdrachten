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
$courseName = "Nederlands";
$teacherName = "";
 //ik maak hier 2 variabelen aan voor de switch case en ik zeg iedee keer dat als de switcht dan krijg je de de volgende te zien in het rijtje

switch ($courseName)
{
    case    "PHP":
        $teacherName = "Meneer Saebu";
        break;

    case    "Nederlands":
        $teacherName = "Meneer van de Ende";
        break;

    case    "Engels":
        $teacherName = "Meneer Giessen";
        break;

    case    "SQL":
        $teacherName = "Meneer van de Wetering";
        break;

    case    "Javascript":
        $teacherName = "Meneer Evers";
        break;

    case    "ASP":
        $teacherName = "Meneer van Meer";
        break;

    case    "ComputerTekenen":
        $teacherName = "Meneer van de Berg";
        break;

    case    "Burgerschap":
        $teacherName = "Mevrouw de Ruiter";
        break;

    case    "DigitaleVaardigheden":
        $teacherName = "Mevrouw Pielage";
        break;

    case    "Modelleren":
        $teacherName = "Meneer van Bijnen";
        break;
}

echo ("Voor het vak " . $courseName . " heb je de docent: " . $teacherName . ".");
?>
<button><a href="../index.php">Home</a></button>
</body>
</html>