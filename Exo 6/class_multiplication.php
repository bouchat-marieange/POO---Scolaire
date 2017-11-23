<?php
  Class Multiplication
  {
    public $tableau;

    // Pas de construct car pas de pararmètres par default. Donc instancie directement la class dans une variable.

      public function boucle($tableau)
      {
        for($i = 0 ; $i <(count($tableau))-1 ; $i++) // $i <(count($tableau))-1 pour éviter un message d'erreur car dans l'exécution de la boucle on passe toute les valeurs en revue et on additionne 1 à la dernière valeur d'index et on donc on arrive à un index qui n'existe pas, donc entre parenthèse puis -1
        {
          echo $tableau[$i];
          echo ' x ';
          echo $tableau[$i+1];
          echo ' = ';
          echo $tableau[$i] * $tableau[$i+1];
          echo'<br/>';
        }
      }
    }
?>
