<?php
//include main functions file
include("inc/functions.php");
//whatever other logic

//alternatively place these in routes.php if you want
$theleast = new GenericClass("Begginners Club");
$theleast->setSource("Joe Blow");
$theleast->addDescription("Just another description of something");

$result = Render::displayResults($theleast);
// echo '<pre>';
// print_r($result);
// echo '</pre>';
