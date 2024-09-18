// Inicialización manual del carrusel si es necesario
document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.querySelector('#carouselExampleCaptions');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000, // Tiempo entre slides (en milisegundos)
        wrap: true // Permite que el carrusel se reinicie al llegar al final
    });
});