<?php
// index.php

// Einbinden des Headers
include 'header.php';
?>

<main>
    <h1>Willkommen auf meiner PHP-Website</h1>
    <p>Dies ist eine einfache PHP-basierte Webseite.</p>
</main>

<?php
// Einbinden des Footers
include 'footer.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meine PHP-Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="#">Über uns</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
    </header>
<footer>
    <p>&copy; <?php echo date("Y"); ?> Meine PHP-Website. Alle Rechte vorbehalten.</p>
</footer>
</body>
</html>
