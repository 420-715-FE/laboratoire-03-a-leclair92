<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>FizzBuzz</h1>

    <?php
    // Création du tableau
    $fizzBuzz = [];
    $resultat = '';
    // boucle pour créer le tableau
    for($i = 1; $i <= 100 ; $i++){
        $fizzBuzz[] = $i;
    }
    ?>

    <ul>
        <?php
        // boucle pour créer la liste
        foreach($fizzBuzz as $elements){
            if(($elements % 3 == 0) && ($elements % 5 == 0)){
                $resultat = 'FizzBuzz';
                echo '<li>'.$resultat.'</li>';

            }
            elseif(($elements % 3 == 0)){

                $resultat = 'Fizz';
                echo '<li>'.$resultat.'</li>';
            }
            elseif(($elements % 5 == 0)){

                $resultat = 'Buzz';
                echo '<li>'.$resultat.'</li>';
            }
            else{
                echo '<li>'.$elements.'</li>';
            }

        } 
        ?>
</body>
</html>
