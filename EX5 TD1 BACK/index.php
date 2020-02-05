<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="formcont.php">
    <label for="nom">Nom : </label>
    <select size="1" id="nom" name="nom">
        <option value=""></option>
        <option value="Dupont">Dupont</option>
        <option value="Durant">Durant</option>
        <option value="Martin">Martin</option>
        <option value="Petit">Petit</option>
    </select>
    <br>
    <br>
    <label for="formation">Formation : </label>
    <select size="1" id="formation" name="formation">
        <option value=""></option>
        <?php
        include('back.php');
        affichlist()
        ?>
    </select>
    <br>
    <br>
    <label for="heure">Heures de formation souhaitées : </label>
    <input type="number" name="heure" size="12" id="heure">
    <br>
    <br>
    <input type="submit" value="OK" name="submit">
    <br>
    <br>
</form>

       <?php
        include ('formcont.php');



echo '<br>';

?>
</body>
</html>