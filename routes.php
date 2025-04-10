<?php
// Include common configurations and functions
require_once __DIR__ . '/app.php';

// Define application routes
$router->add('GET', '/', function () use ($theme_path) {
    include $theme_path . 'home.php';
});

$router->add('GET', '/about', function () use ($theme_path) {
    include $theme_path . 'about.php';
});

$router->add('GET', '/contact', function () use ($theme_path) {
    include $theme_path . 'contact.php';
});

$router->add('GET', '/blog', function () use ($theme_path) {
    include $theme_path . 'blog.php';
});

$router->add('GET', '/blog-details', function () use ($theme_path) {
    include $theme_path . 'blog-details.php';
});

$router->add('GET', '/portfolio', function () use ($theme_path) {
    include $theme_path . 'portfolio.php';
});

$router->add('GET', '/services', function () use ($theme_path) {
    include $theme_path . 'services.php';
});

$router->add('GET', '/service-details', function () use ($theme_path) {
    include $theme_path . 'service-details.php';
});
?>