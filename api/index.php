<?php

declare(strict_types=1);

chdir(dirname(__DIR__));

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = ltrim((string) $uri, '/');

if ($path === '') {
    $path = 'index.php';
}

$allowedPages = [
    'index.php',
    'about.php',
    'works.php',
    'experience.php',
    'certificates.php',
    'contact.php',
];

if (!in_array($path, $allowedPages, true)) {
    http_response_code(404);
    echo '404 Not Found';
    exit;
}

$file = dirname(__DIR__) . DIRECTORY_SEPARATOR . $path;

if (!is_file($file)) {
    http_response_code(404);
    echo '404 Not Found';
    exit;
}

require $file;
