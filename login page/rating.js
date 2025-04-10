// script.js
document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.star');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            stars.forEach(s => s.classList.remove('selected'));
            star.classList.add('selected');
            let previousSibling = star.previousElementSibling;
            while (previousSibling) {
                previousSibling.classList.add('selected');
                previousSibling = previousSibling.previousElementSibling;
            }
        });

        star.addEventListener('mouseover', () => {
            stars.forEach(s => s.classList.remove('hover'));
            star.classList.add('hover');
            let previousSibling = star.previousElementSibling;
            while (previousSibling) {
                previousSibling.classList.add('hover');
                previousSibling = previousSibling.previousElementSibling;
            }
        });

        star.addEventListener('mouseleave', () => {
            stars.forEach(s => s.classList.remove('hover'));
        });
    });

    document.querySelector('.rating').addEventListener('mouseleave', () => {
        stars.forEach(star => star.classList.remove('hover'));
    });
});
