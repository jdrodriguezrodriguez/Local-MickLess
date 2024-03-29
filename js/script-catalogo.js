
    //LLAMAR ARCHIVO JSON
    fetch('productos.json')
      .then(response => response.json())
      .then(data => {
        const contenedor = document.getElementById('contenedor-articulos');

        //GENERAMOS ELEMENTOS HTML
        data.forEach(articulo => {
          const articuloHTML = `
            <div id="buscar" class="div-productos">
              <alt="${articulo.precio}" onclick="mostrarDetalles('${articulo.nombre}', '${articulo.descripcion}', '${articulo.precio}', '${articulo.imagen}', '${articulo.categoria}')">

              <section  class="productos">
                <article class="${articulo.categoria}" data-articulo="${articulo.nombre}">
                    <a href="#" class="no-underline">
                        <h2>${articulo.nombre}</h2>
                        <img src="${articulo.imagen}" alt="Articulos" style="max-width: 100%; object-fit: contain;">
                    </a>
                </article>
              </section>
            </div>
          `;
          contenedor.innerHTML += articuloHTML;
        });
      })
      .catch(error => console.error('Error cargando datos:', error));
      
      

    //FUNCION PAR MOSTRAR LOS DETALLES
    function mostrarDetalles(nombre, descripcion, precio, imagen, categoria) {
     
      //CODIFICAR
      const nombreCodificado = encodeURIComponent(nombre);
      const descripcionCodificada = encodeURIComponent(descripcion);
      const precioCodificado = encodeURIComponent(precio);
      const imagenCodificado = encodeURIComponent(imagen);
      const categoriaCodificado = encodeURIComponent(categoria);

      //URL:
      window.location.replace(`articulos.html?nombre=${nombreCodificado}&descripcion=${descripcionCodificada}&precio=${precioCodificado}&imagen=${imagenCodificado}&categoria=${categoriaCodificado}`);
    }