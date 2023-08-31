<?php
      require "./app/Models/Students.php";

      $Student = new Student();

      $Student->destroy(1);