<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks b1</title>
</head>
<body>
    <?php 
    
    ## Snack 1

    //Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.

    // $matches = [
    //     [
    //         'homeTeam' => 'Olimpia Milano',
    //         'visitTeam' => 'Cantù',
    //         'homePoints' => 55,
    //         'visitPoints' => 60,
    //     ],
    //     [
    //         'homeTeam' => 'Venezia',
    //         'visitTeam' => 'Virtus Bologna',
    //         'homePoints' => 61,
    //         'visitPoints' => 74,
    //     ],
    //     [
    //         'homeTeam' => 'Dinamo Sassari',
    //         'visitTeam' => 'Reggiana',
    //         'homePoints' => 93,
    //         'visitPoints' => 72,
    //     ],
    //     [
    //         'homeTeam' => 'Giromondo Spoleto',
    //         'visitTeam' => 'Mens Sana Siena',
    //         'homePoints' => 80,
    //         'visitPoints' => 102,
    //     ]
        
    // ];
    
    // //Stampiamo a schermo tutte le partite con questo schema.
    // //Olimpia Milano - Cantù | 55-60

    // for ($i=0; $i < count($matches) ; $i++) { 
    //     echo '<h1>'.$matches[$i]['homeTeam'].' - '.$matches[$i]['visitTeam'].' | '.$matches[$i]['homePoints'].' - '.$matches[$i]['visitPoints'].'</h1>';
    // }

    // ## Snack 2

    // //Passare come parametri GET name, mail e age 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    //e verificare (cercando i metodi che non conosciamo nella documentazione) che 'name' sia più lungo di 3 caratteri
    //che mail contenga un punto e una chiocciola 
    //e che age sia un numero
    //Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
    
    if (strlen($name)>3 && strpos($mail,'.') && strpos($mail,'@') && is_numeric($age)){
        echo 'Accesso ok';
    }
    else {
        echo 'Accesso no';
    }



    ?>
</body>
</html>