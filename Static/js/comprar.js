let carrito = [];
let totalCompra = 0;

function addToCart(producto, cantidad, precio) {
    cantidad = parseInt(cantidad); // Convertir cantidad a número entero
    let subtotal = cantidad * precio; // Calcular el subtotal para este producto

    // Añadir producto al carrito con su cantidad y subtotal
    let itemCarrito = { producto, cantidad, precio, subtotal };
    carrito.push(itemCarrito);

    // Añadir al total general
    totalCompra += subtotal;

    // Actualizar el carrito en la interfaz
    actualizarCarritoUI();
}

function actualizarCarritoUI() {
    let listaCarrito = document.getElementById('lista-carrito');
    listaCarrito.innerHTML = ''; // Limpiar la lista actual para re-renderizarla
    carrito.forEach((item, index) => {
        let li = document.createElement('li');
        li.innerHTML = `${item.producto} - Cantidad: ${item.cantidad} - Subtotal: ${item.subtotal} COP 
            <button class="btn btn-danger btn-sm" onclick="eliminarProducto(${index})">Eliminar</button>`;
        listaCarrito.appendChild(li);
    });

    // Actualizar el total en la interfaz
    let totalElemento = document.getElementById('total-compra');
    totalElemento.textContent = `Total: ${totalCompra} COP`;
}

function eliminarProducto(index) {
    let productoEliminado = carrito[index];
    totalCompra -= productoEliminado.subtotal; // Restar el subtotal del producto eliminado del total
    carrito.splice(index, 1); // Eliminar el producto del array

    // Actualizar la UI
    actualizarCarritoUI();
}

function finalizarCompra() {
    if (carrito.length === 0) {
        alert("El carrito está vacío.");
    } else {
        alert(`El total de tu compra es ${totalCompra} COP. Gracias por tu compra.`);
        // Aquí podrías enviar la información del carrito al backend o procesar la compra
    }
}

