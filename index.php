<?php
      require "./app/Models/Students.php";

      $Student = new Student();
$Student->setNom("oussama");
$Student->setPrenom("binsss");
$Student->setAge(92);
$Student->setEmail("bnissss@gmail.com");
$Student->setPassword(798838897);

print_r($Student->Update(4));