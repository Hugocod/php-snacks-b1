<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        .partite{
            display: flex; 
            font-family: sans-serif;
          
        }

        h1{
          margin: 0 0.4rem;
        }

    </style>

</head>
<body>

    <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        /*  Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
        Ogni array avrà una squadra di casa e una squadra ospite,
        punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 
        */

       
        
       /*  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. */
        $partite = [

          [
              'squadraDiCasa' => 'Milano',
              'squadraOspite' => 'Virtus Bologna',
              'puntiSDC' => '70',
              'puntiSO' => '25',
          ]
          ,
          [
                'squadraDiCasa' => 'Reyer Marte',
                'squadraOspite' => 'Stella Verde',
                'puntiSDC' => '10',
                'puntiSO' => '95',
          ]
          ,
          [
                'squadraDiCasa' => 'Saturno',
                'squadraOspite' => 'Stella Apollo',
                'puntiSDC' => '20',
                'puntiSO' => '15',
          ]
          ,
          [
                'squadraDiCasa' => 'Reyer Svezia',
                'squadraOspite' => 'Stella Sofia',
                'puntiSDC' => '10',
                'puntiSO' => '35',
          ]

          ];
    
    ?>

<!-- Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  -->

<div>
    <?php 
     
    for ($i=0; $i < count($partite) ; $i++) { 

        echo 
        '<div class="partite" >'.
            '<h1>' .$partite[$i]['squadraDiCasa']. ' - '. '</h1>'.
            '<h1>'. $partite[$i]['squadraOspite']. ' | '. '</h1>'.
            '<h1>'. $partite[$i]['puntiSDC']. ' - '. '</h1>'.
            '<h1>'. $partite[$i]['puntiSO']. '</h1>'. 
        '</div>' ;
     
    }
    
    ?>
</div>



    

</body>
</html>