<?php
  Class Afficher
  {
    public $tableau;

    public function __construct ($tableau){
      $this->afficher($tableau);
    }

    public function afficher($tableau)
    {
      for($i = 0 ; $i < count($tableau); $i++)
      {
        echo $tableau[$i];
        echo'<br/>';
      }
    }
  }
?>
