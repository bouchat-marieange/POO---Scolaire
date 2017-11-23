<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
  </head>

  <body>

    <h2>Exo 6</h2>
    <p>
      Class:<br/>
      - additionner<br/>
      -soustraction<br/>
      - division<br/>
      - multiplication<br/>
      <br/>
      Déclarer 4 variables -> partern:<br/>
      (les valeurs dans un tableau)<br/>

      ex:<br/>
      ([1,2,3,4])<br/>

      On appelle la class pour additionner les valerus:<br/>
      $add = new class add ();<br/>
      $add -> additionner ($valeur);<br/>
      <br/>
      (pareil pour les 3  autres)<br/>
    </p>

    <?php
      $tableau = [40,10,5,2];

      require 'class_afficher.php';
      require 'class_addition.php';
      require 'class_division.php';
      require 'class_multiplication.php';
      require 'class_soustraction.php';


      echo '<h3>1. Afficher le contenu du tableau</h3>';
      $test = new Afficher($tableau);
      // $test->afficher($tableau); // Quand on instancie la classe, il affiche déja le résultat, inutile de l'afficher une seconde fois


      echo '<h3>2. Additionner les valeurs contenues dans le tableau</h3>';
      $test = new Addition($tableau);
      $test->boucle($tableau);


      echo '<h3>3. Soustraire les valeurs contenues dans le tableau</h3>';
      $test = new Soustraction($tableau);
      $test->boucle($tableau);


      echo '<h3>4. Diviser les valeurs contenues dans le tableau</h3>';
      $test = new Division($tableau);
      $test->boucle($tableau);


      echo '<h3>4. Multiplier les valeurs contenues dans le tableau</h3>';
      $test = new Multiplication($tableau);
      $test->boucle($tableau);

      ?>
  </body>

</html>
