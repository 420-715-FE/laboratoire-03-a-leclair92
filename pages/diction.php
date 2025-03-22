<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices de diction</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>
    <h1>Exercice de diction</h1>
    <?php

    $mon_tableau = [
        'Les chaussettes de l\'archiduchesse sont-elles sèches, archi-sèches ?',
        'Ton thé t\'a-t-il ôté ta toux ?',
        'Si mon tonton tond ton tonton, ton tonton sera tondu.',
        'Cinq chiens chassent dans un champ.',
        'Un pâtissier qui pâtissait chez un tapissier qui tapissait',
        'Le ver vert va vers le verre.',
        'Dors-tu, tortue tordue? Tu dors, tordue tortue.',
        'Trois tortues trottent sur un trottoir.',
        'Didon dîna, dit-on, du dos d\'un dodu dindon.',
        'Trois très gros, gras, grands rats gris grattent.',
        ];
        
    $elementAleatoire = $mon_tableau[array_rand($mon_tableau)];

    echo $elementAleatoire;

    ;?>
</body>
</html>
