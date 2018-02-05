<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->render($response, 'index.twig', [
        'args' => $args
    ]);
})->setName('index');

$app->post('/login', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/login' route");
    $parsedBody = $request->getParsedBody();
    $parsedBody['isValide'] = ($parsedBody['email'] === "hichem@gmail.com" && $parsedBody['password'] ==="1234");


        return $this->view->render($response, 'login.twig', [
            'parsedBody' => $parsedBody]);
});
