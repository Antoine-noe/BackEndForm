<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
include ('Fonctions.php');
?>
<form method="get" action="forcont.php">
    <label for="nbverbe">Verbe 1 : </label>
    <input type="number" name="nbverbe" size="12" id="nbverbe">
    <label for="verbe">Verbe 2 : </label>
    <input type="text" name="verbe" size="12" id="verbe">
    <input type="submit" value="OK">
</form>
</body>
</html>

