<?php
    session_start();
    include "fonctionadmin.php";
    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

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

if(isset($_SESSION["prenom"])) {
    $Admin = $MaBase->query("SELECT * FROM `User` WHERE Nom ='".$_SESSION["prenom"]."'");
    $Admin = $Admin->fetch();
    if($Admin["admin"]== 1){
        admin();
    }else{
        echo"Vous n'ètes pas Administrateur.";
        ?><img src="nop.jpg" alt="" title="nan mdr"><?php
    }
}
    else{
    echo"Connectez vous pour avoir accès a cette page";
    }




?>
</body>
</html>