<?php

require_once('../ClassLibraries/MainClass.php');
$mainPlug = new mainClass();



  $result = $mainPlug->fetchInput('HDP91643723');

  print_r($result['your_name']);
