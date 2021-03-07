<link rel="stylesheet" href="style.css">
<?php
function fav($User){
try{


    
    $MaBase = new PDO('mysql:host=localhost; dbname=projet-final-bdd; charset=utf8','lucas', 'lucas');
    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `monstre` ORDER BY NomM ASC");
    //echo "j'ai fait ".$ObjetResultatDeRequeteBrut->rowCount()." requête";
                
                $nommonstre = $MaBase->query("SELECT * FROM Monstre, user WHERE monstre.idMonstre = user.Favori AND user.iduser = $User");
                $nommonstre = $nommonstre->fetch();
                $nomo = $nommonstre["NomM"];
                echo "<div class='selctalent' align='center'>".'<img src="images/'.$nomo.'.png" alt="" />';
                echo "<br>"."<h4>votre Monstre favori est: ";
                echo $nommonstre["NomM"].'</h4></div>';
                echo "<br>"."<h4>Changez votre favori.</h4>";
                
                echo "<form action='' method='post'> <select name='monstre'>";
                while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
                    echo "<option value='".$TableauDunTuple['idMonstre']."'>".$TableauDunTuple['NomM']."</option>";
                echo "</select>";
                echo "<br><input type='submit' name='Valider' />";



                if(isset($_POST["monstre"])) {
                    $basemonstre = $MaBase->query("SELECT * FROM `Monstre` WHERE idMonstre ='".$_POST['monstre']."'");
                    $basemonstre = $basemonstre->fetch();
                    //$ObjetResultatDeRequeteBrut = $MaBase->query("INSERT INTO `User`(`Favori`) VALUE('".$basemonstre["idMonstre"]."')"); 
                    $ObjetResultatDeRequeteBrut = $MaBase->query("UPDATE `user` SET `Favori` = '".$basemonstre["idMonstre"]."' WHERE `user`.`iduser` = $User;");
                    echo "Votre favori a ete ajouté"; 
                    echo "<br>"."votre Monstre favori est:";
                    $nommonstre = $MaBase->query("SELECT * FROM Monstre, user WHERE monstre.idMonstre = user.Favori AND user.iduser = $User");
                    $nommonstre = $nommonstre->fetch();
                    echo $nommonstre["NomM"];
                    header("Refresh:0");

                } 

                


}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
?>
</form>
</body>
</html>
<?php } ?>