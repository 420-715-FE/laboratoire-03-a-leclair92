<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Suppression</h1>
    <?php

    // Création du tableau
    $nombre = [];

    // boucle pour créer le tableau
    for($i = 0; $i < 10 ; $i++){
        $nombreAleatoire = rand(1, 100);
        $nombre[] = $nombreAleatoire;
    }

    ?>
    <h3>Avant</h3>
    <ol>
        <?php
        // boucle pour créer la liste
        foreach($nombre as $elements){
            echo '<li>'.$elements.'</li>';

        }

        ?>
    </ol>

    <h3>Après</h3>
    <?php
    $tableau_modifier = array_splice($nombre, 3,1) ;
?>
    <ol>
        <?php
        // boucle pour créer la liste
        foreach($nombre as $elements){
            echo '<li>'.$elements.'</li>';

        }

        ?>
    </ol>




    

</body>
</html>
