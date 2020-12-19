<?php
function ajout($User, $Mdp)
{
    try{

        $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','greg', 'greg');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `User`(`Nom`, `Mdp`) VALUE('".$User."','".$Mdp."')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}
?>

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