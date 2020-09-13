<?php

//include files that contains classes and namespace declaration

require 'Classes/Animals/Cat/Bombay.php';
require 'Classes/Animals/Dog/Beagle.php';
require 'Classes/Animals/Dinosaur/Tyrannosaurus.php';
require 'Classes/App.php';

//read namespaces declared in required file
use Classes\Animals\Cat\Bombay as Bombay1;
use Classes\Animals\Dog\Beagle as Beagle1;
use Classes\Animals\Dinosaur\Tyrannosaurus as Tyrannosaurus1;
use Classes\App;

//randomise classes array
$arr=['Classes\Animals\Cat\Bombay','Classes\Animals\Dog\Beagle','Classes\Animals\Dinosaur\Tyrannosaurus'];
$random = $arr[array_rand($arr)];
$randomClass = new $random;

//gives random input to final App class
$app=new App();
echo $app->randomViewAction($randomClass);

