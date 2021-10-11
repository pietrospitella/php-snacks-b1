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

    ## Snack 2

    // // //Passare come parametri GET name, mail e age 
    // $name = $_GET['name'];
    // $mail = $_GET['mail'];
    // $age = $_GET['age'];
    // //e verificare (cercando i metodi che non conosciamo nella documentazione) che 'name' sia più lungo di 3 caratteri
    // //che mail contenga un punto e una chiocciola 
    // //e che age sia un numero
    // //Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
    
    // if (strlen($name)>3 && strpos($mail,'.') && strpos($mail,'@') && is_numeric($age)){
    //     echo 'Accesso ok';
    // }
    // else {
    //     echo 'Accesso no';
    // }

    ## Snack 3

    // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

    // $posts = [

    //     '10/01/2019' => [
    //         [
    //             'title' => 'Post 1',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 1'
    //         ],
    //         [
    //             'title' => 'Post 2',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 2'
    //         ],
    //     ],
    //     '10/02/2019' => [
    //         [
    //             'title' => 'Post 3',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 3'
    //         ]
    //     ],
    //     '15/05/2019' => [
    //         [
    //             'title' => 'Post 4',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 4'
    //         ],
    //         [
    //             'title' => 'Post 5',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 5'
    //         ],
    //         [
    //             'title' => 'Post 6',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 6'
    //         ]
    //     ],
    // ];

    // foreach ($posts as $key => $day) {
    //     echo '<h1>'.$key.'</h1><br>';
    //     foreach ($day as $key => $singlePost) {
    //         echo '<h2>'.$singlePost['title'].'</h2><br>';
    //         echo '<h3>'.$singlePost['author'].'</h3><br>';
    //         echo '<p>'.$singlePost['text'].'</p><br>';
    //     }
    // }

    ## Snack 4

    // // Creare un array con 15 numeri casuali (da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

    // $randomNums = [];
    // $i=0;

    // while (count($randomNums) < 15) { 
    //     $newNum = rand(1,100);
        
    //     if (!in_array($newNum, $randomNums)) {
    //         $randomNums[] = $newNum;
    //     }
    // }
    // var_dump($randomNums);

    ## Snack 5

    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur doloremque quibusdam, quam accusamus porro et nulla aperiam repellendus. Consequuntur ipsum dolorum earum eum obcaecati aliquid at, ratione maiores natus debitis?';

    echo $paragraph;

    $newPara = explode('.',$paragraph);

    var_dump($newPara);
    ?>
</body>
</html>