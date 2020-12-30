<?php
//include "Fonction-Bdd.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="haut">
    <span>MH Calculator Online</span>
        <div class="hautd">
        
            <div class="example" align='center'>
                <a href="Page-Conexion.php">
                    <img class="co" src="co.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="test">

        <?php
try{

    $MaBase = new PDO('mysql:host=localhost; dbname=projet-final-bdd; charset=utf8','lucas', 'lucas');

    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `Arme` ORDER BY Nom ASC");
    //echo "j'ai fait ".$ObjetResultatDeRequeteBrut->rowCount()." requête";

    ?>
        <!--1ere division-->
        <div class="conteneur">
            
            <div>
                <div class="selecarme">
                    <p><img src="LogoArme.png" alt=""></p>
                    <?php

                        echo "<form action='' method='post'> <select name='Weapons'>";
                        while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
                            echo "<option value='".$TableauDunTuple['idArme']."'>".$TableauDunTuple['Nom']."</option>";
                        echo "</select>";
                    ?>
                </div>
            </div>
                
            <div>
                <!--2eme division-->
                <div class="selctalent" align="center">
                    <p><img src="LogoJoyaux.png" alt=""></p>

                    <?php
                        $ObjetResultatDeRequeteBrut2 = $MaBase->query("SELECT * FROM `Talent` ORDER BY Nom ASC");
                        //while($TableauDunTuple2 = $ObjetResultatDeRequeteBrut2->fetch())
                            //echo "<input type='checkbox' name='talent1'>";
                            //echo"<label for='talent1'>$TableauDunTuple2['Nom']</label>";




                        echo "<select multiple name='Talent[]'>";
                        while($TableauDunTuple2 = $ObjetResultatDeRequeteBrut2->fetch())
                            echo "<option selected value='".$TableauDunTuple2['idTalent']."'>".$TableauDunTuple2['Nom']."</option>";
                        echo "</select>";
                    ?>
                </div>
            </div>

            <div>

                <!--3eme division-->
                <div class="selcmonstre">
                    <p><img src="LogoMonstre.png" alt=""></p>

                    <?php
                        $ObjetResultatDeRequeteBrut3 = $MaBase->query("SELECT * FROM `Monstre` ORDER BY Nom ASC");
                        echo "<select name='monstre'>";
                        while($TableauDunTuple3 = $ObjetResultatDeRequeteBrut3->fetch())
                            echo "<option value='".$TableauDunTuple3['idMonstre']."'>".$TableauDunTuple3['Nom']."</option>";
                          echo "</select>";
                          
                    ?>
                </div>
            </div>
                        


     




<?php

}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
?>
    </div>
    <?php echo "<br><input type='submit' value='Combat!' ></form>";

if(isset($_POST["monstre"])) {
    //echo"OK";
    $talents = join(",",$_POST['Talent']);
    //echo $talents;

    $basearme = $MaBase->query("SELECT * FROM `Arme` WHERE idArme ='".$_POST['Weapons']."'");
    $basearme = $basearme->fetch();
    

    $basetalent = $MaBase->query("SELECT * FROM `Talent` WHERE idTalent IN (".$talents.")");

    $talentsNames = array();
    $talentStats = 0;

    while ($weapon = $basetalent->fetch()) {
        $talentStats += $weapon["Boost"];
        array_push($talentsNames, $weapon["Nom"]);
    }
    

    $basemonstre = $MaBase->query("SELECT * FROM `Monstre` WHERE idMonstre ='".$_POST['monstre']."'");
    $basemonstre = $basemonstre->fetch();
    

    $result = $basemonstre['Vie'] / ($basearme['Attaque'] * $talentStats);
    

    ?>
<div class="result"><?php echo "Dégat de l'arme:".$basearme["Attaque"]."<br>". "Boost du talent:".$talentStats."<br>"."vie du monstre:". $basemonstre["Vie"]."<br>". "Il faut mettre au moins ".ceil($result). " coups pour pouvoir tuer le ". $basemonstre['Nom']. " avec ". $basearme["Nom"]. " et le(s) talent(s):".join(",",$talentsNames)?></div>
    <?php


}
else{
    echo"";
}

?>
</body>

</html>