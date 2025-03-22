<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Fibonacci</h1>
    <?php
    $id = 0;
    $erreur = false;

    if((!isset($_GET['id']))||(!is_numeric($_GET['id']))){
        $id = 0; 
        $erreur = 'Vous devez mettre un chiffre !';
       
    }elseif(($_GET['id'] < 0)||($_GET['id'] > 100)){
        $id = 0; 
        $erreur = 'Vous devez mettre un chiffre entre 1 et 100 !';
    }
    else{
        $id = $_GET['id'];
        // Création du tableau
        $nombre_1 = 0;
        $nombre_2 = 1;
        $resultat = 0;

        // boucle pour créer le tableau
        for($i = 0; $i <= 100 ; $i++){
            $resultat = $nombre_1 + $nombre_2;
            $nombre_1 = $nombre_2;
            $nombre_2 = $resultat;
            $fibonnaci[] = $resultat;
        }
        if($id > 0){
            echo '<a href="../pages/fibonacci.php?id='.($id - 1).'"">- </a>'; 
        }
        
        echo ''.$fibonnaci[$id].'';
        
        if($id < 100){
            echo '<a href="../pages/fibonacci.php?id='.($id + 1 ).'""> +</a>'; 
        }
    }
  echo $erreur;
    ?>
</body>
</html>
