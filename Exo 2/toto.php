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
    require 'class.php'; // on a besoin du contenu du fichier class.php pour faire fonctionner la page index.php donc on l'appelle
    require 'class2.php'; //on a besoin du contenu du fichier class2.php pour faire fonctionner la page index.php donc on l'appelle

    $num1 = [1,2];
    $num2 = [5,6];

    $test = new Affiche($num1);
    $test2 = new Numero('bonjour',$num2);
  
     ?>


  </body>

</html>
