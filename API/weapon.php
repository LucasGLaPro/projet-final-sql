<?php 

$content = trim(file_get_contents("php://input"));

$data = json_decode($content, true);

$MaBase = new PDO('mysql:host=192.168.65.192; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

$basearme = $MaBase->query("SELECT * FROM `Arme` WHERE idArme ='".$data['idarme']."'");
$basearme = $basearme->fetch();

echo json_encode( $basearme );


?>


