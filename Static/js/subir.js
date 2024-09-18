    const botonSubir = document.querySelector('.boton-lateral[href="#inicio"]');
    botonSubir.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });