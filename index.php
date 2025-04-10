<?php
// Include the app configuration
require_once __DIR__ . '/app.php';

// Include the router
require_once __DIR__ . '/router.php';

// Initialize the router
$router = new Router();

// Define routes
require_once __DIR__ . '/routes.php';

// Dispatch the router
$router->dispatch();
?>