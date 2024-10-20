import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    eventListeners();
});

function eventListeners() {
    const menu = document.querySelector('.mobile-menu');

    menu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.header-menu-list');
    const header = document.querySelector('.header');
    navegacion.classList.toggle('mostrar');
    if (window.innerWidth < 480) { 
        header.classList.toggle('expand'); 
    }
    
    
}