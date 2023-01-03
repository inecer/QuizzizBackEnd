<?php

use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// Couche Controller
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
    $route->addRoute('GET', '/', 'Ez\Controller\HomeController');
    $route->addRoute('GET', '/questionnaire', 'Ez\Controller\QuestionnaireController');
    $route->addRoute('POST', '/questionnaire', 'Ez\Controller\QuestionnaireController');
    $route->addRoute('GET', '/questions', 'Ez\Controller\QuestionsController');
    $route->addRoute('POST', '/questions', 'Ez\Controller\QuestionsController');
    $route->addRoute('GET', '/reponse', 'Ez\Controller\ReponseController');
    $route->addRoute('POST', '/reponse', 'Ez\Controller\ReponseController');
    $route->addRoute('GET', '/question/{id:\d+}', 'Ez\Controller\QuestionController');
    $route->addRoute('GET', '/questionquestionnaire', 'Ez\Controller\QuestionquestionnaireController');
    $route->addRoute('POST', '/questionquestionnaire', 'Ez\Controller\QuestionquestionnaireController');

});
// Dispatcher -> Couche view
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo "404 Not Found";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $controller = new $handler;
        $controller->setInput($_GET, $_POST, $vars);
        $controller->getOutput();
        // ... call $handler with $vars
        break;
}



