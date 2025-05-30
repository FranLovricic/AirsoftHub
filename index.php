<?php

require_once './pmp/loader.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = trim($requestUri, '/');

// If no specific path is given, use 'home' as default
$controllerName = $request ?: 'home';

// Path to controller file
$controllerFile = __DIR__ . "/controllers/{$controllerName}.php";

// Load the controller if it exists
if (file_exists($controllerFile)) {
    include $controllerFile;
} else {
    // Controller not found – show 404
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
}


?>
