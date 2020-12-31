<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Page-Conexion-Inscription_Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" Conecttent="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
       

        
        if (session_status() == PHP_SESSION_ACTIVE){
            echo "okay";
        }
        else{?>
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
            </div>
            </section>    


                <?php
                $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');
               if(isset($_POST["User"])) {
                $_POST["User"] = $_SESSION["User"];
                    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `User` WHERE `Nom`='".$_SESSION["User"]."' AND `Mdp` = '".$_SESSION["Mdp"]."'"); 
                    if($ObjetResultatDeRequeteBrut->rowCount()>=1){
                        session_start(); 
                    }
                    else{
                        echo"Echec de connection "; 
                    }
                }
            }
            
    ?>
   
</body>
</html>