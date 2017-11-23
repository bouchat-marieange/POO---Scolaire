<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>toto</title>
  </head>

  <body>

    <?php
    require 'class.php';
    require 'class2.php';
    $num1 = [1,2];
    $num2= [5,6];

    $test = new Affiche($num1); // Ce qui compte c'est que le paramêtre passé $nimportenawaq à la fonction Affiche porte bien le même nom que ce que l'on veut afficher $nimportenawaq = ['valeur1','valeur2']
    $test2 = new Numero ('bonjour',
                          'test5',
                          'test3',
                          'test4',
                          'test2');
     ?>


  </body>

</html>
