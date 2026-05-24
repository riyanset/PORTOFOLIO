<?php
$pageTitle = 'Sertifikat';
$metaDescription = 'Sertifikat dan pelatihan Riyan Setiawan di bidang web development.';
require_once 'includes/image.php';
include 'includes/header.php';

$certificates = [
    ['assets/images/serti1.png', 'Sertifikat Web Development', 'Sertifikat Web Developer', '2021', 'Sertifikat ini menunjukkan kompetensi saya dalam pengembangan website menggunakan HTML, CSS, dan JavaScript dasar.'],
    ['assets/images/serti2.png', 'Sertifikat Pemrograman PHP', 'Sertifikat Pemrograman PHP', '2022', 'Sertifikat ini membuktikan bahwa saya telah menyelesaikan pelatihan pemrograman PHP untuk pengembangan aplikasi web dinamis.'],
    ['assets/images/serti3.png', 'Sertifikat Database Management', 'Sertifikat Database Management', '2022', 'Sertifikat ini menunjukkan kemampuan saya dalam mengelola database menggunakan MySQL untuk aplikasi web.'],
    ['assets/images/serti4.png', 'Sertifikat JavaScript Programming', 'Sertifikat JavaScript Programming', '2023', 'Sertifikat ini membuktikan keahlian saya dalam pemrograman JavaScript untuk pengembangan aplikasi web interaktif.'],
    ['assets/images/serti5.png', 'Sertifikat UI/UX Design', 'Sertifikat UI/UX Design', '2023', 'Sertifikat ini menunjukkan kemampuan saya dalam merancang antarmuka pengguna yang menarik dan pengalaman pengguna yang optimal.'],
    ['assets/images/serti6.png', 'Sertifikat Backend Development', 'Sertifikat Backend Development', '2024', 'Sertifikat ini membuktikan kompetensi saya dalam pengembangan sisi server menggunakan PHP dan framework modern.'],
    ['assets/images/serti7.png', 'Sertifikat Full Stack Developer', 'Sertifikat Full Stack Developer', '2024', 'Sertifikat ini menunjukkan keahlian saya dalam pengembangan aplikasi web secara menyeluruh dari frontend hingga backend.'],
    ['assets/images/serti8.png', 'Sertifikat Jaringan Komputer', 'Sertifikat Jaringan Komputer', '2024', 'Sertifikat ini membuktikan pemahaman saya dalam konfigurasi jaringan, konektivitas, dan infrastruktur jaringan dasar.'],
    ['assets/images/serti9.png', 'Sertifikat REST API Development', 'Sertifikat REST API Development', '2025', 'Sertifikat ini menunjukkan kemampuan saya dalam membangun dan mengintegrasikan layanan web melalui REST API.'],
    ['assets/images/serti10.png', 'Sertifikat Digital Art', 'Sertifikat Digital Art', '2025', 'Sertifikat ini menunjukkan kompetensi saya dalam seni digital, desain visual, dan ekspresi kreatif berbasis teknologi.'],
];
?>

<div class="container">
    <section class="page-panel certificates">
        <h2 class="section__title">Sertifikat Saya</h2>
        <p class="section__lead">Dokumentasi kompetensi di pengembangan web dan teknologi terkait.</p>
        <div class="certificates__grid">
            <?php foreach ($certificates as [$path, $alt, $title, $date, $description]): ?>
            <div class="certificate-card">
                <div class="certificate-card__image-wrapper">
                    <?php echo cert_img($path, $alt); ?>
                </div>
                <div class="certificate-card__content">
                    <h3 class="certificate-card__title"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p class="certificate-card__date"><?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="certificate-card__description"><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
