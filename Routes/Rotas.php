<?php

use App\Controllers\FeedbackController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => [FeedbackController::class, 'formulario'],
    '/feedbacks' => [FeedbackController::class, 'index'],
    '/feedbacks/show' => [FeedbackController::class, 'show'],
    '/feedback/cadastrar' => [FeedbackController::class, 'store'],
    '/feedback/atualizar' => [FeedbackController::class, 'update']
];

if (array_key_exists($uri, $routes)) {
    $controller = new $routes[$uri][0]();
    $metodo = $routes[$uri][1];
    $controller->$metodo();
} else {
    http_response_code(404);
    echo "Página não encontrada!";
}