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
            var nombreProducto = article.getAttribute('data-articulo').toLowerCase();

            if (nombreProducto.includes(valorBusqueda)) {
                var nombre = article.getAttribute('data-articulo');
                var descripcion = article.getAttribute('description');
                var precio = article.getAttribute('alt');
                var imagen = article.querySelector('img').src;

                mostrarDetalles(nombre, descripcion, precio, imagen);
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
    
   
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
        

        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
            
            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }

      
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

   
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = imageList.clientWidth * direction;
            imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

   
    const handleSlideButtons = () => {
        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
    }

   
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }

    
    imageList.addEventListener("scroll", () => {
        updateScrollThumbPosition();
        handleSlideButtons();
    });
}

window.addEventListener("resize", initSlider);
window.addEventListener("load", initSlider);