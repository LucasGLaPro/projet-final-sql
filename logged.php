<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page test</title>
</head>
<body>
<?php
try{


   echo "selectionnez un mostre a mettre en favori."; 
    $MaBase = new PDO('mysql:host=localhost; dbname=projet-final-bdd; charset=utf8','lucas', 'lucas');
    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `monstre` ORDER BY Nom ASC");
    //echo "j'ai fait ".$ObjetResultatDeRequeteBrut->rowCount()." requête";
                echo "<form action='' method='post'> <select name='monstre'>";
                while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
                    echo "<option value='".$TableauDunTuple['idMonstre']."'>".$TableauDunTuple['Nom']."</option>";
                echo "</select>";
                echo "<br><input type='submit' name='Valider' />";



                if(isset($_POST["monstre"])) {
                    $basemonstre = $MaBase->query("SELECT * FROM `Monstre` WHERE idMonstre ='".$_POST['monstre']."'");
                    $basemonstre = $basemonstre->fetch();
                    //$ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `User`(`Favori`) VALUE('".$basemonstre["idMonstre"]."')"); 
                    $ObjetResultatDeRequeteBrut = $MaBase->query("UPDATE `user` SET `Favori` = '".$basemonstre["idMonstre"]."' WHERE `user`.`iduser` = 1;");
                    echo "Votre favori a ete ajouté"; 
                    echo "votre Monstre favori est:";
                    while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
                    echo $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT monstre.nom FROM monstre, user
                    WHERE
                        monstre.idMonstre = user.Favori
                    AND
                        user.iduser = 1");


                } 

                


}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
?>
</form>
</body>
</html>