<?php 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../views');
$twig   = new Twig_Environment($loader);
//$app    = new \Slim\App; 
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c       = new \Slim\Container($configuration);
$app     = new \Slim\App($c);
$app->get('/', function (Request $request, Response $response) 
{
	global $twig;
	echo $twig->render('index.html');

});
$app->run();
 ?>