<?php
$pageTitle = 'Karya';
$metaDescription = 'Portofolio karya Riyan Setiawan: aplikasi web, lukisan, dan fotografi.';
require_once 'includes/image.php';
include 'includes/header.php';

$maintenanceShots = [
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142625.png', 'Dashboard Utama Aplikasi'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142704.png', 'Halaman Manajemen Aset'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142802.png', 'Form Pemeliharaan Aset'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142841.png', 'Monitoring Kondisi Aset'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142914.png', 'Laporan Pemeliharaan Aset'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142951.png', 'Jadwal Pemeliharaan Berkala'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 143024.png', 'Database Inventaris Aset'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 143230.png', 'Riwayat Pemeliharaan Aset'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 145229.png', 'Sistem Notifikasi Pemeliharaan'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 153255.png', 'Pengaturan Sistem Aplikasi'],
    ['assets/images/aplikasi web maintenance/Screenshot 2025-12-04 153928.png', 'Analytics & Statistik Aset'],
];

$lukisan = [
    ['assets/images/lukisan/FB_IMG_15276166772018941.jpg', 'Lukisan Ekspresif Abstrak'],
    ['assets/images/lukisan/FB_IMG_15276166872239118.jpg', 'Lukisan Pemandangan Alam'],
    ['assets/images/lukisan/IMG_20170721_103525.jpg', 'Lukisan Potret Wajah'],
    ['assets/images/lukisan/IMG_20170909_171609_943.jpg', 'Lukisan Still Life'],
    ['assets/images/lukisan/IMG20170805115633.jpg', 'Lukisan Cat Air Warna-warni'],
    ['assets/images/lukisan/IMG20180707133135.jpg', 'Lukisan Cat Minyak Klasik'],
];

$fotografi = [
    ['assets/images/jepretan/_MG_3025 (1).jpg', 'Dokumentasi Foto 1'],
    ['assets/images/jepretan/_MG_3034 (1).jpg', 'Dokumentasi Foto 2'],
    ['assets/images/jepretan/_MG_3045.jpg', 'Dokumentasi Foto 3'],
    ['assets/images/jepretan/_MG_5540.jpg', 'Dokumentasi Foto 4'],
    ['assets/images/jepretan/_MG_5541.jpg', 'Dokumentasi Foto 5'],
    ['assets/images/jepretan/20161007151030__MG_5719.jpg', 'Dokumentasi Foto 6'],
    ['assets/images/jepretan/20161007151202__MG_5721 (2).jpg', 'Dokumentasi Foto 7'],
    ['assets/images/jepretan/IMG_4033.jpg', 'Dokumentasi Foto 8'],
    ['assets/images/jepretan/IMG_4034.jpg', 'Dokumentasi Foto 9'],
    ['assets/images/jepretan/IMG_4038 (1).jpg', 'Dokumentasi Foto 10'],
    ['assets/images/jepretan/IMG_4318.jpg', 'Dokumentasi Foto 11'],
    ['assets/images/jepretan/IMG_4323.jpg', 'Dokumentasi Foto 12'],
    ['assets/images/jepretan/IMG_4332.jpg', 'Dokumentasi Foto 13'],
];
?>

<div class="container">
    <section class="page-panel works">
        <h2 class="section__title">Karya Saya</h2>
        <p class="section__lead">Proyek digital, karya seni lukis, dan dokumentasi fotografi.</p>

        <div class="works-buttons" id="worksButtons">
            <div class="works-item">
                <button class="btn" onclick="showGallery('karya1')">Aplikasi Web Maintenance</button>
            </div>
            <div class="works-item">
                <button class="btn" onclick="showGallery('karya2')">KARYA SENI LUKIS</button>
            </div>
            <div class="works-item">
                <button class="btn" onclick="showGallery('karya3')">FOTOGRAFI</button>
            </div>
        </div>

        <div id="karya1" class="works-gallery works-gallery--fullwidth" style="display: none;">
            <div class="container">
                <button class="back-button" onclick="showFolders()">← Kembali</button>
                <h3 class="gallery-heading">Aplikasi Web Maintenance & Pemeliharaan Aset</h3>
            </div>
            <div class="gallery-grid gallery-grid--full">
                <?php foreach ($maintenanceShots as [$path, $caption]): ?>
                <div class="gallery-card">
                    <?php echo gallery_img($path, $caption, 'gallery-img gallery-img--full', 640); ?>
                    <p class="gallery-text"><?php echo htmlspecialchars($caption, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="karya2" class="works-gallery" style="display: none;">
            <button class="back-button" onclick="showFolders()">← Kembali</button>
            <h3 class="gallery-heading">KARYA SENI LUKIS</h3>
            <div class="gallery-grid">
                <?php foreach ($lukisan as [$path, $caption]): ?>
                <div class="gallery-card">
                    <?php echo gallery_img($path, $caption); ?>
                    <p class="gallery-text"><?php echo htmlspecialchars($caption, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="karya3" class="works-gallery" style="display: none;">
            <button class="back-button" onclick="showFolders()">← Kembali</button>
            <h3 class="gallery-heading">FOTOGRAFI</h3>
            <div class="gallery-grid">
                <?php foreach ($fotografi as [$path, $caption]): ?>
                <div class="gallery-card">
                    <?php echo gallery_img($path, $caption); ?>
                    <p class="gallery-text"><?php echo htmlspecialchars($caption, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
