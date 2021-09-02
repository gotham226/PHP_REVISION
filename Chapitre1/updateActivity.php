<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('htmlToPhp.inc.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $idActivity = $_GET['idActivite'];

        $motModifier = afficherMotModifier($idActivity);
    ?>

        <form name="tous" method="POST" action="#" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
                <input type="text" name="activity" <?php echo "value=\"$motModifier\""?>/>

            </p>
            <input type="submit" name="envoi" value="Ajouter">
</body>
</html>