<!doctype html>
<html lang="fr">
    <?php 
    require('htmlToPhp.inc.php');
    $l = activitySelect();

if (isset($_POST['envoi'])) {

$nom = filter_input(INPUT_POST,"nom",FILTER_SANITIZE_STRING);
$prenom = filter_input(INPUT_POST,"prenom",FILTER_SANITIZE_STRING);


if(isset($_POST['classe'])) {
    $classe = $_POST['classe'];
    }

if(isset($_POST['choix-1'])) {
    $choix1 = $_POST['choix-1'];
    }

if(isset($_POST['choix-2'])) {
    $choix2 = $_POST['choix-2'];
    }

if(isset($_POST['choix-3'])) {
    $choix3 = $_POST['choix-3'];
    }

    echo"Nom : " . $nom;
    echo "<br>";
    echo"Prenom : " . $prenom;
    echo "<br>";
    echo"Classe : " . $classe;
    echo "<br>";
    echo"Choix 1 : " . $choix1;
    echo "<br>";
    echo"Choix 2 : " . $choix2;
    echo "<br>";
    echo"Choix 3 : " . $choix3;
    echo "<br>"; 
}
else{
    ?>

        <h1>Inscription à la journée sportive</h1>
        <form name="tous" method="POST" action="#" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
            <p>Informations </p>
            <p>Prénom:
                <input type="text" name="prenom" />
            </p>
            <p>Nom:
                <input type="text" name="nom" />
            </p>
            
            <p>Classe
<?php
            $classe = classeSelect();
        
            
            echo " <select name='classe'>";
            foreach ($classe as $nomClasse) {
            echo "<option value='$nomClasse'>$nomClasse</option>";

        }
        
        echo "</select>
        <br>
        <br>";

    }
    ?>

            
            </p>
            <p>---------------------------------------------------------</p>
            <?php 
           
           afficheSelect("choix");
            
                    ?>
                    
           
            <p>
                <input type="submit" name="envoi" value="Envoyer">
                <input type="reset" name="annuler" value="Annuler">
            </p>
        </form>
    </body>
</html>
<?php ?>
