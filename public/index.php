<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| 1. Autoload Composer
|--------------------------------------------------------------------------
*/

require_once dirname(__DIR__) . '/vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| 2. Chargement des variables d'environnement
|--------------------------------------------------------------------------
*/

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


/*
|--------------------------------------------------------------------------
| 3. Connexion à la base de données
|--------------------------------------------------------------------------
*/

$database = require dirname(__DIR__) . '/config/database.php';

$database([
    'driver' => $_ENV['DB_DRIVER'],
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT'],
    'database' => $_ENV['DB_DATABASE'],
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD'],
]);


/*
|--------------------------------------------------------------------------
| 4. Conteneur de dépendances
|--------------------------------------------------------------------------
*/

$container = require dirname(__DIR__) . '/config/container.php';


/*
|--------------------------------------------------------------------------
| 5. Configuration des routes
|--------------------------------------------------------------------------
*/

use FastRoute\Dispatcher;
use function FastRoute\simpleDispatcher;

$dispatcher = simpleDispatcher(
    require dirname(__DIR__) . '/routes/web.php'
);


/*
|--------------------------------------------------------------------------
| 6. Récupération de la requête HTTP
|--------------------------------------------------------------------------
*/

$httpMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$uri = $_SERVER['REQUEST_URI'] ?? '/';

$uri = parse_url($uri, PHP_URL_PATH);


/*
|--------------------------------------------------------------------------
| 7. Dispatch de la route
|--------------------------------------------------------------------------
*/

$routeInfo = $dispatcher->dispatch(
    $httpMethod,
    $uri
);


/*
|--------------------------------------------------------------------------
| 8. Traitement de la route
|--------------------------------------------------------------------------
*/

switch ($routeInfo[0]) {

    /*
    |--------------------------------------------------------------------------
    | Route non trouvée
    |--------------------------------------------------------------------------
    */

    case Dispatcher::NOT_FOUND:

        http_response_code(404);

        echo json_encode([
            'error' => 'Route non trouvée.',
        ]);

        break;


    /*
    |--------------------------------------------------------------------------
    | Méthode HTTP non autorisée
    |--------------------------------------------------------------------------
    */

    case Dispatcher::METHOD_NOT_ALLOWED:

        http_response_code(405);

        echo json_encode([
            'error' => 'Méthode HTTP non autorisée.',
        ]);

        break;


    /*
    |--------------------------------------------------------------------------
    | Route trouvée
    |--------------------------------------------------------------------------
    */

    case Dispatcher::FOUND:

        $handler = $routeInfo[1];
        $variables = $routeInfo[2];

        [$controllerClass, $method] = $handler;

        $controller = $container->get($controllerClass);


        /*
        |--------------------------------------------------------------------------
        | GET /terrains
        |--------------------------------------------------------------------------
        */

        if (
            $httpMethod === 'GET'
            && $uri === '/terrains'
        ) {
            $result = $controller->$method();

            header('Content-Type: application/json');

            echo json_encode($result);

            break;
        }


        /*
        |--------------------------------------------------------------------------
        | POST /reservations
        |--------------------------------------------------------------------------
        */

        if (
            $httpMethod === 'POST'
            && $uri === '/reservations'
        ) {
            $input = json_decode(
                file_get_contents('php://input'),
                true
            );

            if (!is_array($input)) {
                http_response_code(400);

                echo json_encode([
                    'error' => 'Les données reçues sont invalides.',
                ]);

                break;
            }


            /*
            |--------------------------------------------------------------------------
            | Création du DTO
            |--------------------------------------------------------------------------
            */

            $dto = new \App\DTO\CreateReservationDTO(
                terrainId: (int) ($input['terrain_id'] ?? 0),
                clientNom: (string) ($input['client_nom'] ?? ''),
                dateDebut: (string) ($input['date_debut'] ?? ''),
                dateFin: (string) ($input['date_fin'] ?? ''),
            );


            /*
            |--------------------------------------------------------------------------
            | Appel du Controller
            |--------------------------------------------------------------------------
            */

            try {

                $result = $controller->$method($dto);

                http_response_code(201);

                header('Content-Type: application/json');

                echo json_encode($result);

            } catch (\Throwable $exception) {

                http_response_code(400);

                header('Content-Type: application/json');

                echo json_encode([
                    'error' => $exception->getMessage(),
                ]);
            }

            break;
        }


        /*
        |--------------------------------------------------------------------------
        | Route trouvée mais non gérée
        |--------------------------------------------------------------------------
        */

        http_response_code(500);

        echo json_encode([
            'error' => 'Route non gérée.',
        ]);

        break;
}
