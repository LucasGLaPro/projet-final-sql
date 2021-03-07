<?php
    class User {
        private $nom;
        private $mdp;
        private $fav;

        public function __construct($nom, $mdp, $BDD, $monstre) {
            $this->nom = $nom;
            $this->mdp = $mdp;
            $this->BDD = $BDD;
            $this->Monstre = $monstre;
        }

        public function Connexion() {
            $_SESSION["prenom"] = $this->nom;
    
    if(isset($_SESSION["prenom"])) {
$_SESSION["mdp"] = $this->mdp;
        $ObjetResultatDeRequeteBrut = $this->BDD->query("SELECT * FROM `User` WHERE `Nom`='".$_SESSION["prenom"]."' AND `Mdp` = '".$_SESSION["mdp"]."'"); 
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
        
        }

        public function insc() {
            try{
        
                $ObjetResultatDeRequeteBrut = $this->BDD->query("INSERT INTO `User`(`Nom`, `Mdp`, `Favori`) VALUE('".$this->nom."','".$this->mdp."','".$this->Monstre."')");        
            
            }catch(Exception $e){
            
                echo "J'ai eu un problème erreur :".$e->getMessage();
            }
        }
}
    
?>