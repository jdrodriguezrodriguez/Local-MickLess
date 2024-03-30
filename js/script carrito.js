document.addEventListener('DOMContentLoaded', function() {
    const removeFromCartButtons = document.querySelectorAll('.remove-from-cart');
    const continueShoppingButton = document.querySelector('.continue-shopping');
    const cartItemsList = document.querySelector('.cart-items');
    const cartCount = document.querySelector('.cart-count');

    removeFromCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover el elemento de la lista del carrito al hacer clic en (Eliminar producto)
            this.parentElement.remove();
            updateCartCount();
        });
    });

    continueShoppingButton.addEventListener('click', function() {
        // Acción a realizar al hacer clic en (Seguir comprando)
        // Puede redirigir al usuario a otra página o realizar alguna otra acción deseada.
        alert('Continuar comprando...');
    });

    function updateCartCount() {
        const itemCount = cartItemsList.childElementCount;
        cartCount.textContent = itemCount;
    }
});

// JavaScript.js
document.addEventListener('DOMContentLoaded', function () {
    // Obtener el carrito del localStorage
    var cart = JSON.parse(localStorage.getItem('cart')) || [];
    var cartItemsList = document.querySelector('.cart-items');
    var cartCount = document.querySelector('.cart-count');

    // Limpiar la lista para evitar duplicados
    cartItemsList.innerHTML = '';

    // Iterar sobre los productos en el carrito y agregarlos a la lista
    cart.forEach(function (product) {
        var listItem = document.createElement('li');
        listItem.textContent = product.name + ' - $' + product.price;
        cartItemsList.appendChild(listItem);
    });

    // Actualizar el contador del carrito
    cartCount.textContent = cart.length;
});

// Función para agregar el producto al carrito
function addToCart(name, price) {
    var cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: name, price: price });
    localStorage.setItem('cart', JSON.stringify(cart));

    // Actualizar el contador del carrito
    var cartCount = document.querySelector('.cart-count');
    cartCount.textContent = cart.length;
}

document.addEventListener('DOMContentLoaded', function() {
    const cartItemsList = document.querySelector('.cart-items');
    const cartCount = document.querySelector('.cart-count');

    // Obtener el carrito del localStorage
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Limpiar la lista para evitar duplicados
    cartItemsList.innerHTML = '';

    // Iterar sobre los productos en el carrito y agregarlos a la lista
    cart.forEach(function(product, index) {
        var listItem = document.createElement('li');
        listItem.textContent = product.name + ' -  $' + product.price;

        // Crear un botón de eliminación para cada producto
        var removeButton = document.createElement('button');
        removeButton.textContent = 'Eliminar';
        removeButton.classList.add('remove-from-cart');
        removeButton.addEventListener('click', function() {
            // Remover el elemento de la lista del carrito al hacer clic en "Eliminar producto"
            cart.splice(index, 1); // Eliminar el producto del array del carrito
            localStorage.setItem('cart', JSON.stringify(cart)); // Actualizar el localStorage
            listItem.remove(); // Eliminar el elemento de la lista visual
            updateCartCount(); // Actualizar el contador del carrito
        });

        // Agregar el botón de eliminación al elemento de la lista
        listItem.appendChild(removeButton);

        // Agregar el elemento de la lista al carrito
        cartItemsList.appendChild(listItem);
    });

    // Actualizar el contador del carrito
    updateCartCount();

    function updateCartCount() {
        const itemCount = cart.length;
        cartCount.textContent = itemCount;
    }
    
});

//+= TOTAL
document.addEventListener('DOMContentLoaded', function() {
    const cartItemsList = document.querySelector('.cart-items');
    const cartCount = document.querySelector('.cart-count');
    const totalAmount = document.querySelector('.total-amount'); // Agregamos la referencia al elemento donde mostraremos el total

    // Obtener el carrito del localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Función para actualizar el carrito y el total
    function updateCart() {
        // Limpiar la lista para evitar duplicados
        cartItemsList.innerHTML = '';

        // Inicializar el total
        let total = 0;

        // Iterar sobre los productos en el carrito y agregarlos a la lista
        cart.forEach(function(product, index) {
            let listItem = document.createElement('li');
            listItem.textContent = product.name + ' -  $' + product.price;

            // Crear un botón de eliminación para cada producto
            let removeButton = document.createElement('button');
            removeButton.textContent = 'Eliminar';
            removeButton.classList.add('remove-from-cart');
            removeButton.addEventListener('click', function() {
                // Remover el elemento de la lista del carrito al hacer clic en "Eliminar producto"
                cart.splice(index, 1); // Eliminar el producto del array del carrito
                localStorage.setItem('cart', JSON.stringify(cart)); // Actualizar el localStorage
                listItem.remove(); // Eliminar el elemento de la lista visual
                updateCart(); // Actualizar el carrito y el total
            });

            // Agregar el botón de eliminación al elemento de la lista
            listItem.appendChild(removeButton);

            // Agregar el elemento de la lista al carrito
            cartItemsList.appendChild(listItem);

            // Sumar el precio del producto al total
            total += parseFloat(product.price);
        });

        // Actualizar el contador del carrito
        cartCount.textContent = cart.length;

        // Mostrar el total
        totalAmount.textContent = 'Total: $' + total.toFixed(2); // Mostramos el total con dos decimales
    }

    // Llamar a la función inicialmente para mostrar los productos del carrito y el total
    updateCart();

    // Función para agregar el producto al carrito
    function addToCart(name, price) {
        cart.push({ name: name, price: price });
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCart(); // Actualizar el carrito y el total
    }
});

// JavaScript
document.getElementById("vaciar-carrito").addEventListener("click", vaciarCarrito);

function vaciarCarrito() {
    // Obtener la lista de elementos del carrito
    var carritoItems = document.querySelector(".cart-items");
    
    // Vaciar la lista de elementos del carrito
    carritoItems.innerHTML = "";

    // Actualizar el total a cero
    document.querySelector(".total-amount").innerText = "Total: $0";
}

document.addEventListener('DOMContentLoaded', function() {
    const cartItemsList = document.querySelector('.cart-items');
    const cartCount = document.querySelector('.cart-count');
    const totalAmount = document.querySelector('.total-amount');

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function updateCart() {
        cartItemsList.innerHTML = '';
        let total = 0;

        cart.forEach(function(product, index) {
            let listItem = document.createElement('li');
            let productImage = document.createElement('img'); // Agregamos la imagen del producto
            productImage.src = product.image; // Asignamos la URL de la imagen
            productImage.style.width = '50px'; // Establecemos un tamaño para la imagen
            listItem.appendChild(productImage); // Agregamos la imagen al elemento de la lista
            listItem.innerHTML += product.name + ' - $' + product.price;
            
            let removeButton = document.createElement('button');
            removeButton.textContent = 'Eliminar';
            removeButton.classList.add('remove-from-cart');
            removeButton.addEventListener('click', function() {
                cart.splice(index, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCart();
            });

            listItem.appendChild(removeButton);
            cartItemsList.appendChild(listItem);

            total += parseFloat(product.price);
        });

        cartCount.textContent = cart.length;
        totalAmount.textContent = 'Total: $' + total.toFixed(2);
    }

    updateCart();

    function addToCart(name, price, image) {
        cart.push({ name: name, price: price, image: image });
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCart();
    }

    // Resto del código...
});

// Función para vaciar el carrito
function vaciarCarrito() {
    // Obtener la lista de elementos del carrito
    var carritoItems = document.querySelector(".cart-items");
    
    // Vaciar la lista de elementos del carrito
    carritoItems.innerHTML = "";

    // Actualizar el total a cero
    document.querySelector(".total-amount").innerText = "Total: $0";

    // Vaciar el array del carrito en localStorage
    localStorage.setItem('cart', JSON.stringify([]));

    // Actualizar el contador del carrito a 0
    document.querySelector('.cart-count').textContent = '0';
}
