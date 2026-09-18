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

$perpusShots = [
    ['assets/images/perpus/perpus.png', 'Tampilan Aplikasi E-Perpus'],
];

$sijagaShots = [
    ['assets/images/sijaga/tampilan login.png', 'Tampilan Login SIJAGA'],
    ['assets/images/sijaga/pendaftaran oleh user atau masyarakat.png', 'Pendaftaran Masyarakat'],
    ['assets/images/sijaga/tampilan dashboard admin.png', 'Dashboard Admin'],
    ['assets/images/sijaga/tampilan titik peta .png', 'Tampilan Peta GPS'],
    ['assets/images/sijaga/form pelaporan oleh masyarakat.png', 'Form Pelaporan Masyarakat'],
    ['assets/images/sijaga/tampilan pelaporan oleh admin.png', 'Tampilan Pelaporan Admin'],
    ['assets/images/sijaga/tampilan verifikasi.png', 'Tampilan Verifikasi Laporan'],
];

$bookingShots = [
    ['assets/images/sistem booking/Tampilan beranda user.png', 'Beranda User'],
    ['assets/images/sistem booking/form booking.png', 'Form Booking'],
    ['assets/images/sistem booking/tampilan dashboard admin.png', 'Dashboard Admin'],
    ['assets/images/sistem booking/tampilan dashboard booking admin.png', 'Dashboard Booking Admin'],
    ['assets/images/sistem booking/tampilan keuangan admin.png', 'Keuangan Admin'],
    ['assets/images/sistem booking/tampilan ulasan admin.png', 'Ulasan Admin'],
    ['assets/images/sistem booking/form yang terhubung dengan nama akun instagram vendor lain.png', 'Form Terhubung Instagram Vendor'],
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
            <div class="works-item">
                <button class="btn" onclick="showGallery('karya4')">App E-Perpus</button>
            </div>
            <div class="works-item">
                <button class="btn" onclick="showGallery('karya5')">SIJAGA Gintung</button>
            </div>
            <div class="works-item">
                <button class="btn" onclick="showGallery('karya6')">Sistem Booking Dekorasi</button>
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
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="karya4" class="works-gallery works-gallery--fullwidth" style="display: none;">
            <div class="container">
                <button class="back-button" onclick="showFolders()">← Kembali</button>
                <h3 class="gallery-heading">App E-Perpus</h3>
            </div>
            <div class="gallery-grid gallery-grid--full">
                <?php foreach ($perpusShots as [$path, $caption]): ?>
                <div class="gallery-card">
                    <div style="text-align:center; padding: 1.5rem 0; background: #f0f4ff;">
                        <a href="https://e-perpus-dkxz.vercel.app" target="_blank" rel="noopener noreferrer" style="display:inline-block; background:#000000; color:#ffffff; font-size:2.5rem; font-weight:900; padding:1.2rem 3rem; border-radius:16px; text-decoration:none; letter-spacing:1px; box-shadow:0 8px 25px rgba(0,0,0,0.4);">🔗 Kunjungi E-Perpus</a>
                    </div>
                    <?php echo gallery_img($path, $caption, 'gallery-img gallery-img--full', 640); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="karya5" class="works-gallery works-gallery--fullwidth" style="display: none;">
            <div class="container">
                <button class="back-button" onclick="showFolders()">← Kembali</button>
                <h3 class="gallery-heading">SIJAGA Gintung - Sistem Informasi Jalan Gintung</h3>
            </div>
            <div style="text-align:center; padding: 1rem 0 1.5rem;">
                <a href="https://riyansetiawan.fwh.is/login.php" target="_blank" rel="noopener noreferrer" style="display:inline-block; background:#16a34a; color:#ffffff; font-size:1.5rem; font-weight:800; padding:0.9rem 2.5rem; border-radius:14px; text-decoration:none; letter-spacing:1px; box-shadow:0 6px 20px rgba(22,163,74,0.4);">🔗 Kunjungi SIJAGA</a>
            </div>
            <div class="gallery-grid gallery-grid--full">
                <?php foreach ($sijagaShots as [$path, $caption]): ?>
                <div class="gallery-card">
                    <?php echo gallery_img($path, $caption, 'gallery-img gallery-img--full', 640); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="karya6" class="works-gallery works-gallery--fullwidth" style="display: none;">
            <div class="container">
                <button class="back-button" onclick="showFolders()">← Kembali</button>
                <h3 class="gallery-heading">Sistem Booking Flowliz Decoration</h3>
            </div>
            <div style="text-align:center; padding: 1rem 0 1.5rem;">
                <a href="https://flowlizsdecoration.fwh.is" target="_blank" rel="noopener noreferrer" style="display:inline-block; background:#7c3aed; color:#ffffff; font-size:1.5rem; font-weight:800; padding:0.9rem 2.5rem; border-radius:14px; text-decoration:none; letter-spacing:1px; box-shadow:0 6px 20px rgba(124,58,237,0.4);">🔗 Kunjungi Sistem Booking</a>
            </div>
            <div class="gallery-grid gallery-grid--full">
                <?php foreach ($bookingShots as [$path, $caption]): ?>
                <div class="gallery-card">
                    <?php echo gallery_img($path, $caption, 'gallery-img gallery-img--full', 640); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
