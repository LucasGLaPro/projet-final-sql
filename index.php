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
                
                    <div class="selecarme">
                        <h4 align="center">Selectionnez une Arme</h4>
                        <p><img src="LogoArme.png" alt="" title="Selectionnez une Arme" value="Open Modal" id="arme"></p>

                        <div id="modal_arme" class="modal">
                            <div class="modal-content">
                            
                                <span id="close_arme">&times;</span><!--Bouton de fermeture de ma fenêtre modal-->

                                <h2 align="center" >Liste des armes</h2>
                                <div NAME="form3" class="imagegrid">
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs1.jpg" alt="LogoArme"  class="img_arme" name="FAUX CHROMÉE III" value="1" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>FAUX CHROMÉE III</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs2.jpg" alt="LogoArme"  class="img_arme" name="MÂCHOIRE D'OGRE III" value="2" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>MÂCHOIRE D'OGRE III</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs3.jpg" alt="LogoArme"  class="img_arme" name="GRIFFEMORT JAGRAS II" value="3" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GRIFFEMORT JAGRAS II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs4.jpg" alt="LogoArme"  class="img_arme" name="FLÉAU DU DIABLE II" value="4" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>FLÉAU DU DIABLE II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs5.jpg" alt="LogoArme"  class="img_arme" name="TRANCHOIR BARROTH II" value="5" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>TRANCHOIR BARROTH II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs6.jpg" alt="LogoArme"  class="img_arme" name="LOHENZAH" value="6" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>LOHENZAH</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs7.jpg" alt="LogoArme"  class="img_arme" name=" ATROCITÉ EXORBITANTE" value="7" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5> ATROCITÉ EXORBITANTE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs8.jpg" alt="LogoArme"  class="img_arme" name="GUILLOTINE NÂGA II" value="8" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GUILLOTINE NÂGA II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs9.jpg" alt="LogoArme"  class="img_arme" name="HACHOIR RADOBAAN II" value="9" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>HACHOIR RADOBAAN II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs10.jpg" alt="LogoArme"  class="img_arme" name="DON MONSTRO" value="10" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>DON MONSTRO</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs11.jpg" alt="LogoArme"  class="img_arme" name=" FLAMBEAU RATHALOS" value="11" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5> FLAMBEAU RATHALOS</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs12.jpg" alt="LogoArme"  class="img_arme" name="ÉPÉE FOUDRE IMPÉRIALE" value="12" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>ÉPÉE FOUDRE IMPÉRIALE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs13.jpg" alt="LogoArme"  class="img_arme" name="FENDOIR DE BÛCHER II" value="13" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>FENDOIR DE BÛCHER II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs14.jpg" alt="LogoArme"  class="img_arme" name="TOGHRUL-BEG DE DAORA" value="14" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>TOGHRUL-BEG DE DAORA</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs15.jpg" alt="LogoArme"  class="img_arme" name="XENO MALIQ +" value="15" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>XENO MALIQ +</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs16.jpg" alt="LogoArme"  class="img_arme" name="VOLCALAME MAGDAROS" value="16" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>VOLCALAME MAGDAROS</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs17.jpg" alt="LogoArme"  class="img_arme" name="ÉPÉE SCEAU-DE-DRAGON II" value="17" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>ÉPÉE SCEAU-DE-DRAGON II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs18.jpg" alt="LogoArme"  class="img_arme" name="ÉCLAIR TRANCHANT II" value="18" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>ÉCLAIR TRANCHANT II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs19.jpg" alt="LogoArme"  class="img_arme" name="SINISTRE" value="19" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>SINISTRE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs20.jpg" alt="LogoArme"  class="img_arme" name="GOLEM LAGUNA II" value="20" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GOLEM LAGUNA II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs21.jpg" alt="LogoArme"  class="img_arme" name=" MÂCHOIRE WYVERNE ULT" value="21" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5> MÂCHOIRE WYVERNE ULT</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs22.jpg" alt="LogoArme"  class="img_arme" name="ÉPÉE SOUVERAINE" value="22" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>ÉPÉE SOUVERAINE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs23.jpg" alt="LogoArme"  class="img_arme" name="LAME EMBRASÉE STYX" value="23" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>LAME EMBRASÉE "STYX"</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs24.jpg" alt="LogoArme"  class="img_arme" name="GRANDE ÉPÉE DU DÉFENSEUR V" value="24" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GRANDE ÉPÉE DU DÉFENSEUR V</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs25.jpg" alt="LogoArme"  class="img_arme" name="BOURREAU DE L'ENFER +" value="25" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>BOURREAU DE L'ENFER +</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs26.jpg" alt="LogoArme"  class="img_arme" name=" MAMMOHACHE II" value="26" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>MAMMOHACHE II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs27.jpg" alt="LogoArme"  class="img_arme" name="LAME OCCULTE II" value="27" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>LAME OCCULTE II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs28.jpg" alt="LogoArme"  class="img_arme" name=" LAME GLAVENUS II" value="28" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5> LAME GLAVENUS II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs29.jpg" alt="LogoArme"  class="img_arme" name="SÉRAPHIDE AILÉ" value="29" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>SÉRAPHIDE AILÉ</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs30.jpg" alt="LogoArme"  class="img_arme" name="GRANDE ÉPÉE TIGREX" value="30" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GRANDE ÉPÉE TIGREX</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs31.jpg" alt="LogoArme"  class="img_arme" name="LAME FULGURANTE" value="31" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>LAME FULGURANTE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs32.jpg" alt="LogoArme"  class="img_arme" name="RASOIR NYX II" value="32" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>RASOIR NYX II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs33.jpg" alt="LogoArme"  class="img_arme" name="BRACH-ATTAQUE" value="33" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>BRACH-ATTAQUE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs34.jpg" alt="LogoArme"  class="img_arme" name="DHARMA IMMUABLE" value="34" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>DHARMA IMMUABLE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs35.jpg" alt="LogoArme"  class="img_arme" name="GRAND GOURDIN DU DÉMON" value="35" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GRAND GOURDIN DU DÉMON</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs36.jpg" alt="LogoArme"  class="img_arme" name="RÉVOLUTION ALATREON" value="36" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>RÉVOLUTION ALATREON</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs37.jpg" alt="LogoArme"  class="img_arme" name="BROYEUR ACIDE II" value="37" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>BROYEUR ACIDE II</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs38.jpg" alt="LogoArme"  class="img_arme" name="MORSURE SAUVAGE" value="38" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>MORSURE SAUVAGE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs39.jpg" alt="LogoArme"  class="img_arme" name="GLADIUS XIPHIAS" value="39" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GLADIUS XIPHIAS</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs41.jpg" alt="LogoArme"  class="img_arme" name="LAME ROYALE VENUS" value="40" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>LAME ROYALE "VENUS"</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs42.jpg" alt="LogoArme"  class="img_arme" name="GOURDIN D'OR DU ROI-DÉMON" value="41" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>GOURDIN D'OR DU ROI-DÉMON</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs43.jpg" alt="LogoArme"  class="img_arme" name=" LAME DE LUMIÈRE" value="42" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5> LAME DE LUMIÈRE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs44.jpg" alt="LogoArme"  class="img_arme" name=" DÉMON DE GLACE" value="43" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5> DÉMON DE GLACE</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs45.jpg" alt="LogoArme"  class="img_arme" name="LAME NOIRE FATALIS" value="44" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>LAME NOIRE FATALIS</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs46.jpg" alt="LogoArme"  class="img_arme" name="TRANCHEUR SAFI" value="45" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>TRANCHEUR SAFI</h5>
                                    </div>
                                    <div class="thumb_page" name="arme_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="images/gs47.jpg" alt="LogoArme"  class="img_arme" name="ESPADON KJÁRR" value="46" onClick="arme(value, name)">
                                        
                                        </div>
                                        <h5>ESPADON KJÁRR</h5>
                                    </div>


                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    

                    <!--2eme division-->
                    <div class="selctalent" align="center">
                        <h4>Selectionnez un ou plusieurs Joyeaux</h4>
                        <p><img src="LogoJoyaux.png" alt="" value="Open Modal" id="talent"></p>

                        <div id="modal_talent" class="modal">
                            <div class="modal-content">
                            
                                <span id="close_talent">&times;</span> <!--Bouton de fermeture de ma fenêtre modal-->

                                <h2 align="center" >Liste des talent</h2>
                                <div NAME="form1" class="imagegrid">
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                        
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="rien" value="12" onClick="talent(value, name)">
                                        
                                        </div>
                                        <h5>Aucun</h5>
                                    </div>

                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s">
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Berserker" value="1" onClick="talent(value, name)">
                                        </div>
                                        <h5>Berserker</h5>
                                    </div>
                                
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s">
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Machine de guerre" value="2" onClick="talent(value, name)">
                                        </div>
                                        <h5>Machine de guerre</h5>
                                    </div>

                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s">
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Mise a mort" value="3" onClick="talent(value, name)">
                                        </div>
                                        <h5>Mise a mort</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent"  name="Destructeur" value="4" onClick="talent(value, name)">
                                        </div>
                                        <h5>Destructeur</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <img src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Témérité" value="5" onClick="talent(value, name)">
                                        </div>
                                        <h5>Témérité</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Performance optimal" value="6" onClick="talent(value, name)">
                                        </div>
                                        <h5>Performance optimal</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <img src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Héroisme" value="7" onClick="talent(value, name)">
                                        </div>
                                        <h5>Héroisme</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Jamais vaincue" value="8" onClick="talent(value, name)">
                                        </div>
                                        <h5>Jamais vaincue</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Vengeance" value="9" onClick="talent(value, name)">
                                        </div>
                                        <h5>Vengeance</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Garde offensif" value="10" onClick="talent(value, name)">
                                        </div>
                                        <h5>Garde offensif</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="LogoJoyaux.png" alt="LogoJoyaux"  class="img_talent" name="Union" value="11" onClick="talent(value, name)">
                                        </div>
                                        <h5>Union</h5>
                                    </div>
                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                    <!--3eme division-->
                    <div class="selcmonstre">
                        <h4 align="center">Selectionnez un Monstre</h4>
                        <p><img src="LogoMonstre.png" alt="" value="Open Modal" id="monstre"></p>

                        <div id="modal" class="modal">
                            <div class="modal-content">
                                <span id="close">&times;</span><!--Bouton de fermeture de ma fenêtre modal-->

                                <h2 align="center" >Liste des monstres</h2>
                                <div name="form2" class="imagegrid">

                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Alatreon.png" alt="Alatreon" name="Alatreon" class="img_monstre"  value="1" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Alatreon</h5>
                                    </div>

                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s">
                                            <input type="image" src="images/Anjanath tonerre.png" alt="Anjanath tonerre"  name="Anjanath tonerre" class="img_monstre" value="2" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Anjanath tonerre</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s">
                                            <input type="image" src="images/Anjanath.png" alt="Anjanath"  class="img_monstre" name="Anjanath" value="3" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Anjanath</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s">
                                            <input type="image" src="images/Banbaro.png" alt="Banbaro"  class="img_monstre" name="Banbaro" value="4" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Banbaro</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Barioth crocgivre.png" alt="Barioth crocgivre"  name="Barioth crocgivre" class="img_monstre" value="5" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Barioth crocgivre</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Barioth.png" alt="Barioth"  class="img_monstre" name="Barioth" value="6" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Barioth</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Barroth.png" alt="Barroth"  class="img_monstre" name="Barroth" value="7" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Barroth</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Bazelgeuse vulcan.png" alt="Bazelgeuse vulcan" name="Bazelgeuse vulcan"  class="img_monstre" value="8" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Bazelgeuse vulcan</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/bazelgeuse.png" alt="Bazelgeuse"  class="img_monstre" name="Bazelgeuse" value="9" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Bazelgeuse</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Béhémoth.png" alt="Béhémoth"  class="img_monstre" name="Béhémoth" value="10" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Béhémoth</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/beotodus.png" alt="Beotodus"  class="img_monstre" name="Beotodus" value="11" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Beotodus</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Brachidios tempête.png" alt="Brachidios tempête" name="Brachidios tempête"  class="img_monstre" value="12" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Brachidios tempête</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Brachidios.png" alt="Brachidios"  class="img_monstre" name="Brachidios" value="13" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Brachidios</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Deviljho carnage.png" alt="Deviljho carnage" name="Deviljho carnage"  class="img_monstre" value="14" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Deviljho carnage</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Deviljho.png" alt="Deviljho"  class="img_monstre" name="Deviljho" value="15" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Deviljho</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Diablos noire.png" alt="Diablos noir"  class="img_monstre" name="Diablos noir" value="16" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Diablos noir</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Diablos.png" alt="Diablos"  class="img_monstre" name="Diablos" value="17" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Diablos</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/dodogama.png" alt="Dodogama"  class="img_monstre" name="Dodogama" value="18" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Dodogama</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <img src="images/Fatalis.png" alt="images/Fatalis.png"  class="img_monstre" value="19" name="Fatalis" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Fatalis</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Glavenus Acide.png" alt="Glavenus acide"  class="img_monstre" name="Glavenus acide" value="20" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Glavenus acide</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Glavenus.png" alt="Glavenus"  class="img_monstre" name="Glavenus" value="21" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Glavenus</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Grand Girros.png" alt="Grand Girros"  class="img_monstre" name="Grand Girros" value="22" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Grand Girros</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Grand jagras.png" alt="Grand Jagras"  class="img_monstre" name="Grand Jagras" value="23" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Grand Jagras</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Jyurutodus.png" alt="Jyurutodus"  class="img_monstre" name="Jyurutodus" value="24" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Jyurutodus</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Kirin.png" alt="Kirin"  class="img_monstre" name="Kirin" value="25" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Kirin</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Kulu-Ya-Ku.png" alt="Kulu-Ya-Ku"  class="img_monstre" name="Kulu-Ya-Ku" value="26" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Kulu-Ya-Ku</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Kulve tarroth.png" alt="Kulve tarroth"  class="img_monstre" name="Kulve tarroth" value="27" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Kulve tarroth</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Kushala daora.png" alt="Kushala daora"  class="img_monstre" name="Kushala daora" value="28" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Kushala daora</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Lavasioth.png" alt="Lavasioth"  class="img_monstre" name="Lavasioth" value="29" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Lavasioth</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Legiana blizard.png" alt="Legiana blizard" name="Legiana blizard"  class="img_monstre" value="30" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Legiana blizard</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Legiana.png" alt="Legiana"  class="img_monstre" name="Legiana" value="31" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Legiana</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Leshen.png" alt="Leshen"  class="img_monstre" name="Leshen" value="32" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Leshen</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Lunastra.png" alt="Lunastra"  class="img_monstre" name="Lunastra" value="33" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Lunastra</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Namielle.png" alt="Namielle"  class="img_monstre" name="Namielle" value="34" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Namielle</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Nargacuga.png" alt="Nargacuga"  class="img_monstre" name="Nargacuga" value="35" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Nargacuga</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Nergigante chaos.png" alt="Nergigante chaos" name="Nergigante chaos"  class="img_monstre" value="36" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Nergigante chaos</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Nergigante.png" alt="Nergigante"  class="img_monstre" name="Nergigante" value="37" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Nergigante</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Odogaron désastre.png" alt="Odogaron désastre"  class="img_monstre" name="Odogaron désastre" value="38" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Odogaron désastre</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Odogaron.png" alt="Odogaron"  class="img_monstre" name="Odogaron" value="39" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Odogaron</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Paolumu beladone.png" alt="Paolumu beladone"  class="img_monstre" name="Paolumu beladone" value="40" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Paolumu beladone</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Paolumu.png" alt="Paolumu"  class="img_monstre" name="Paolumu" value="41" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Paolumu</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Pukei-Pukei corail.png" alt="Pukei-Pukei corail" name="Pukei-Pukei corail"  class="img_monstre" value="42" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Pukei-Pukei corail</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Pukei-Pukei.png" alt="Pukei-Pukei"  class="img_monstre" name="Pukei-Pukei" value="43" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Pukei-Pukei</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Radobaan.png" alt="Radobaan"  class="img_monstre" name="Radobaan" value="44" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Radobaan</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Rajang orage.png" alt="Rajang orage"  class="img_monstre" name="Rajang orage" value="45" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rajang orage</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Rajang.png" alt="Rajang"  class="img_monstre" name="Rajang" value="46" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rajang</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Rathalos argent.png" alt="Rathalos argent"  class="img_monstre" name="Rathalos argent" value="47" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rathalos argent</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Rathalos azur.png" alt="Rathalos azur"  class="img_monstre" name="Rathalos azur" value="48" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rathalos azur</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Rathalos.png" alt="Rathalos"  class="img_monstre" name="Rathalos" value="49" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rathalos</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <img src="images/Rathian d'or.png" alt="Rathian d'or"  class="img_monstre" name="Rathian d'or" value="50" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rathian d'or</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Rathian sakura.png" alt="Rathian sakura"  class="img_monstre" name="Rathian sakura" value="51" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rathian sakura</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Rathian.png" alt="Rathian"  class="img_monstre" name="Rathian" value="52" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Rathian</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Safi'jiiva.png" alt="Safi'jiiva"  class="img_monstre" name="Safi'jiiva" value="53" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Safi'jiiva</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Shara Ishvalda.png" alt="Shara Ishvalda"  class="img_monstre" name="Shara Ishvalda" value="54" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Shara Ishvalda</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Teostra.png" alt="Teostra"  class="img_monstre" name="Teostra" value="55" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Teostra</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Tigrex Berserk.png" alt="Tigrex Berserk"  class="img_monstre" name="Tigrex Berserk" value="56" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Tigrex Berserk</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Tigrex.png" alt="Tigrex"  class="img_monstre" value="57" name="Tigrex" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Tigrex</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Tobi-Kadachi Vipère.png" alt="Tobi-Kadachi Vipère"  class="img_monstre" name="Tobi-Kadachi Vipère" value="58" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Tobi-Kadachi Vipère</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Tobi-Kadachi.png" alt="Tobi-Kadachi"  class="img_monstre" name="Tobi-Kadachi" value="59" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Tobi-Kadachi</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Tzitzi-Ya-Ku.png" alt="Tzitzi-Ya-Ku"  class="img_monstre" name="Tzitzi-Ya-Ku" value="60" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Tzitzi-Ya-Ku</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Uragan.png" alt="Uragan"  class="img_monstre" name="Uragan" value="61" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Uragan</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Vaal Hazak Fléau.png" alt="Vaal Hazak Fléau"  class="img_monstre" name="Vaal Hazak Fléau" value="62" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Vaal Hazak Fléau</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Vaal Hazak.png" alt="Vaal Hazak"  class="img_monstre" name="Vaal Hazak" value="63" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Vaal Hazak</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Vieux Leshen.png" alt="Vieux Leshen"  class="img_monstre" name="Vieux Leshen" value="64" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Vieux Leshen</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Xeno'Jiiva.png" alt="Xeno'Jiiva"  class="img_monstre" name="Xeno'Jiiva" value="65" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Xeno'Jiiva</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Yian Garuga Balafré.png" alt="Yian Garuga Balafré"  class="img_monstre" name="Yian Garuga Balafré" value="66" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Yian Garuga Balafré</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Yian Garuga.png" alt="Yian Garuga"  class="img_monstre" name="Yian Garuga" value="67" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Yian Garuga</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Zinogre Stygien.png" alt="Zinogre stygien"  class="img_monstre" name="Zinogre stygien" value="68" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Zinogre stygien</h5>
                                    </div>
                                    <div class="thumb_page" name="talent_select">
                                        <div class="fond_monstre_s" >
                                            <input type="image" src="images/Zinogre.png" alt="Zinogre"  class="img_monstre" name="Zinogre" value="69" onClick="monstre(value, name)">
                                        </div>
                                        <h5>Zinogre</h5>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                            

    <?php

    }catch(Exception $e){

        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
    ?>


        </div><div align="center">
        <?php echo "<br><button type='button' id='Combat'>Combat</button>";?> <!--Bouton pour lancer le combat et qui envoie la valeur des selection-->
        <p><a href="admin.php">Adminitration</a></p><?php

 
    $based = $MaBase->query("SELECT * FROM User ORDER BY iduser DESC LIMIT 1");
    $based = $based->fetch();
    $numcompte = $MaBase->query("SELECT * FROM `User` ORDER BY Nom ASC");

    echo "<div class='bas'>"."Le/la dernier inscrit est: ".$based['Nom'];
    echo " et il y a ".$numcompte->rowCount()." personnes inscrit"."</div>";
    ?>
    </body>
    <script type="text/javascript" src="Menu_selection.js"></script>
    </html>