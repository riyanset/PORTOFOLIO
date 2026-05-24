<?php

declare(strict_types=1);

$src = $_GET['src'] ?? '';
$width = (int) ($_GET['w'] ?? 480);
$width = max(100, min(800, $width));

if ($src === '' || str_contains($src, '..') || str_contains($src, "\0")) {
    http_response_code(400);
    exit('Invalid source');
}

$root = realpath(__DIR__);
$fullPath = realpath(__DIR__ . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $src));

if ($fullPath === false || $root === false || !str_starts_with($fullPath, $root . DIRECTORY_SEPARATOR)) {
    http_response_code(404);
    exit('Not found');
}

$allowedRoot = realpath(__DIR__ . '/assets/images');
if ($allowedRoot === false || !str_starts_with($fullPath, $allowedRoot . DIRECTORY_SEPARATOR)) {
    http_response_code(403);
    exit('Forbidden');
}

if (!is_file($fullPath) || !is_readable($fullPath)) {
    http_response_code(404);
    exit('Not found');
}

$etag = '"' . md5($fullPath . filemtime($fullPath) . $width) . '"';
header('Cache-Control: public, max-age=604800');
header('ETag: ' . $etag);

if (($_SERVER['HTTP_IF_NONE_MATCH'] ?? '') === $etag) {
    http_response_code(304);
    exit;
}

$info = @getimagesize($fullPath);
if ($info === false) {
    http_response_code(415);
    exit('Unsupported image');
}

[$origW, $origH, $type] = $info;
$mime = $info['mime'] ?? 'application/octet-stream';

if (!function_exists('imagecreatefromjpeg')) {
    header('Content-Type: ' . $mime);
    readfile($fullPath);
    exit;
}

if ($origW <= $width) {
    header('Content-Type: ' . $mime);
    readfile($fullPath);
    exit;
}

$scale = $width / $origW;
$newW = $width;
$newH = (int) round($origH * $scale);

$source = match ($type) {
    IMAGETYPE_JPEG => @imagecreatefromjpeg($fullPath),
    IMAGETYPE_PNG => @imagecreatefrompng($fullPath),
    IMAGETYPE_WEBP => function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($fullPath) : false,
    IMAGETYPE_GIF => @imagecreatefromgif($fullPath),
    default => false,
};

if ($source === false) {
    header('Content-Type: ' . $mime);
    readfile($fullPath);
    exit;
}

$thumb = imagecreatetruecolor($newW, $newH);
if ($type === IMAGETYPE_PNG || $type === IMAGETYPE_GIF) {
    imagealphablending($thumb, false);
    imagesavealpha($thumb, true);
    $transparent = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
    imagefilledrectangle($thumb, 0, 0, $newW, $newH, $transparent);
}

imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newW, $newH, $origW, $origH);
imagedestroy($source);

header('Content-Type: image/jpeg');
imagejpeg($thumb, null, 82);
imagedestroy($thumb);
