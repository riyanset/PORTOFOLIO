(function () {
    'use strict';

    var PDFJS_CDN = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/';

    function getPdfLib() {
        return window.pdfjsLib || window['pdfjs-dist/build/pdf'];
    }

    function ensureWorker() {
        var pdfjsLib = getPdfLib();
        if (!pdfjsLib) return false;
        if (!pdfjsLib.GlobalWorkerOptions.workerSrc) {
            pdfjsLib.GlobalWorkerOptions.workerSrc = PDFJS_CDN + 'pdf.worker.min.js';
        }
        return true;
    }

    function renderPageToCanvas(url, canvas, container) {
        var pdfjsLib = getPdfLib();
        if (!pdfjsLib || !ensureWorker()) {
            return Promise.reject(new Error('PDF.js tidak tersedia'));
        }

        var width = container.clientWidth || 320;
        var height = container.clientHeight || Math.round(width * 0.75);

        return pdfjsLib.getDocument(url).promise.then(function (pdf) {
            return pdf.getPage(1);
        }).then(function (page) {
            var baseViewport = page.getViewport({ scale: 1 });
            var scaleX = width / baseViewport.width;
            var scaleY = height / baseViewport.height;
            var scale = Math.min(scaleX, scaleY);
            var viewport = page.getViewport({ scale: scale });

            canvas.width = Math.floor(viewport.width);
            canvas.height = Math.floor(viewport.height);

            return page.render({
                canvasContext: canvas.getContext('2d'),
                viewport: viewport
            }).promise;
        });
    }

    function initCardPreviews() {
        if (!ensureWorker()) return;

        document.querySelectorAll('.certificate-card__image-wrapper--pdf').forEach(function (wrapper) {
            var url = wrapper.getAttribute('data-pdf-src');
            var canvas = wrapper.querySelector('.certificate-card__pdf-canvas');
            var loading = wrapper.querySelector('.certificate-card__pdf-loading');

            if (!url || !canvas) return;

            renderPageToCanvas(url, canvas, wrapper)
                .then(function () {
                    canvas.classList.add('certificate-card__image', 'certificate-card__pdf-ready');
                    if (loading) loading.remove();
                })
                .catch(function () {
                    if (loading) {
                        loading.textContent = 'Pratinjau tidak tersedia';
                        loading.classList.add('certificate-card__pdf-loading--error');
                    }
                });
        });
    }

    window.renderPdfForLightbox = function (url, callback) {
        if (!ensureWorker()) {
            callback('');
            return;
        }

        var pdfjsLib = getPdfLib();
        var maxWidth = Math.min(window.innerWidth * 0.92, 1100);

        pdfjsLib.getDocument(url).promise
            .then(function (pdf) { return pdf.getPage(1); })
            .then(function (page) {
                var baseViewport = page.getViewport({ scale: 1 });
                var scale = maxWidth / baseViewport.width;
                var viewport = page.getViewport({ scale: scale });
                var canvas = document.createElement('canvas');

                canvas.width = Math.floor(viewport.width);
                canvas.height = Math.floor(viewport.height);

                return page.render({
                    canvasContext: canvas.getContext('2d'),
                    viewport: viewport
                }).promise.then(function () {
                    callback(canvas.toDataURL('image/png'));
                });
            })
            .catch(function () {
                callback('');
            });
    };

    function start() {
        requestAnimationFrame(function () {
            requestAnimationFrame(initCardPreviews);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', start);
    } else {
        start();
    }
})();
