document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('nav-toggle');
    const navContainer = document.getElementById('nav-container');

    navToggle.addEventListener('click', () => {
        navContainer.classList.toggle('hidden');
        navContainer.classList.toggle('visible');
    });
});
