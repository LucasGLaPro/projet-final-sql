<link rel="stylesheet" href="style.css">
<link rel="icon" href="Icon.ico" />
<title>MH Calculator Online</title>
<div class="haut">
    <span>MH Calculator Online</span>
        <div class="hautd">
        
            <div class="example" align='center'>
                <a href="index.php">
                    <img class="co" src="home.png" alt="">
                </a>
            </div>
        </div>
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Page-Conexion-Inscription_Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php 
include "class.php"; ?>

<section class="login">
    <div>
        <form action="" method="post">
        Inscription:    
        Utilisateur:<input type="text" name="Nom" required/>
        Mot de passe:<input type="password" name="Mdp" required/>
        Votre monstre préféré<?php
        $MaBase = new PDO('mysql:host=localhost; dbname=projet-final-bdd; charset=utf8','lucas', 'lucas');
        $ObjetResultatDeRequeteBrut3 = $MaBase->query("SELECT * FROM `Monstre` ORDER BY NomM ASC");
        echo "<select name='monstre'>";
        while($TableauDunTuple3 = $ObjetResultatDeRequeteBrut3->fetch())
            echo "<option value='".$TableauDunTuple3['idMonstre']."'>".$TableauDunTuple3['NomM']."</option>";
            echo "</select>";
            if(isset($_POST["monstre"])) {
            $basemonstre = $MaBase->query("SELECT * FROM `Monstre` WHERE idMonstre ='".$_POST['monstre']."'");
            $basemonstre = $basemonstre->fetch();}
            ?>
        <input class="Valide" type="submit" value="Valider" name="send"/>
        <h1><a href="connexion2.php" >Connexion</a>
            <a href="index.php" >Menu Principal</a></h1>
        </form>
    
    <?php
    if(isset($_POST["send"])) {
        $test = new User($_POST["Nom"] ,$_POST["Mdp"], $MaBase, $basemonstre["idMonstre"]);
        $test -> insc();
        //ajout($_POST['Nom'], $_POST['Mdp'], $basemonstre["idMonstre"]);
        echo("Vous êtes inscrit");
    }
    else{
        echo("");
    }
    ?>

    </div>
    </section>


</body>
</html>