<?php
//include "Fonction-Bdd.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="Icon.ico" />
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MH Calculator Online</title>
</head>

<body>

    <div class="haut">
    <span>MH Calculator Online</span>
        <div class="hautd">
        
            <div class="example" align='center'>
                <a href="connexion2.php">
                    <img class="co" src="co.png" alt="" title="Connexion/Inscription">
                </a>
            </div>
        </div>
    </div>
    <div align="center"><h2>Ce site permet de calculer le nombre de coup a mettre pour tuer un monstre. Vous pouvez aussi vous crée un compte et mettre un monstre en favori.</h2></div>
    <div class="test">

        <?php
try{

    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `Arme` ORDER BY Nom ASC");
    //echo "j'ai fait ".$ObjetResultatDeRequeteBrut->rowCount()." requête";

    ?>
        <!--1ere division-->
        <div class="conteneur">
            
            <div>
                <div class="selecarme">
                    <h4 align="center">Selectionnez une Arme</h4>
                    <p><img src="LogoArme.png" alt="" title="Selectionnez une Arme"></p>
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
                    <h4>Selectionnez un ou plusieurs Joyeaux</h4>
                    <p><img src="LogoJoyaux.png" alt="" title="Selectionnez un ou plusieurs Joyeaux"></p>

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
                    <h5>Clic gauche pour une selection et CTRL + clic gauche pour plusieurs Joyeaux</h5>
                </div>
            </div>

            <div>

                <!--3eme division-->
                <div class="selcmonstre">
                    <h4 align="center">Selectionnez un Monstre</h4>
                    <p><img src="LogoMonstre.png" alt="" title="Selectionnez un Monstre"></p>

                    <?php
                        $ObjetResultatDeRequeteBrut3 = $MaBase->query("SELECT * FROM `Monstre` ORDER BY NomM ASC");
                        echo "<select name='monstre'>";
                        while($TableauDunTuple3 = $ObjetResultatDeRequeteBrut3->fetch())
                            echo "<option value='".$TableauDunTuple3['idMonstre']."'>".$TableauDunTuple3['NomM']."</option>";
                          echo "</select>";
                          
                    ?>
                </div>
            </div>
                        


     




<?php
// calcule des coups a mettres
}catch(Exception $e){

    echo "J'ai eu un problème erreur :".$e->getMessage();
}
?>
    </div><div align="center">
    <?php echo "<br><input type='submit' value='Combat!' style='width:130px'></form>";
        echo "<br><<a href='admin.php' >Administration</a></h1></div>";

if(isset($_POST["Talent"])) {
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
    
    $basearme['Attaque'] = $basearme['Attaque'] / 5;
    $result = $basemonstre['Vie'] / ($basearme['Attaque'] * $talentStats);

    $deg = $basearme["Attaque"]

    ?>
<div class="result"><?php echo "Dégat de l'arme:".ceil($deg)."<br>". "Boost du talent:".$talentStats."<br>"."vie du monstre:". $basemonstre["Vie"]."<br>". "Il faut mettre au moins ".ceil($result). " coups pour pouvoir tuer le ". $basemonstre['NomM']. " avec ". $basearme["Nom"]. " et le(s) talent(s):".join(",",$talentsNames)?></div>
    <?php


}
else{
    echo"";
}

?>
</body>

</html>