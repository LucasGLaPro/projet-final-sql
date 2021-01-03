<link rel="stylesheet" href="style.css">
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
<?php
    session_start();
    $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Page-Conexion-Inscription_Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" Conecttent="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
include "logged.php";

if(isset($_SESSION["co"]) && $_SESSION["co"]){
    echo"<div> Bienvenue ". $_SESSION["prenom"]."</div>";
    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `User` WHERE `Nom`='".$_SESSION["prenom"]."' AND `Mdp` = '".$_SESSION["mdp"]."'");
    $ObjetResultatDeRequeteBrut = $ObjetResultatDeRequeteBrut->fetch();
    fav($ObjetResultatDeRequeteBrut["iduser"]);
?>
<form action="" method="post">
<p>
 <button type="submit" name="deco">Deconnexion</button> 
</p>
<?php 
if(isset($_POST["deco"])) {
    session_destroy();
    $_SESSION["co"] = false;
    header("Refresh:0");
}   
} else { ?>
    <section class="login">
    <div>
    <form action="" method="post">
    Login:<input type="text" name="prenom" required/>
    Mot de passe:<input type="password" name="mdp" required/>
    <input type="submit" name="Valider" />
    <button type="submit" name="Reset">Reset</button>
    <h1><a href="Page-Inscription.php" >Inscription</a>
    <a href="index.php" >Menu Principale</a></h1>
    </div>
    </section> 
</p>
<?php
$_SESSION["co"] = false;
if(isset($_POST["Valider"])){
    $_SESSION["prenom"] = $_POST["prenom"];
    }
    if(isset($_SESSION["prenom"])) {
$_SESSION["mdp"] = $_POST["mdp"];
        $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `User` WHERE `Nom`='".$_SESSION["prenom"]."' AND `Mdp` = '".$_SESSION["mdp"]."'"); 
        if($ObjetResultatDeRequeteBrut->rowCount()>=1){
            $_SESSION["co"] = true;
            header("Refresh:0");
            
        }
        else{
            echo"Echec de connection "; 
        }

    } 
    else
        echo"";          
if(isset($_POST["Reset"])) {
    session_destroy();
}   
}




?>


</form>
</body>
</html>
           