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
//Login
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

// Evento para abrir form de registro
signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active')
);

// Evento para regresar al form de iniciar sesión
signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active')
);