<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/bookings/create', function() use ($app){
	return $app['twig']->render('base.html.twig');
});

//Register twig and define that “views” will become the storage folder of our html.twig files.
$app->register(new Silex\Provider\TwigServiceProvider(), array (
	'twig.path' => __DIR__.'/../views',
));

$app->run();

?>