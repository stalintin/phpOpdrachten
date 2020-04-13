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
        <link href="CSS/stylesheet.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
    <aside>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="Hoofdstuk2/Opdracht2.1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk2/Opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="Hoofdstuk3/Opdracht3.1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk3/Opdracht3.2.php">Opdracht 3.2</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk3/Opdracht3.3.php">Opdracht 3.3</a>
                    </li>

                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="Hoofdstuk4/Opdracht4.1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk4/Opdracht4.2.php">Opdracht 4.2</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk4/Opdracht4.3.php">Opdracht 4.3</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk4/opdracht4.4.php">Opdracht 4.4</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="Hoofdstuk5/Opdracht5.1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk5/Opdracht5.2.php">Opdracht 5.2</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk5/">Opdracht 5.3</a>
                    </li>
                    <li>
                        <a href="Hoofdstuk5/">Opdracht 5.4</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
    </main>
    </body>
</html>

<?php
include "Includes/Footer.php"
?>