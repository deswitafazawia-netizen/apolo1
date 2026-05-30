const btn = document.querySelectorAll('[data-toggle]');
const menu = document.querySelectorAll('[data-menu]');

btn.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const target = btn.getAttribute('data-toggle');

        menu.forEach(show => {
            if (show.getAttribute('data-menu') === target) {
                show.classList.toggle('show');
            } else {
                show.classList.remove('show')
            }
        })
    })
})