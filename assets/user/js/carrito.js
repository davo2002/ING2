
// Variable para almacenar los productos en el carrito
var carrito = obtenerCarritoDesdeLocalStorage() || [];

// Función para obtener el carrito desde el almacenamiento local
function obtenerCarritoDesdeLocalStorage() {
    var carritoGuardado = localStorage.getItem("carrito");
    return carritoGuardado ? JSON.parse(carritoGuardado) : [];
}

// Función para guardar el carrito en el almacenamiento local
function guardarCarritoEnLocalStorage() {
    localStorage.setItem("carrito", JSON.stringify(carrito));
}

// Función para agregar un producto al carrito
function agregarAlCarrito(button) {
    var producto = button.getAttribute("data-product");
    var precio = parseFloat(button.getAttribute("data-price"));
    var imagen = button.getAttribute("data-image");

    var productoExistente = carrito.find(function (item) {
        return item.producto === producto;
    });

    if (productoExistente) {
        productoExistente.cantidad++;
    } else {
        carrito.push({ producto: producto, precio: precio, cantidad: 1, imagen: imagen });
    }

    actualizarCantidadCarrito();
    actualizarListaCarrito();
    calcularSubtotal();

    guardarCarritoEnLocalStorage();
}

// Función para vaciar el carrito
function vaciarCarrito() {
    carrito = [];

    actualizarCantidadCarrito();
    actualizarListaCarrito();
    calcularSubtotal();

    guardarCarritoEnLocalStorage();
}

// Función para actualizar la cantidad de elementos en el carrito
function actualizarCantidadCarrito() {
    var totalItems = carrito.reduce(function (total, producto) {
        return total + producto.cantidad;
    }, 0);
    document.getElementById("total-items").innerHTML = totalItems;
    document.getElementById("total-items-summary").innerHTML = totalItems;
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito(producto) {
    if (producto.cantidad > 1) {
        producto.cantidad--;
    } else {
        carrito = carrito.filter(function (item) {
            return item !== producto;
        });
    }

    actualizarCantidadCarrito();
    actualizarListaCarrito();
    calcularSubtotal();

    guardarCarritoEnLocalStorage();
}

// Función para calcular el subtotal del carrito
function calcularSubtotal() {
    var subtotal = carrito.reduce(function (total, producto) {
        return total + producto.precio * producto.cantidad;
    }, 0);

    var subtotalFormateado = subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    document.getElementById("total-value").innerHTML = subtotalFormateado;
}

// Función para actualizar la lista de productos en la sección de carrito en la página
function actualizarListaCarrito() {
    var cartListSection = document.getElementById("cart-list-section");
    if (!cartListSection) return;

    // Limpiar el contenido existente antes de agregar los elementos actualizados
    cartListSection.innerHTML = "";

    // Añade las filas de productos
    carrito.forEach(function (producto) {
        var productItem = document.createElement("div");
        productItem.className = "order-col";
        productItem.innerHTML =
            '<div>' + 'Producto ' +  producto.producto + '</div>' +
            '<div>' + 'Cantidad ' + producto.cantidad + '</div>' +
            '<div>' + 'Precio U $' +  (producto.precio).toFixed(2) + '</div>';

        cartListSection.appendChild(productItem);
    });
}


function procesarPedido() {
    var codigoCompra = document.getElementById("inputCodigoCompra").value;
    var notasPedido = document.getElementById("inputOrderNotes").value;

    var datosPedido = {
        codigo: codigoCompra,
        note: notasPedido,
        productos: carrito  // Aquí está la lista de productos con sus atributos
    };

    // Agrega esta línea para ver los datos que se enviarán

    // Resto del código de la solicitud AJAX
    // Solicitud AJAX al controlador para procesar el pedido
    $.ajax({
        url: '../DSTECHSOLUTIONS/index.php/pedido/procesarPedido', // Ruta correcta al controlador
        type: 'POST',
        data: datosPedido,
        success: function (response) {
            console.log(response); // Manejar la respuesta del servidor si es necesaria
        },
        error: function (error) {
            console.error(error); // Manejar errores si es necesario
        }
    });
    
}

// Cargar el carrito al cargar la página
window.onload = function () {
    actualizarCantidadCarrito();
    actualizarListaCarrito();
    calcularSubtotal();
};
