<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require('htmlToPhp.inc.php');


    if (isset($_POST['envoi'])) {

        if (isset($_POST['activity']) !="") {
            $activity = filter_input(INPUT_POST, 'activity');

            $retour = insertActivity($activity);
        } else {
            // aucun article sélectionné !
            echo "ERROR";
    }
}       else{

    if(isset($_POST['envoi2'])){
        if (isset($_POST['classe']) != "" ) {
            $classe = filter_input(INPUT_POST, 'classe');

            $retour = insertClasse($classe);
        } else {
            // aucun article sélectionné !
            echo "ERROR";
    }
    }
}
    ?>

<h1>Ajouter </h1>

            <p>Activité:
            <form name="tous" method="POST" action="#" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
                <input type="text" name="activity" />

            </p>
            <input type="submit" name="envoi" value="Ajouter">
            
            <p>Classe:
                <input type="text" name="classe" />
            </p>
            <input type="submit" name="envoi2" value="Ajouter">
            </form>
</body>
</html>