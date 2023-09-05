<?php
  //    require "voiture.php";
    require "Autoloader.php";
    Autoloader::register();

    use \app\Controllers\Stagiare;

    $v = new Stagiare("yassine benmansour");
     $v->setFullname();
     echo $v->getFullname();

