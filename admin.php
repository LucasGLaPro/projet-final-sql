<?php
    session_start();
    include "fonctionadmin.php";


?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="Icon.ico" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="admin.css">
<!--<link rel="stylesheet" href="Page-Insert.css">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>

<?php


if(isset($_SESSION["co"]) && $_SESSION["co"]){
    
    if($_SESSION["prenom"] != "admin"){
        session_destroy();
        header("Refresh:0");
    }
    echo"<div class='style1'> Bienvenue ". $_SESSION["prenom"]."</div>";
    admin();
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

    <form action="" method="post">
<p>
    Login:<input type="text" name="prenom" />
    Mot de passe:<input type="password" name="mdp" />
    <input type="submit" name="Valider" />
    <button type="submit" name="Reset">Reset</button>
    <a href="index.php" >Menu Principal</a></h1>
</p>
<?php
$_SESSION["co"] = false;
if(isset($_POST["Valider"])){
    $_SESSION["prenom"] = $_POST["prenom"];

    }
    if(isset($_SESSION["prenom"])) {

        if($_SESSION["prenom"] == "admin" ){
            $_SESSION["mdp"] = $_POST["mdp"];
            if($_SESSION["mdp"] == "bddrootlucas" ){
               echo"<div class='style1'> ton nom est :".$_SESSION["prenom"]. $_SESSION["mdp"]."</div>"; 
               $_SESSION["co"] = true;
               header("Refresh:0");
            } else{
                echo"<div class='style1'> Le mot de passe n'est pas bon.</div>";
            }     
        } else {
            echo"<div class='style1'> Le login n'est pas bon</div>";
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