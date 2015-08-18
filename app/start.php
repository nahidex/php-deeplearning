<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;


use Noodlehaus\Config;

use Ace\User\User;
use Ace\Helpers\Hash;
use Ace\Validation\Validator;
use Ace\Middleware\BeforeMiddleware;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');

define('ROOT', dirname(__DIR__));

require ROOT . '/vendor/autoload.php';

$app = new Slim([
    'mode' => file_get_contents(ROOT . '/mode.php'),
    'view' => new Twig(),
    'templates.path' => ROOT . '/app/views'
]);

$app->add(new BeforeMiddleware);


$app->configureMode($app->config('mode'), function () use ($app) {
    $app->config = Config::load(ROOT . "/app/config/{$app->mode}.php");

});

require 'database.php';
require 'routes.php';

$app->auth = false;

$app->container->set('user', function () {
    return new User;
});

$app->container->singleton('hash', function () use ($app) {
    return new Hash($app->config);
});

$app->container->singleton('validation', function () use($app) {
    return new Validator($app->user);
});

//$app->get('/', function () use ($app) {
//    $app->render('home.php');
//});

$view = $app->view();

$view->parserOption = [
    'debug' => $app->config->get('twig.debug')
];
$view->parserExtensions = [
    new TwigExtension()
];

