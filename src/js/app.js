document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
    darkMode();
});
function darkMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', (e) => {
        if (e.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}
function eventListeners() {
    const menu = document.querySelector('.mobile-menu');

    menu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
   
    navegacion.classList.toggle('mostrar');
    
}


