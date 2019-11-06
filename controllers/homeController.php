<?php

class homeController{

  public function viewHome()
  {
    // echo "Página Home";
    include_once 'views/home.php';
  }
  public function acao($acao)
  {
    switch ($acao){
      case 'home':
        $this->viewHome();
        break;

      default:
        $this->viewHome();
        break;
    }
  }
}



 ?>
