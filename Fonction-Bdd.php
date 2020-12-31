<?php
function ajout($User, $Mdp)
{
    try{

        $MaBase = new PDO('mysql:host=localhost; dbname=projet-final-bdd; charset=utf8','lucas', 'lucas');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `User`(`Nom`, `Mdp`) VALUE('".$User."','".$Mdp."')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}
?>

<?php

function conexion($User, $Mdp){

try{

    $MaBase = new PDO('mysql:host=localhost; dbname=projet-final-bdd; charset=utf8','lucas', 'lucas');
    
    if(isset($_POST["User"])) {
    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `User` WHERE `Nom`='".$_POST["User"]."' AND `Mdp` = '".$_POST["Mdp"]."'"); 
            if($ObjetResultatDeRequeteBrut->rowCount()>=1){
                return 1;
                echo "hehe";
            }
            else{
                echo"Echec de connection "; 
            }
    }

}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
}
    
?>