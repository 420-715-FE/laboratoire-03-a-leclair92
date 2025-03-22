<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v1</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Tableau de nombres v1</h1>

    <?php
    // Création du tableau
    $nombre = [];
    // boucle pour créer le tableau
    for($i = 0; $i <= 100 ; $i++){
        $nombre[] = $i;
    }
    ?>

    <ul>
        <?php
        // boucle pour créer la liste
        foreach($nombre as $elements){
            echo '<li>'.$elements.'</li>';

        } 
        ?>
    </ul>

</body>
</html>
