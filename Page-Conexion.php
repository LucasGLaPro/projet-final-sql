<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Page-Conexion-Inscription_Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" Conecttent="width=device-width, initial-scale=1.0">
</head>
<body>

  
          
        <section class="login">
        <div>
            <form method="post">
            Connexion:  
            Utilisateur:<input type="text" name="User" />
            Mot de passe:<input type="password" name="Mdp" />
            <input class="Valide" type="submit" value="Valider" />
            <h1><a href="Page-Inscription.php" >Inscription</a>
            <a href="index.php" >Menu Principale</a></h1>
            </form>

    <?php
    include "Fonction-Conexion-Inscription.php";
    if(isset($_POST["Nom"])) 
    {
        conexion($_POST["User"], $_POST["Mdp"]);
    }


    ?>
        
    </div>
    </section>    


</body>
</html>