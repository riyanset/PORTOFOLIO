<?php
$pageTitle = 'Karya';
$metaDescription = 'Portofolio karya Riyan Setiawan: aplikasi web, lukisan, dan fotografi.';
include 'includes/header.php';
?>

<div class="container">
    <section class="page-panel works">
        <h2 class="section__title">Karya Saya</h2>
        <p class="section__lead">Proyek digital, karya seni lukis, dan dokumentasi fotografi.</p>
        
        <!-- Folder Buttons -->
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

        <!-- Karya 1 Gallery -->
        <div id="karya1" class="works-gallery works-gallery--fullwidth" style="display: none;">
            <div class="container">
                <button class="back-button" onclick="showFolders()">← Kembali</button>
                <h3 class="gallery-heading">Aplikasi Web Maintenance & Pemeliharaan Aset</h3>
  </div>
            <div class="gallery-grid gallery-grid--full">
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142625.png" alt="Dashboard Aplikasi" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Dashboard Utama Aplikasi</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142704.png" alt="Manajemen Aset" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Halaman Manajemen Aset</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142802.png" alt="Pemeliharaan Aset" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Form Pemeliharaan Aset</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142841.png" alt="Monitoring Aset" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Monitoring Kondisi Aset</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142914.png" alt="Laporan Maintenance" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Laporan Pemeliharaan Aset</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 142951.png" alt="Jadwal Maintenance" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Jadwal Pemeliharaan Berkala</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 143024.png" alt="Data Aset" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Database Inventaris Aset</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 143230.png" alt="Riwayat Maintenance" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Riwayat Pemeliharaan Aset</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 145229.png" alt="Notifikasi Maintenance" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Sistem Notifikasi Pemeliharaan</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 153255.png" alt="Pengaturan Aplikasi" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Pengaturan Sistem Aplikasi</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/aplikasi web maintenance/Screenshot 2025-12-04 153928.png" alt="Analytics Dashboard" class="gallery-img gallery-img--full">
                    <p class="gallery-text">Analytics & Statistik Aset</p>
                </div>
            </div>
        </div>

        <!-- Karya 2 Gallery -->
        <div id="karya2" class="works-gallery" style="display: none;">
            <button class="back-button" onclick="showFolders()">← Kembali</button>
            <h3 class="gallery-heading">KARYA SENI LUKIS</h3>
            <div class="gallery-grid">
                <div class="gallery-card">
                    <img src="assets/images/lukisan/FB_IMG_15276166772018941.jpg" alt="Karya Seni Lukis 1" class="gallery-img">
                    <p class="gallery-text">Lukisan Ekspresif Abstrak</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/lukisan/FB_IMG_15276166872239118.jpg" alt="Karya Seni Lukis 2" class="gallery-img">
                    <p class="gallery-text">Lukisan Pemandangan Alam</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/lukisan/IMG_20170721_103525.jpg" alt="Karya Seni Lukis 3" class="gallery-img">
                    <p class="gallery-text">Lukisan Potret Wajah</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/lukisan/IMG_20170909_171609_943.jpg" alt="Karya Seni Lukis 4" class="gallery-img">
                    <p class="gallery-text">Lukisan Still Life</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/lukisan/IMG20170805115633.jpg" alt="Karya Seni Lukis 5" class="gallery-img">
                    <p class="gallery-text">Lukisan Cat Air Warna-warni</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/lukisan/IMG20180707133135.jpg" alt="Karya Seni Lukis 6" class="gallery-img">
                    <p class="gallery-text">Lukisan Cat Minyak Klasik</p>
                </div>
            </div>
        </div>

        <!-- Karya 3 Gallery -->
        <div id="karya3" class="works-gallery" style="display: none;">
            <button class="back-button" onclick="showFolders()">← Kembali</button>
            <h3 class="gallery-heading">FOTOGRAFI</h3>
            <div class="gallery-grid">
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3025 (1).jpg" alt="Fotografi 1" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 1</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3027.jpg" alt="Fotografi 2" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 2</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3029.jpg" alt="Fotografi 3" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 3</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3034 (1).jpg" alt="Fotografi 4" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 4</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3044.jpg" alt="Fotografi 5" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 5</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3045.jpg" alt="Fotografi 6" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 6</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3047 (1).jpg" alt="Fotografi 7" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 7</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_3049.jpg" alt="Fotografi 8" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 8</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_5540.jpg" alt="Fotografi 9" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 9</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_5541.jpg" alt="Fotografi 10" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 10</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_5558.jpg" alt="Fotografi 11" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 11</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_5574.jpg" alt="Fotografi 12" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 12</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/_MG_5615 (1).jpg" alt="Fotografi 13" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 13</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/20161007144110__MG_5658.jpg" alt="Fotografi 14" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 14</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/20161007144124__MG_5659.jpg" alt="Fotografi 15" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 15</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/20161007150900__MG_5714.jpg" alt="Fotografi 16" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 16</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/20161007151030__MG_5719.jpg" alt="Fotografi 17" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 17</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/20161007151202__MG_5721 (2).jpg" alt="Fotografi 18" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 18</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4018.jpg" alt="Fotografi 19" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 19</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4033.jpg" alt="Fotografi 20" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 20</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4034.jpg" alt="Fotografi 21" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 21</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4038 (1).jpg" alt="Fotografi 22" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 22</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4263.jpg" alt="Fotografi 23" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 23</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4301 (1).jpg" alt="Fotografi 24" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 24</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4307.jpg" alt="Fotografi 25" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 25</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4317.jpg" alt="Fotografi 26" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 26</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4318.jpg" alt="Fotografi 27" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 27</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4323.jpg" alt="Fotografi 28" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 28</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4332.jpg" alt="Fotografi 29" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 29</p>
                </div>
                <div class="gallery-card">
                    <img src="assets/images/fotografi/IMG_4340.jpg" alt="Fotografi 30" class="gallery-img">
                    <p class="gallery-text">Dokumentasi Foto 30</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>