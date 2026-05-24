<?php
$pageTitle = 'Beranda';
$metaDescription = 'Portofolio Riyan Setiawan — Mahasiswa Teknik Informatika, fotografer, dan seniman.';
require_once 'includes/image.php';
include 'includes/header.php';
?>

<div class="container">
    <section class="page-panel hero">
        <div class="hero__image-wrap">
            <?php echo profile_img('assets/images/1.jpeg', 'Foto profil Riyan Setiawan', 'hero__image', 200, 200, 'eager'); ?>
        </div>
        <h1 class="hero__title">Riyan Setiawan</h1>
        <p class="hero__subtitle">Mahasiswa Teknik Informatika · Fotografer & Seniman</p>
        <div class="hero__actions">
            <a href="about.php" class="btn">Tentang Saya</a>
            <a href="works.php" class="btn btn--outline">Lihat Karya</a>
        </div>
    </section>

    <section class="page-panel overview">
        <h2 class="section__title">Ikhtisar</h2>
        <p class="overview__text">Seorang IT dan seniman mungkin terlihat berada di dua dunia yang berbeda, namun keduanya memiliki satu kesamaan: kreativitas dalam menciptakan sesuatu yang bernilai. Seorang IT membangun sistem, aplikasi, dan solusi digital dengan logika dan teknologi, sementara seniman mengekspresikan ide, emosi, dan keindahan melalui karya visual, musik, atau bentuk seni lainnya. Ketika keduanya berpadu, lahirlah inovasi yang tidak hanya fungsional tetapi juga estetis—teknologi yang memiliki jiwa, dan seni yang didukung oleh kecanggihan digital.</p>
    </section>

    <section class="page-panel skills">
        <h2 class="section__title">Keahlian</h2>
        <p class="section__lead">Bidang utama yang saya kuasai dalam pengembangan digital, jaringan, dan kreatif.</p>
        <div class="skills__grid">
            <article class="skill-card">
                <span class="skill-card__icon" aria-hidden="true">&lt;/&gt;</span>
                <h3 class="skill-card__title">Web Development</h3>
                <p class="skill-card__text">Membangun website dan aplikasi web yang responsif, terstruktur, dan siap digunakan.</p>
            </article>
            <article class="skill-card">
                <span class="skill-card__icon" aria-hidden="true">UI</span>
                <h3 class="skill-card__title">UI/UX Design</h3>
                <p class="skill-card__text">Merancang antarmuka yang jelas, nyaman dipakai, dan selaras dengan kebutuhan pengguna.</p>
            </article>
            <article class="skill-card">
                <span class="skill-card__icon" aria-hidden="true">NET</span>
                <h3 class="skill-card__title">Networking</h3>
                <p class="skill-card__text">Memahami konfigurasi jaringan, konektivitas, dan infrastruktur dasar untuk mendukung sistem digital.</p>
            </article>
            <article class="skill-card">
                <span class="skill-card__icon" aria-hidden="true">ART</span>
                <h3 class="skill-card__title">Digital Art</h3>
                <p class="skill-card__text">Mengekspresikan ide melalui karya visual digital, lukisan, dan dokumentasi fotografi.</p>
            </article>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
