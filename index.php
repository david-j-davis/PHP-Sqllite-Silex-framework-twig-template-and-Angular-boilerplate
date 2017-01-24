<?php

//global variables
// define("DB_HOST", "");
// define("DB_NAME", "");
// define("DB_PORT", "");
// define("DB_USER", "");
// define("DB_PASS", "");

//define timezone for date fields
date_default_timezone_set('America/Los_Angeles');

//Required for composer
require_once("./vendor/autoload.php");

//Require recipe coockbook
include("./app/index.php");

//Initiate Silex: microframework for php: http://silex.sensiolabs.org/doc/master/usage.html
$app = new Silex\Application();

//register twig views path
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

//public assets path
$app['asset_path'] = './public';

//Page Routing
include("./routes.php");

//Debug in development
$app['debug'] = true;

$app->run();
