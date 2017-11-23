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
    $chiffre1 = 10;
    $chiffre2 = 20;

    $test = new Affiche($num1); // Ce qui compte c'est que le paramêtre passé $nimportenawaq à la fonction Affiche porte bien le même nom que ce que l'on veut afficher $nimportenawaq = ['valeur1','valeur2']
    $test2 = new Numero ('bonjour', $num2); // Affiche les chiffres
    $test2->addition($chiffre1, $chiffre2); //Additionne les chiffres
     ?>


  </body>

</html>
