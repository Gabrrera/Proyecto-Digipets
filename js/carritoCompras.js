let contenedorProductosBox =document.querySelector("#ListaProductos")


// FUNCIONES

// es la funcion de dar click añade una funcion
cargarEvento() ;
function cargarEvento() {
    contenedorProductosBox.addEventListener("click",añadirProducto);
}

function añadirProducto(e){
    if (e.target.classList.contains("AgregarCarrito")) {
        // console.log(e.target.parentElement);
        const seleccionarProducto = e.target.parentElement;
        readTheContent(seleccionarProducto);
    }
}

function readTheContent(producto) {
    const informacionProducto={
        image: producto.querySelector('li img').src,
        title: producto.querySelector('li h2').textContent,
        precio: producto.querySelector('.valor').textContent,
        id : producto.querySelector('a').getAttribute('data-id'),
        amount:1
    }

    compraCarrito=[...compraCarrito,informacionProducto]
    carritoPage();

    console.log(informacionProducto);
}


// PARTE DE CARRITO DE COMPRAS 

let compraCarrito= [];
function carritoPage(){
    compraCarrito.forEach(producto => {
        const{image,title,descripcion,amount,id} = producto;
        const row=document.createElement("div");
        row.classList.add(ProductosBox)
         row.innerHTML=`
            <img src=" ${image} " alt="">
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p class="Descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, quia.</p>
            <p class="Valor">90.000</p>
            <a href="#" class="AgregarCarrito" data-id="7">AGREGAR AL CARRITO</a>

        `

        
    })
}