<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    require('htmlToPhp.inc.php');
    $activite = activitySelect();
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
                        <?php
                        foreach ($activite as $nomActivite) {
                            ?>
                            
                            <tr>
                                <td><?php echo $nomActivite['idActivite']; ?></td> 
                                <td><?php echo $nomActivite['nomActivite']; ?></td>
                                <!-- lien qui transmet a la page updateActivity et supp l'id de l'activite -->
                                <td><a href="./updateActivity.php?idActivite=<?php echo $nomActivite['idActivite'];?>">Editer</a><?php ?></td>
                                <td><a href="./suppActivity.php?idActivite=<?php echo $nomActivite['idActivite'];?>">Supprimer</a><?php ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
</body>
</html>