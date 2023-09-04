<?php

require "./app/Models/Students.php";

$Student = new Student();
var_dump($Student->search(5));