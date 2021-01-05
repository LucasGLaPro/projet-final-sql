<?php
//fonction ajout
function ajout($User, $Mdp, $fav)
{
    try{

        $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `User`(`Nom`, `Mdp`, `Favori`) VALUE('".$User."','".$Mdp."','".$fav."')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}
?>

<?php 
//fonction connexion
function conexion($User, $Mdp){echo "eheh";
try{

    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');
    
    if(isset($User)) {
    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `User` WHERE `Nom`='".$User."' AND `Mdp` = '".$Mdp."'"); 
            if($ObjetResultatDeRequeteBrut->rowCount()>=1){
                $num = 1;
                return $num;
                echo $num;
            }
            else{
                echo"Echec de connection "; 
            }
    }

}catch(Exception $e){

    echo "J'ai eu un problème erreur dans la fonction:".$e->getMessage();
}}
//fonction ajout des armes
function ajoutArme($NomArme, $Atk, $Afinite, $Elements, $Sceau)
{
    try{

        $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');
        

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `Arme`(`Nom`, `Attaque`, `Afinité`, `Element`, `Sceau_des_anciens`) VALUES ('$NomArme','$Atk','$Afinite','$Elements','$Sceau')");        
        
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}


//fonction ajout des talents
function ajoutTalent($NomTalent, $Boost)
{
    try{

        $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `Talent`(`Nom`, `Boost`) VALUES ('$NomTalent','$Boost')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}

//fonction ajouts des monstre
function ajoutMonstre($NomMonstre, $HP)
{
    try{

        $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `Monstre`(`NomM`, `Vie`) VALUES ('$NomMonstre','$HP')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}
?>