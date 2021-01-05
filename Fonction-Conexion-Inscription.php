<?php
function ajout($User, $Mdp, $fav)
{
    try{

        $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `User`(`Nom`, `Mdp`, `Favori`) VALUE('".$User."','".$Mdp."','".$fav."')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}
?>

<?php 
function conexion($User, $Mdp){echo "eheh";
try{

    $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');
    
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
function ajoutArme($NomArme, $Atk, $Afinite, $Elements, $Sceau)
{
    try{

        $MaBase = new PDO('mysql:host=localhost; dbname=projet-final-bdd; charset=utf8','lucas', 'lucas');
        

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `arme`(`Nom`, `Attaque`, `Afinité`, `Element`, `Sceau_des_anciens`) VALUES ('$NomArme','$Atk','$Afinite','$Elements','$Sceau')");        
        
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}



function ajoutTalent($NomTalent, $Boost)
{
    try{

        $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `talent`(`Nom`, `Boost`) VALUES ('$NomTalent','$Boost')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}


function ajoutMonstre($NomMonstre, $HP)
{
    try{

        $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

        $ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `monstre`(`NomM`, `Vie`) VALUES ('$NomMonstre','$HP')");        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}
?>