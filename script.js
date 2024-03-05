/*DESPLAZAMIENTO DE LA PAGINA*/
window.addEventListener('scroll', function() {
    var fondo = document.body.style.backgroundPositionY || '0px';
    var desplazamiento = window.scrollY;
    var velocidad = 0.01;
    fondo = (parseInt(fondo) - desplazamiento * velocidad) + 'px';
    document.body.style.backgroundPositionY = fondo;
});

/*BUSCADOR*/ 
document.getElementById('input-busqueda').addEventListener('keydown', function(event) {
    
    if (event.key === 'Enter') {
        var valorBusqueda = this.value.toLowerCase();
        var articles = document.querySelectorAll('#buscar article');

        articles.forEach(function(article) {
            var nombreJuego = article.getAttribute('data-articulo').toLowerCase();

            if (nombreJuego.includes(valorBusqueda)) {
                var link = article.querySelector('a');
                if (link) {
                    window.location.href = link.getAttribute('href');
                }
            }
        });
    }
});




/*CATEGORIAS:*/
document.querySelectorAll('.categorias article').forEach(function(categoria) {
    categoria.addEventListener('click', function() {
        var categoriaSeleccionada = this.dataset.categoria;
        // Ocultar todos los productos
        document.querySelectorAll('.productos article').forEach(function(producto) {
            producto.style.display = 'none';
        });
        // Mostrar solo los productos de la categoría seleccionada
        document.querySelectorAll('.productos article.' + categoriaSeleccionada).forEach(function(producto) {
            producto.style.display = 'block';
        });
    });
});








//SCROLL DE IMAGENES
const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
    
    // Handle scrollbar thumb drag
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
        
        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }

        // Remove event listeners on mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // Add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

     // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }

    // Update scrollbar thumb position based on image scroll
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }

    // Call these two functions when image list scrolls
    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}

window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);