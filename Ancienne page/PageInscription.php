<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include "Fonction-Bdd.php" ?>

    <form action="" method="post">
    Utilisateur:<input type="text" name="Nom" />
    Mot de passe:<input type="text" name="Mdp" />
    <input type="submit" value="Valider" name="send"/>
    </form>

<?php

    if(isset($_POST["send"])) {
    ajout($_POST['Nom'], $_POST['Mdp']);
    echo("Vous êtes inscrit");
    }
    else{
        echo("");
    }



    



?>
</body>
</html>