<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
  </head>

  <body>

    <h2>Exo 4</h2>
    <p>
      index.php le même qu'avant,<br>
      toto.php -> envoie à la class une table avec 2 valeurs numériques.<br/>
      class -> pareil;<br/>

      On appelle la même class en lui envoyant des paramètres différents<br/ >d'un endroit différents aussi
      <!-- Bref on utilise la même class qui fait la même chose 'afficher contenu' mais on lui envoie d'autre paramètre qui seront contenu dans une autre page toto.php (valeur1, valeur2). On verra le résultat en affichant la page toto.php -->
    </p>

    <?php
      require 'class.php'; // on a besoin du contenu du fichier class.php pour faire fonctionner la page index.php donc on l'appelle
      $tableau = ['test1','test2','test3'];
      $test = new Affiche($tableau);
      //On instancie la class, on se moque du nom de la variable quand il n'y a qu'un paramètre $tableau  c'est ce qui correspond à $toto dans la fonction situé dans class.php . Le nom du paramètre que l'on passe à la fonction n'a pas d'importance. Les paramètres doivent juste d'être dans le même ordre
      // Créer une instance c'est naître et c'est exécuter la fonction construct. On construit un nouvel objet.
    ?>
  </body>

</html>
