<?php

function thumb_url(string $path, int $width = 480): string
{
    return 'thumb.php?src=' . rawurlencode($path) . '&w=' . max(100, min(800, $width));
}

function gallery_img(string $path, string $alt, string $class = 'gallery-img', int $width = 480): string
{
    $altEsc = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    $classEsc = htmlspecialchars($class, ENT_QUOTES, 'UTF-8');
    $thumb = htmlspecialchars(thumb_url($path, $width), ENT_QUOTES, 'UTF-8');
    $full = htmlspecialchars($path, ENT_QUOTES, 'UTF-8');

    return '<img data-src="' . $thumb . '" data-full-src="' . $full . '" alt="' . $altEsc . '" class="' . $classEsc . '" decoding="async">';
}

function cert_img(string $path, string $alt): string
{
    $altEsc = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    $thumb = htmlspecialchars(thumb_url($path, 360), ENT_QUOTES, 'UTF-8');
    $full = htmlspecialchars($path, ENT_QUOTES, 'UTF-8');

    return '<img src="' . $thumb . '" data-full-src="' . $full . '" alt="' . $altEsc . '" class="certificate-card__image" loading="lazy" decoding="async">';
}

function profile_img(string $path, string $alt, string $class, int $width, int $height, string $loading = 'lazy'): string
{
    $altEsc = htmlspecialchars($alt, ENT_QUOTES, 'UTF-8');
    $classEsc = htmlspecialchars($class, ENT_QUOTES, 'UTF-8');
    $thumb = htmlspecialchars(thumb_url($path, $width), ENT_QUOTES, 'UTF-8');
    $full = htmlspecialchars($path, ENT_QUOTES, 'UTF-8');
    $loadingEsc = htmlspecialchars($loading, ENT_QUOTES, 'UTF-8');

    return '<img src="' . $thumb . '" data-full-src="' . $full . '" alt="' . $altEsc . '" class="' . $classEsc . '" width="' . $width . '" height="' . $height . '" loading="' . $loadingEsc . '" decoding="async">';
}
