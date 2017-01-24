<?php

//you must define a variable inside the use() containing any data that you want to pass in
//in this case the $result variable is loading data defined in /app/index.php
//alternately call functions from here like
//$data_from_function = retrieve_data_function();

//Define index route
$app->get('/', function() use($app, $result) {
	return $app['twig']->render('index.html.twig', array(
		'data' => $result
	));
});
