<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="get" action="forfunc.php">
    <label for="nom">Nom :</label>
    <input type="text" maxlength="20" minlength="1" id="nom" name="nom" required>
    <br>
    <label for="prenom">Prenom :</label>
    <input type="text" maxlength="20" minlength="1" id="prenom" name="prenom" required>
    <br>
    <label for="jour">Jour :</label>
    <select size="1" id="jour" name="jour" required>
        <option value=""></option>
        <?php
        include ('formcontrol.php');
        affichlistJour();
        ?>
    </select>

    <label for="mois">Mois :</label>
    <select size="1" id="mois" name="mois" required>
        <option value=""></option>
        <?php
        affichlistMois();
        ?>
    </select>

    <label for="annee">Année :</label>
    <select size="1" id="jour" name="annee" required>
        <option value=""></option>
        <?php
        affichlistAnnee();
        ?>
    </select>

    <br>
    <label for="sexe">Sexe :</label>
    <input type="radio" name="sexe" value="homme" id="sexe" required>Homme
    <input type="radio" name="sexe" value="femme" id="sexe" required>Femme
    <br>
    <label for="adresse">Adresse :</label>
    <input type="text" name="adresse" id="adresse" minlength="1" maxlength="100" required>
    <br>
    <label for="cp">Code postal :</label>
    <input type="text" maxlength="5" id="cp" name="cp" required>
    <br>
    <label for="ville">Ville :</label>
    <input type="text" maxlength="20" id="ville" name="ville" required>
    <br>
    <input type="submit" value="OK">
</form>

</body>
</html>