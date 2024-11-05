// Función para abrir el modal
export function openModal() {
    const modal = document.getElementById('addProductModal');
    if (modal) {
        modal.style.display = 'block';
    }
}

// Función para cerrar el modal
export function closeModal() {
    const modal = document.getElementById('addProductModal');
    if (modal) {
        modal.style.display = 'none';
    }
}

// Función para inicializar el modal (asigna eventos)
export function initModal() {
    const openButton = document.getElementById('openModalButton');
    const closeButton = document.getElementById('closeModalButton');

    if (openButton) openButton.addEventListener('click', openModal);
    if (closeButton) closeButton.addEventListener('click', closeModal);
}
