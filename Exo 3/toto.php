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
    $nimportenawaq = ['valeur1','valeur2']; // On dédide d'utiliser la fonction d'affichage toute faite située dans class pour afficher d'autre valeurs (valeur 1 et valeur 2 au lieu de test1, test2; test3 comme dans l'exo 1)
    $test = new Affiche($nimportenawaq); // Ce qui compte c'est que le paramêtre passé $nimportenawaq à la fonction Affiche porte bien le même nom que ce que l'on veut afficher $nimportenawaq = ['valeur1','valeur2']

    //Affichage du résultat à l'adresse suivante : http://localhost/POO---Scolaire/Exo%202/toto.php

     ?>


  </body>

</html>
