<?php
    require "./app/Models/Students.php";

    $Student = new Student();

    $Student->setNom("hamid");
    $Student->setPrenom("bennani");
    $Student->setAge(22);
    $Student->setEmail("benani@gmail.com");
    $Student->setPassword(1000);

    print_r($Student->create());
