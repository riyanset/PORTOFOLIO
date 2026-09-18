<?php
$pageTitle = 'Sertifikat';
$metaDescription = 'Sertifikat dan pelatihan Riyan Setiawan di bidang web development.';
require_once 'includes/image.php';
include 'includes/header.php';

$certificates = [
    ['assets/images/serti1.png', 'Sertifikat Web Development'],
    ['assets/images/serti2.png', 'Sertifikat Pemrograman PHP'],
    ['assets/images/serti3.png', 'Sertifikat Database Management'],
    ['assets/images/serti4.png', 'Sertifikat JavaScript Programming'],
    ['assets/images/serti5.png', 'Sertifikat UI/UX Design'],
    ['assets/images/serti6.png', 'Sertifikat Backend Development'],
    ['assets/images/serti7.png', 'Sertifikat Full Stack Developer'],
    ['assets/images/serti8.png', 'Sertifikat Jaringan Komputer'],
    ['assets/images/serti9.png', 'Sertifikat REST API Development'],
    ['assets/images/serti10.png', 'Sertifikat Digital Art'],
    ['assets/images/sertifikat tambahan/Screenshot 2026-09-18 191550.png', 'Sertifikat Seminar AI Smart Solution for Indonesia Future'],
    ['assets/images/sertifikat tambahan/Screenshot 2026-09-18 191723.png', 'Sertifikat Seminar Beyond Technical Skills Leadership AI'],
    ['assets/images/sertifikat tambahan/Screenshot 2026-09-18 191800.png', 'Sertifikat Seminar Empowering 21st Century Digital Talents AI'],
    ['assets/images/sertifikat tambahan/WhatsApp Image 2026-09-18 at 19.09.06.jpeg', 'Piagam Penghargaan Panitia LKPG XIII Pramuka MAN Mauk'],
    ['assets/images/sertifikat tambahan/WhatsApp Image 2026-09-18 at 19.09.07.jpeg', 'Piagam Peserta Lomba KANIRA V Karya Seni Pramuka Banten'],
    ['assets/images/sertifikat tambahan/WhatsApp Image 2026-09-18 at 19.09.08.jpeg', 'Sertifikat Peserta Lomba Karikatur SEMATA 2017 UNTIRTA'],
    ['assets/images/sertifikat tambahan/WhatsApp Image 2026-09-18 at 19.11.18 (1).jpeg', 'Piagam Peserta LCT VI PMR UIN Syarif Hidayatullah'],
    ['assets/images/sertifikat tambahan/WhatsApp Image 2026-09-18 at 19.11.18.jpeg', 'Sertifikat Juara 1 Lomba Lukis Tong Sampah LCT VI PMR'],
];
?>

<div class="container">
    <section class="page-panel certificates">
        <h2 class="section__title">Sertifikat Saya</h2>
        <p class="section__lead">Dokumentasi kompetensi di pengembangan web dan teknologi terkait.</p>
        <div class="certificates__grid">
            <?php foreach ($certificates as [$path, $alt]): ?>
            <div class="certificate-card">
                <div class="certificate-card__image-wrapper">
                    <?php echo cert_img($path, $alt); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
