<?php
  Class Affiche{
    public $toto;

    function __construct ($toto){ // Constructeur de la fonction
      $this ->boucle($toto); //this indique qu'il faut regarder dans toute la class
    }

    public function boucle($toto){ //Chaque fois que cette fonction va s'exécuter avec un paramètre ($toto ou autres)
      for($i = 0 ; $i < count($toto); $i++){
        echo $toto[$i];
        echo'<br/>';

      }
    }
  }
?>
