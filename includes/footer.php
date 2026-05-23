</main>

<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Pratinjau gambar" hidden>
    <div class="lightbox__backdrop" data-lightbox-close></div>
    <div class="lightbox__dialog">
        <button type="button" class="lightbox__close" aria-label="Tutup" data-lightbox-close>&times;</button>
        <button type="button" class="lightbox__nav lightbox__nav--prev" aria-label="Gambar sebelumnya" hidden>&#8249;</button>
        <button type="button" class="lightbox__nav lightbox__nav--next" aria-label="Gambar berikutnya" hidden>&#8250;</button>
        <figure class="lightbox__figure">
            <img class="lightbox__img" src="" alt="">
            <figcaption class="lightbox__caption"></figcaption>
        </figure>
    </div>
</div>

<footer class="site-footer">
    <div class="site-footer__inner">
        <p class="site-footer__text">&copy; <?php echo date('Y'); ?> Riyan Setiawan. Semua hak cipta dilindungi.</p>
        <nav class="site-footer__nav" aria-label="Navigasi footer">
            <a href="index.php">Beranda</a>
            <a href="contact.php">Kontak</a>
        </nav>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script src="assets/js/pdf-certificates.js" defer></script>
<script src="assets/js/main.js" defer></script>
</body>
</html>
