<?php

$matrice = [];


// AJOUTEZ VOTRE CODE CI-DESSOUS

for($i = 0; $i < 10 ; $i++){
$matrice[] = [];
    for($j = 0 ; $j < 9 - $i; $j++){
        $matrice[$i][] = " ";
    }
    for($j = 9 - $i; $j < 10 ; $j++){
        $matrice[$i][] = "*";
    }


}

// NE MODIFIEZ RIEN APRÈS CETTE LIGNE

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrice d'étoiles v4</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Matrice d'étoiles v4</h1>
    <table>
        <?php

        foreach ($matrice as $ligne) {
            echo '<tr>';
            foreach ($ligne as $cellule) {
                echo "<td>$cellule</td>";
            }
            echo '</tr>';
        }

        ?>
    </table>
</body>
</html>
