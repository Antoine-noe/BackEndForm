<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="get">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" size="12" id="nom">
    <br>
    <label for="prenom">Prénom : </label>
    <input type="text" name="prenom" size="12" id="prenom">
<br>
    <label for="age">Age : </label>
    <input type="number" name="age" size="12" id="age">
<br>
    <label class="form_col" for="pwd2">Mot de passe (confirmation) :</label>
    <input name="pwd2" id="pwd2" type="password" />

    <input type="button" id="voir2" value="voir">

    <input type="submit" value="OK" name="submit">

</form>


<?php



if(isset($_GET['prenom'],$_GET['nom'],$_GET['age'])){


    $prenoms = $_GET['prenom'];
    $noms = $_GET['nom'];
    $dates = $_GET['age'];
    include('control.php');

if(empty($prenoms)===TRUE)
{
    echo "Prenom vide.".'<br>';
}
if(empty($noms)===TRUE)
{
    echo "Nom vide.".'<br>';
}
if(empty($dates)===TRUE)
{
    echo "Age vide.".'<br>';
}else{
    if($dates<18)
    {
        echo "Vous êtes mineur.";
        echo '<br>';
    }else{
        echo "Vous êtes majeur";
        echo '<br>';
    }
    }
echo '<br>';
if((empty($date)!==TRUE)||(empty($nom)!==TRUE)||(empty($prenom)!==TRUE)||(PWD ($pwd, $comparaison)===TRUE))
{
    header('location: MDPCORRECT.html');

}
}
echo '<br>';
/*}*/
?>
</body>
<script src="script.js"></script>
</html>

