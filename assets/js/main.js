(function () {
    'use strict';

    var toggle = document.querySelector('.nav-toggle');
    var nav = document.querySelector('.site-nav');
    var links = document.querySelectorAll('.nav__link');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('site-nav--open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            document.body.classList.toggle('nav-open', open);
        });

        links.forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('site-nav--open');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('nav-open');
            });
        });

        document.addEventListener('keydown', function (e) {
            if (e.key !== 'Escape' || !nav.classList.contains('site-nav--open')) return;
            if (document.querySelector('.lightbox--open')) return;
            nav.classList.remove('site-nav--open');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('nav-open');
        });
    }

    var header = document.querySelector('.site-header');
    if (header) {
        var onScroll = function () {
            header.classList.toggle('site-header--scrolled', window.scrollY > 8);
        };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    window.showGallery = function (karyaId) {
        var buttons = document.getElementById('worksButtons');
        if (!buttons) return;
        buttons.style.display = 'none';
        document.querySelectorAll('.works-gallery').forEach(function (gallery) {
            gallery.style.display = 'none';
            gallery.classList.remove('fade-in');
        });
        var target = document.getElementById(karyaId);
        if (target) {
            target.style.display = 'block';
            target.classList.add('fade-in');
            loadDeferredGalleryImages(target);
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    window.showFolders = function () {
        var buttons = document.getElementById('worksButtons');
        if (!buttons) return;
        buttons.style.display = 'grid';
        document.querySelectorAll('.works-gallery').forEach(function (gallery) {
            gallery.style.display = 'none';
            gallery.classList.remove('fade-in');
        });
        buttons.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    };

    initLightbox();
})();

function loadDeferredGalleryImages(container) {
    if (!container) return;

    container.querySelectorAll('img[data-src]').forEach(function (img) {
        if (img.getAttribute('src')) return;
        img.setAttribute('src', img.getAttribute('data-src'));
    });
}

function getFullImageSrc(item) {
    if (isPdfItemElement(item)) {
        return '';
    }
    return item.getAttribute('data-full-src') || item.currentSrc || item.src || '';
}

function isPdfItemElement(el) {
    return el.classList.contains('certificate-card__image-wrapper--pdf');
}

function initLightbox() {
    var lightbox = document.getElementById('lightbox');
    if (!lightbox) return;

    var lightboxImg = lightbox.querySelector('.lightbox__img');
    var lightboxCaption = lightbox.querySelector('.lightbox__caption');
    var btnPrev = lightbox.querySelector('.lightbox__nav--prev');
    var btnNext = lightbox.querySelector('.lightbox__nav--next');
    var closeTargets = lightbox.querySelectorAll('[data-lightbox-close]');

    var selectors = '.certificate-card__image, .certificate-card__image-wrapper--pdf, .gallery-img';
    var groupSelector = '.certificate-card__image, .certificate-card__image-wrapper--pdf, .gallery-img';
    var currentItems = [];
    var currentIndex = 0;
    var lastFocus = null;

    function isVisible(el) {
        return el && el.offsetParent !== null;
    }

    function isPdfItem(el) {
        return isPdfItemElement(el);
    }

    function getItemLabel(el) {
        if (isPdfItem(el)) {
            return el.getAttribute('data-pdf-title') || 'dokumen PDF';
        }
        return el.alt || 'gambar';
    }

    function getItemGroup(item) {
        var container = item.closest(
            '.gallery-grid, .gallery-grid--full, .certificates__grid'
        );
        if (!container) return [item];

        return Array.prototype.filter.call(
            container.querySelectorAll(groupSelector),
            isVisible
        );
    }

    function showItem(index) {
        var item = currentItems[index];
        if (!item) return;

        currentIndex = index;
        var label = getItemLabel(item);
        lightboxCaption.textContent = label;

        lightboxImg.hidden = false;
        lightboxImg.alt = label;

        if (isPdfItem(item)) {
            lightboxImg.src = '';
            lightboxImg.classList.add('lightbox__img--loading');

            if (typeof window.renderPdfForLightbox === 'function') {
                window.renderPdfForLightbox(item.getAttribute('data-pdf-src'), function (dataUrl) {
                    lightboxImg.classList.remove('lightbox__img--loading');
                    lightboxImg.src = dataUrl || '';
                });
            }
        } else {
            var fullSrc = getFullImageSrc(item);
            lightboxImg.classList.add('lightbox__img--loading');
            lightboxImg.removeAttribute('src');

            var preview = new Image();
            preview.onload = function () {
                if (currentItems[currentIndex] !== item) return;
                lightboxImg.classList.remove('lightbox__img--loading');
                lightboxImg.src = fullSrc;
            };
            preview.onerror = function () {
                if (currentItems[currentIndex] !== item) return;
                lightboxImg.classList.remove('lightbox__img--loading');
            };
            preview.src = fullSrc;
        }

        var hasMany = currentItems.length > 1;
        btnPrev.hidden = !hasMany;
        btnNext.hidden = !hasMany;
    }

    function openLightbox(item) {
        currentItems = getItemGroup(item);
        currentIndex = Math.max(0, currentItems.indexOf(item));
        lastFocus = document.activeElement;

        showItem(currentIndex);
        lightbox.hidden = false;
        lightbox.classList.add('lightbox--open');
        document.body.classList.add('lightbox-open');
        lightbox.querySelector('.lightbox__close').focus();
    }

    function closeLightbox() {
        lightbox.classList.remove('lightbox--open');
        lightbox.hidden = true;
        document.body.classList.remove('lightbox-open');
        lightboxImg.removeAttribute('src');
        lightboxImg.alt = '';
        lightboxImg.classList.remove('lightbox__img--loading');
        lightboxCaption.textContent = '';

        if (lastFocus && typeof lastFocus.focus === 'function') {
            lastFocus.focus();
        }
    }

    function showNext() {
        if (currentItems.length < 2) return;
        showItem((currentIndex + 1) % currentItems.length);
    }

    function showPrev() {
        if (currentItems.length < 2) return;
        showItem((currentIndex - 1 + currentItems.length) % currentItems.length);
    }

    function bindLightboxItem(item) {
        item.classList.add('lightbox-trigger');
        item.setAttribute('tabindex', '0');
        item.setAttribute('role', 'button');
        item.setAttribute('aria-label', 'Perbesar: ' + getItemLabel(item));

        item.addEventListener('click', function () {
            openLightbox(item);
        });

        item.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openLightbox(item);
            }
        });
    }

    document.querySelectorAll(selectors).forEach(bindLightboxItem);

    closeTargets.forEach(function (el) {
        el.addEventListener('click', closeLightbox);
    });

    btnPrev.addEventListener('click', function (e) {
        e.stopPropagation();
        showPrev();
    });

    btnNext.addEventListener('click', function (e) {
        e.stopPropagation();
        showNext();
    });

    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('lightbox--open')) return;

        if (e.key === 'Escape') {
            e.preventDefault();
            closeLightbox();
        } else if (e.key === 'ArrowRight') {
            showNext();
        } else if (e.key === 'ArrowLeft') {
            showPrev();
        }
    });
}
