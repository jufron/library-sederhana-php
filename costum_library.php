<?php

require_once __DIR__ .'/vendor/autoload.php';

use jufron\library\Student;
// use jufron\Student;

$student1 = new Student('jufron tamo ama');
var_dump($student1->sayHello('jufron'));


$student2 = new Student('erik ebsan tenis');
var_dump($student2->sayHello('erik'));

