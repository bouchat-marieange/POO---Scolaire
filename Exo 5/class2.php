<?php
  Class Numero{
    public $boite1; // récupère dans $boite1 uniquement le contenu du tableau 1 peut importe son nom $num1
    public $boite2; // récupère dans $boite2 uniquement le contenu du tableau 2 peut importe son nom $num2

    function __construct ($boite1, $boite2){ // Constructeur de la fonction
      $this ->boulanger($boite1, $boite2); //this indique qu'il faut regarder dans toute la class
    }

    public function boulanger($gateau1, $gateau2){ //Chaque fois que cette fonction va s'exécuter avec un paramètre ($toto ou autres)
        var_dump($gateau1);
        echo'<br/>';
        var_dump($gateau1);
        echo'<br/>';
      }

      public function addition($num1, $num2){
        echo $num1 + $num2;
      }
    }
?>
