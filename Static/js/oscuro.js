const botonModoOscuro = document.getElementById('modoOscuroBtn');

    // Añade un evento de clic al botón
    botonModoOscuro.addEventListener('click', function() {
        // Alterna la clase 'modo-oscuro' en el body
        document.body.classList.toggle('modo-oscuro');

        // Cambia el texto del botón según el modo activo
        if (document.body.classList.contains('modo-oscuro')) {
            botonModoOscuro.textContent = '☀️ Modo Claro';
        } else {
            botonModoOscuro.textContent = '🌙 Modo Oscuro';
        }
    });