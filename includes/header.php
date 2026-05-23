<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$pageTitle = $pageTitle ?? 'Portofolio';
$metaDescription = $metaDescription ?? 'Portofolio Riyan Setiawan — Mahasiswa Teknik Informatika, fotografer, dan seniman.';
$navItems = [
    'index.php'       => 'Beranda',
    'about.php'       => 'Tentang',
    'works.php'       => 'Karya',
    'experience.php'  => 'Pengalaman',
    'certificates.php'  => 'Sertifikat',
    'contact.php'     => 'Kontak',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?> | Riyan Setiawan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<a class="skip-link" href="#main-content">Lewati ke konten</a>
<header class="site-header">
    <div class="site-header__inner">
        <a href="index.php" class="site-header__brand">
            <span class="site-header__name">Riyan Setiawan</span>
            <span class="site-header__tagline">Mahasiswa Teknik Informatika · Fotografer & Seniman</span>
        </a>
        <button type="button" class="nav-toggle" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="site-nav">
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
        </button>
        <nav class="site-nav" id="site-nav" aria-label="Navigasi utama">
            <ul class="nav__list">
                <?php foreach ($navItems as $href => $label): ?>
                <li class="nav__item">
                    <a href="<?php echo $href; ?>"
                       class="nav__link<?php echo $currentPage === $href ? ' nav__link--active' : ''; ?>">
                        <?php echo $label; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
<main id="main-content" class="site-main">
