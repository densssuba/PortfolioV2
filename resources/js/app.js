import './bootstrap';

/**
 * app.js - Portfolio Interactions
 */

document.addEventListener('DOMContentLoaded', () => {
    const projectImages = document.querySelectorAll('.project-zoom');

    projectImages.forEach(image => {
        image.addEventListener('click', () => {
            createLightbox(image.src, image.alt);
        });
    });
});

function createLightbox(src, alt) {
    // Create overlay container
    const overlay = document.createElement('div');
    overlay.className = 'fixed inset-0 z-[100] flex items-center justify-center bg-black/90 cursor-zoom-out p-4 md:p-10 transition-opacity duration-300 opacity-0';
    
    // Create image element
    const img = document.createElement('img');
    img.src = src;
    img.alt = alt;
    img.className = 'max-w-full max-h-full rounded-2xl shadow-2xl transform scale-95 transition-transform duration-300';

    // Append image to overlay
    overlay.appendChild(img);
    document.body.appendChild(overlay);

    // Trigger animations
    setTimeout(() => {
        overlay.classList.replace('opacity-0', 'opacity-100');
        img.classList.replace('scale-95', 'scale-100');
    }, 10);

    // Close on click
    overlay.addEventListener('click', () => {
        overlay.classList.replace('opacity-100', 'opacity-0');
        img.classList.replace('scale-100', 'scale-95');
        setTimeout(() => overlay.remove(), 300);
    });

    // Close on Escape key
    document.addEventListener('keydown', function closeEsc(e) {
        if (e.key === 'Escape') {
            overlay.click();
            document.removeEventListener('keydown', closeEsc);
        }
    });

}



