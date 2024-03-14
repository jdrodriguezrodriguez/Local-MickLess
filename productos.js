fetch('productos.json')


    
  .then(response => response.json())
  .then(data => {
    // Acceder a la lista de productos
    const productos = data.productos;

    // Iterar sobre cada producto
    productos.forEach(producto => {
      // Acceder a las propiedades de cada producto
      const nombre = producto.nombre;
      const categoria = producto.categoria;
      const imagen = producto.imagen;
      const descripcion = producto.descripcion;
      const tallas = producto.tallas;
      const precioEntero = producto.precio.entero;
      const precioDecimal = producto.precio.decimal;

      // Aquí puedes usar la información para generar dinámicamente el contenido de tus páginas de producto
      // Por ejemplo, puedes insertar esta información en la plantilla HTML

      // Crear elementos HTML y asignarles los datos del producto
      const containerDetalles = document.querySelector('.container-detalles');
      const article = document.createElement('article');
      article.classList.add('post');
      article.dataset.ropa = categoria;

      const contenedor = document.createElement('div');
      contenedor.classList.add('contenedor');

      const img = document.createElement('img');
      img.src = imagen;
      img.width = '500';

      const detalles = document.createElement('div');
      detalles.classList.add('detalles');

      const tittleDetalles = document.createElement('div');
      tittleDetalles.classList.add('tittle-detalles');

      const icono = document.createElement('img');
      icono.src = 'image/icono.png';
      icono.width = '50';

      const h2 = document.createElement('h2');
      h2.textContent = nombre;

      const titulo = document.createElement('div');
      titulo.classList.add('titulo');

      const h3 = document.createElement('h3');
      h3.innerHTML = `${nombre}<br><small>${categoria}</small>`;

      const description = document.createElement('div');
      description.classList.add('description');

      const h4Descripcion = document.createElement('h4');
      h4Descripcion.textContent = 'Descripción';

      const pDescripcion = document.createElement('p');
      pDescripcion.textContent = descripcion;

      const size = document.createElement('div');
      size.classList.add('size');

      const h4Tallas = document.createElement('h4');
      h4Tallas.textContent = 'Tallas';

      const ulTallas = document.createElement('ul');
      tallas.forEach(talla => {
        const li = document.createElement('li');
        li.textContent = talla;
        ulTallas.appendChild(li);
      });

      const buy = document.createElement('div');
      buy.classList.add('buy');

      const price = document.createElement('div');
      price.classList.add('price');

      const supPrecio = document.createElement('sup');
      supPrecio.textContent = '$';

      const spanPrecio = document.createElement('span');
      spanPrecio.innerHTML = `${precioEntero}.<small>${precioDecimal}</small>`;

      const btnDetalles = document.createElement('div');
      btnDetalles.classList.add('btn-detalles');

      const btnCarrito = document.createElement('button');
      btnCarrito.classList.add('cart-button', 'no-background');
      btnCarrito.innerHTML = '<img src="image/Carrito.png" width="40" alt="Icono de carrito de compras">';

      const btnMetodosPago = document.createElement('button');
      btnMetodosPago.textContent = 'Metodos de pago';

      const btnAgregarCarrito = document.createElement('button');
      btnAgregarCarrito.classList.add('add-to-cart');
      btnAgregarCarrito.textContent = 'Agregar al Carrito';

      // Agregar elementos al DOM
      containerDetalles.appendChild(article);
      article.appendChild(contenedor);
      contenedor.appendChild(img);
      contenedor.appendChild(detalles);
      detalles.appendChild(tittleDetalles);
      tittleDetalles.appendChild(icono);
      tittleDetalles.appendChild(h2);
      detalles.appendChild(titulo);
      titulo.appendChild(h3);
      detalles.appendChild(description);
      description.appendChild(h4Descripcion);
      description.appendChild(pDescripcion);
      detalles.appendChild(size);
      size.appendChild(h4Tallas);
      size.appendChild(ulTallas);
      detalles.appendChild(buy);
      buy.appendChild(price);
      price.appendChild(supPrecio);
      price.appendChild(spanPrecio);
      buy.appendChild(btnDetalles);
      btnDetalles.appendChild(btnCarrito);
      btnDetalles.appendChild(btnMetodosPago);
      btnDetalles.appendChild(btnAgregarCarrito);

    });
  })
  
  .catch(error => {
    console.error('Error al cargar el archivo JSON:', error);
  });

  