<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test inclusion de page</title>
</head>
<body>
<!-- L'en-tête -->

    <?php
include('header.php');
    ?>


<!-- Le menu -->
<?php
include('menu.php');
?>

<!-- Le corps -->
<main id="corps">
    <h1>CORPS DE MON SITE</h1>
    <p>Bienvenue!<br>
        Une petite mise en oeuvre d'inclusions de fichiers header,menu,index,footer. Pas de mise en page pour le moment! </p>
</main>
<!-- Le pied de page -->
<?php
include('footer.php');
?>
</body>
</html>