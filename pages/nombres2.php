<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v2</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    

    <h1>Tableau de nombres v2</h1>

    <?php
    $nombre_max = 0;

    if((!isset($_GET['n']))||(!is_numeric($_GET['n']))){
        $nombre_max = 20;
    }else{
        $nombre_max = $_GET['n'];
    }
    // Création du tableau
    $nombre = [];

    // boucle pour créer le tableau
    for($i = 0; $i < $nombre_max * 2 ; $i++){
        if($i % 2 == 0){
            $nombre[] = $i;
        }
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

    <?php echo '<a href="../pages/nombres2.php?n='.($nombre_max + 10).'">Ajouter 10 nombres</a>';?>


</body>
</html>
