<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('htmlToPhp.inc.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $idActivity = $_GET['idActivite'];
// traitement de la modification de l'article
if ( isset($_POST['activity'])) {
    $message = "L'article n'a pas été modifié !!!";
    $nomActivite = filter_input(INPUT_POST, 'activity');
    // mise à jour de l'article
    if (isset($_GET['idActivite'])) {
        if ( modifieActivity($idActivity, $nomActivite) ) {
            $message = "L'activite " .  $idActivity . " à été modifié !";
        }
    }
    echo $message;
}
   
?>
</head>
<body>
    <?php 
        


        $motModifier = afficherMotModifier($idActivity);
    ?>

        <form name="tous" method="POST" action="#" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
                <input type="text" name="activity" <?php echo "value=\"$motModifier\""?>/>

            </p>
            <input type="submit" name="envoi" value="Modifier ">
</body>
</html>