<?php
$content = trim(file_get_contents("php://input"));

$data = json_decode($content, true);

$MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

$basemonstre = $MaBase->query("SELECT * FROM `Monstre` WHERE idMonstre ='".$data['idmonstre']."'");
$basemonstre = $basemonstre->fetch();

echo json_encode( $basemonstre );
?>