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

$reponse = $dbh->query("SELECT nomActivite FROM activite;");

// fetch() -> Prendre ligne par ligne la reponse 
$lignes = $reponse->fetchAll(PDO::FETCH_COLUMN);
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



?>