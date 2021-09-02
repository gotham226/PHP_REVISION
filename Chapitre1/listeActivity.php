<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require('htmlToPhp.inc.php');
    $activite = activitySelect();

    // récupération de l'id du formulaire
    if (isset($_GET['idActivite'])) {
        // id de l'article sélectionné
        $idActivite = filter_input(INPUT_GET, 'idActivite');
        $activites = deleteActivity($idActivite);
        
        
    } else {
        // aucun article sélectionné !
        $idActivite = 0;
    }

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
                    <thead>     
                        <tr>
                            <th>ID</th>
                            <th>Activité</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form name="tous" method="POST" action="#" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
                        <?php
                        foreach ($activite as $nomActivite) {
                            ?>
                            
                            <tr>
                                <td><?php echo $nomActivite['idActivite']; ?></td> 
                                <td><?php echo $nomActivite['nomActivite']; ?></td>
                                <!-- lien qui transmet a la page updateActivity et supp l'id de l'activite -->
                                <td><a href="./updateActivity.php?idActivite=<?php echo $nomActivite['idActivite'];?>">Editer</a><?php ?></td>
                                <td><a href="./listeActivity.php?idActivite=<?php echo $nomActivite['idActivite'];?>">Supprimer</a><?php ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </form>
                    </tbody>
                </table>
</body>
</html>