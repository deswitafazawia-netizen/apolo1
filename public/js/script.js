const navToggle = document.getElementById('navToggle');
const navbarMenu = document.getElementById('navbarMenu');

if (navToggle && navbarMenu) {
    navToggle.addEventListener('click', () => {
        navbarMenu.classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
        if (!navToggle.contains(e.target) && !navbarMenu.contains(e.target)) {
            navbarMenu.classList.remove('show');
        }
    });
}

// Highlight active link
const currentPath = window.location.pathname;
document.querySelectorAll('.navbar-menu a').forEach(link => {
    if (link.getAttribute('href') === currentPath) {
        link.classList.add('active');
    }
});
