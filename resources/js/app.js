import './bootstrap';
import { initModal } from './modal';

document.addEventListener('DOMContentLoaded', () => {
    initModal();
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

//Filtros

const priceRange = document.getElementById('priceRange');
const priceValue = document.querySelector('.price-value');

priceRange.addEventListener('input', function () {
    priceValue.textContent = priceRange.value;
});



