<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

<form method="post">

Utilisateur:<input type="text" name="User" />
Mot de passe:<input type="text" name="Mdp" />
<p><input type="submit" value="Valider" /></p></form>

<?php 

try{

    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','greg', 'greg');
    
    if(isset($_POST["User"])) {
    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `User` WHERE `Nom`='".$_POST["User"]."' AND `Mdp` = '".$_POST["Mdp"]."'"); 
            if($ObjetResultatDeRequeteBrut->rowCount()>=1){
                echo"Vous ête connecté";
            }
            else{
                echo"Echec de connection "; 
            }
    }

}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
    
?>
</body>
</html>