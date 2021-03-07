<?php
function admin(){

include("Fonction-Conexion-Inscription.php"); ?>

<section class="insert">
    <div>
        <form action="" method="post">
            <p>
                <img src="LogoArme.png" alt="">
            </p>
            <label for="NomArme">Nom:</label>
            <input id="NomArme" type="text" name="NomArme" />

            <label for="Atk">Atk: </label>
            <input id="Atk" type="text" name="Atk" />

            <label for="Afinitée">Afinité:</label>
            <input id="Afinite" type="text" name="Afinite" />

            <label for="Elements">Elements:</label>
            <input id="Elements" type="text" name="Elements" />

            <label for="Sceau">Sceau des anciens: </label>
            <input id="Sceau" type="text" name="Sceau" />

            <input class="Valide" type="submit" value="Valider" name="send"/>
        </form>

        <?php $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

        if(isset($_POST["send"])) {
            ajoutArme($_POST['NomArme'], $_POST['Atk'],$_POST['Afinite'],$_POST['Elements'],$_POST['Sceau']);
            echo("Votre arme a été ajouté");
        } else echo("");  ?>

    </div>

    <div>
        <form action="" method="post">
            <p><img src="LogoJoyaux.png" alt=""></p>
            <label for="NomTalent">Nom du talent:</label>
            <input id="NomTalent" type="text" name="NomTalent" />

            <label for="Boost">Boost:</label>
            <input id="Boost" type="text" name="Boost" />

            <input class="Valide" type="submit" value="Valider" name="send2"/>
        </form>

        <?php $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

            if(isset($_POST["send2"])) {
                ajoutTalent($_POST['NomTalent'], $_POST['Boost']);
                echo("Votre talent a été ajouté");

            } else echo("");

        ?>
    </div>

    <div>
        <form action="" method="post">
        <p><img src="LogoMonstre.png" alt=""></p>

        <label for="NomMonstre">Nom du monstre:</label>
        <input id="NomMonstre" type="text" name="NomMonstre" />

        <label for="HP">Point de vie du monstre</label>
        <input id="HP" type="text" name="HP" />

        <input class="Valide" type="submit" value="Valider" name="send3"/>
        </form>

        <?php $MaBase = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

            if(isset($_POST["send3"])) {
                ajoutMonstre($_POST['NomMonstre'], $_POST['HP']);
                echo("Votre monstre a été ajouté");
            } else echo("");

        ?>
    </div>
</section>





<!--<link rel="stylesheet" href="Page-Insert.css">-->
<?php
    try {
        $dbh = new PDO('mysql:host=localhost; dbname=Projet-Final-BDD; charset=utf8','lucas', 'lucas');

    } catch (PDOException $e) {
        print "Erreur ! — " . $e->getMessage() . "<br/>";
        die();
    }

?>



    <style>
    p.upTest {
        margin-bottom: 0px
    }
    </style>
    
        <form method="post">

            <select name="contentType">
                <option value="talent">
                    Talent
                </option>
                <option value="monstre">
                    Monstre
                </option>
                <option value="arme">
                    Arme
                </option>
            </select>

            <button type="submit" name="contentTypeSubmit">Go</button>

        </form>

            <?php if (isset($_POST["contentTypeSubmit"])) {

                $_SESSION["contentType"] = $_POST["contentType"];
                $stmt = $dbh->query("SELECT * FROM ".$_POST["contentType"]." WHERE 1 ");

                    switch ($_SESSION["contentType"]) {
                        case "arme":
                            $_SESSION["typeId"] = "idArme";
                            break;
                        case "monstre":
                            $_SESSION["typeId"] = "idMonstre";
                            break;
                        case "talent":
                            $_SESSION["typeId"] = "idTalent";
                            break;
                    }


                ?>

                <form method="post">
                    <select name='elementToSelect'>

                        <?php foreach ($stmt as $row) { ?>
                            <option value="<?php echo $row[$_SESSION["typeId"]] ?>">
                                <?php echo $row["NomM"] ?>
                            </option>
                        <?php  } ?>

                    </select>

                    <button type="submit" name="selectedElement">Details</button>
                </form>


            <?php }

            if (isset($_POST["selectedElement"])) {

                $data = $dbh->query("SELECT * FROM ".$_SESSION["contentType"]." WHERE ".$_SESSION["typeId"]." = ".$_POST["elementToSelect"])->fetch();
                $_SESSION["elementToSelect"] = $_POST["elementToSelect"];

                switch ($_SESSION["contentType"]) {

                    case "arme": {

                        ?>

                            <form method="post">

                                <p class="upTest">idArme :</p>
                                <input type="text" name="idArme" value="<?php echo $data["idArme"]?>">
                                <p class="upTest">Nom :</p>
                                <input type="text" name="Nom" value="<?php echo $data["Nom"]?>">
                                <p class="upTest">Attaque :</p>
                                <input type="text" name="Attaque" value="<?php echo $data["Attaque"]?>">
                                <p class="upTest">Afinité :</p>
                                <input type="text" name="Afinité" value="<?php echo $data["Afinité"]?>">
                                <p class="upTest">Element :</p>
                                <input type="text" name="Element" value="<?php echo $data["Element"]?>">
                                <p class="upTest">Sceau des anciens :</p>
                                <input type="text" name="Sceau_des_anciens" value="<?php echo $data["Sceau_des_anciens"]?>">

                                <input type="submit" value="Mettre à jour" name="weaponUpdate">
                                <input type="submit" value="Supprimer" name="weaponDelete">

                            </form>

                    <?php } break;

                    case "monstre": { ?>

                        <form method="post">

                            <p class="upTest">idMonstre :</p>
                            <input type="text" name="idMonstre" value="<?php echo $data["idMonstre"]?>">
                            <p class="upTest">Nom :</p>
                            <input type="text" name="NomM" value="<?php echo $data["NomM"]?>">
                            <p class="upTest">Vie :</p>
                            <input type="text" name="Vie" value="<?php echo $data["Vie"]?>">

                            <input type="submit" value="Mettre à jour" name="monstreUpdate">
                            <input type="submit" value="Supprimer" name="monstreDelete">

                        </form>

                    <?php } break;

                        case "talent": { ?>

                            <form method="post">

                                <p class="upTest">idTalent :</p>
                                <input type="text" name="idTalent" value="<?php echo $data["idTalent"]?>">
                                <p class="upTest">Nom :</p>
                                <input type="text" name="Nom" value="<?php echo $data["Nom"]?>">
                                <p class="upTest">Boost :</p>
                                <input type="text" name="Boost" value="<?php echo $data["Boost"]?>">

                                <input type="submit" value="Mettre à jour" name="talentUpdate">
                                <input type="submit" value="Supprimer" name="talentDelete">

                            </form>

                        <?php } break;
                }

            }

            if (isset($_POST["weaponUpdate"])) {
                $dbh->query("UPDATE ".$_SESSION["contentType"]." SET idArme = '".$_POST["idArme"]."', Nom = '".$_POST["Nom"]."', Attaque = ". $_POST["Attaque"].", Afinité = '". $_POST["Afinité"]."', Element = '". $_POST["Element"]."', Sceau_des_anciens = '". $_POST["Sceau_des_anciens"]."' WHERE ".$_SESSION["typeId"]." = ".$_POST["idArme"]);
                echo "<p>".$_POST["Nom"]." viens d'etre mit à jour</p>";
            }

            if (isset($_POST["monstreUpdate"])) {
                $dbh->query("UPDATE ".$_SESSION["contentType"]." SET idMonstre = '".$_POST["idMonstre"]."', Nom = '".$_POST["Nom"]."', Vie = ". $_POST["Vie"]." WHERE ".$_SESSION["typeId"]." = ".$_POST["idMonstre"]);
                echo "<p>".$_POST["Nom"]." viens d'etre mit à jour</p>";
            }

            if (isset($_POST["talentUpdate"])) {
                $dbh->query("UPDATE ".$_SESSION["contentType"]." SET idTalent = '".$_POST["idTalent"]."', Nom = '".$_POST["Nom"]."', Boost = ". $_POST["Boost"]." WHERE ".$_SESSION["typeId"]." = ".$_POST["idTalent"]);
                echo "<p>".$_POST["Nom"]." viens d'etre mit à jour</p>";
            }


            if (isset($_POST["weaponDelete"])) {

                $dbh->query("DELETE FROM ".$_SESSION["contentType"]." WHERE ".$_SESSION["typeId"]." = ".$_POST["idArme"]); ?>
                <p> L'arme <?php echo $_POST['Nom']." (id: ".$_POST["idArme"].")" ?> a bien été supprimé</p>

            <?php }

            if (isset($_POST["monstreDelete"])) {

                $dbh->query("DELETE FROM ".$_SESSION["contentType"]." WHERE ".$_SESSION["typeId"]." = ".$_POST["idMonstre"]); ?>
                <p> Le monstre <?php echo $_POST['Nom']." (id: ".$_POST["idMonstre"].")" ?> a bien été supprimé</p>

            <?php }

            if (isset($_POST["talentDelete"])) {

                $dbh->query("DELETE FROM ".$_SESSION["contentType"]." WHERE ".$_SESSION["typeId"]." = ".$_POST["idTalent"]); ?>
                <p> Le talent <?php echo $_POST['Nom']." (id: ".$_POST["idTalent"].")" ?> a bien été supprimé</p>

            <?php } ?>        

<?php } ?>