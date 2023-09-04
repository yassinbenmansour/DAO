<?php
  //    require "voiture.php";
    require "Autoloader.php";

    Autoloader::register();
    $v = new voiture("YELLOW");
    echo $v->getColor();

