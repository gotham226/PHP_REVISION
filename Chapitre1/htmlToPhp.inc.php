<?php 

function afficheSelect($name){

    $activites = activitySelect();
    for ($i=1; $i < 4; $i++) { 
        
        echo " <label>Choix $i :</label>
        <select name='$name-$i'>";
        foreach ($activites as $nomActivite) {
            echo "<option value='$nomActivite'>$nomActivite</option>";

        }
        echo "</select>
        <br>
        <br>";

    }

}



function conexBase(){

    try {
        // Objet de type pdo
        // Connexion à la base
        $dbh = new PDO('mysql:host=localhost;dbname=journeesportive','root', '');

        } // Si échec  
        catch (PDOException $e) {
            echo "<p>Erreur: ".$e->getMessage() ;
            die() ;
        }
        return $dbh;
}



function deconexBase(){
    $dbh = null;
}



function activitySelect(){
    $dbh = conexBase();

    $reponse = $dbh->query("SELECT idActivite,nomActivite FROM activite;");

    // fetch() -> Prendre ligne par ligne la reponse 
    $lignes = $reponse->fetchAll();
    return $lignes;

}


function classeSelect(){
    $dbh = conexBase();

    $reponse = $dbh->query("SELECT nomClasse FROM classe;");

    // fetch() -> Prendre ligne par ligne la reponse 
    $lignes = $reponse->fetchAll(PDO::FETCH_COLUMN);
    return $lignes;

}



function insertActivity($activity){

    $dbh = conexBase();

    $reponse = $dbh->exec("INSERT INTO activite(nomActivite) VALUES ('$activity');");
    
    return $reponse;
}



function insertClasse($classe){
    
    $dbh = conexBase();

    $reponse = $dbh->exec("INSERT INTO classe(nomClasse) VALUES ('$classe');");
    
    return $reponse;
}


function modifieActivity($idActivity,$nomActivite) {
    // capture des codes erreurs
    
        // connexion à la base
        $dbh = conexBase();
        // requête pour créer supprimer un article
        $reponse = $dbh->exec("UPDATE activite SET nomActivite='$nomActivite' WHERE idActivite='$idActivity';");
        
    
    // fermeture connexion à la base
    deconexBase($dbh);
    return $reponse;
}

function afficherMotModifier($idActivity){

    $dbh = conexBase();

    $reponse = $dbh->query("SELECT nomActivite FROM activite WHERE idActivite='$idActivity';");

    $article = $reponse->fetch(PDO::FETCH_COLUMN);

    return $article;
}


function deleteActivity($idActivite){

    $dbh = conexBase();

    $reponse = $dbh->exec("DELETE FROM activite WHERE idActivite ='$idActivite';");
    
    return $reponse;

}

?>