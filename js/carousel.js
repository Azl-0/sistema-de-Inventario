// Índice actual de la imagen mostrada
let current = 0;
// Selecciona todas las imágenes dentro del elemento con ID "carousel-slide"
const slides = document.querySelectorAll("#carousel-slide img");

function showSlide(index) {
  slides.forEach((img, i) => {
    img.classList.remove("active");
    if (i === index) img.classList.add("active");// Muestra solo la imagen actual
  });
}
/*para pasar a la siguiente imagen */
function nextSlide() {
  current = (current + 1) % slides.length; // Avanza el índice y lo reinicia 
  showSlide(current); // Inicializa mostrando la primera imagen
}

setInterval(nextSlide, 2000); // Cambia cada 2 segundos
