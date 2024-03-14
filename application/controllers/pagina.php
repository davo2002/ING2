<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pagina extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('producto_model');
    }


    public function tech() {
        // Cargar el modelo de productos
		$this->load->model('producto_model');
        // Obtener productos repetidos
        $data['productosRepetidos'] = $this->producto_model->obtenerProductosRepetidos();
        
        // Obtener productos no repetidos
        $data['productosNoRepetidos'] = $this->producto_model->obtenerProductosNoRepetidos();

        // Imprimir datos para verificar
        // echo '<pre>';
        // echo 'Productos Repetidos:';
        // var_dump($data['productosRepetidos']);
        // echo 'Productos No Repetidos:';
        // var_dump($data['productosNoRepetidos']);
        // echo '</pre>';

        // Cargar la vista
        $this->load->view('user/vistas/arriba');
        $this->load->view('user/index', $data);
        $this->load->view('user/vistas/abajo');

    } 
    //public function generarComprobante(){
        // Obtén los datos del carrito desde el localStorage (puedes usar JavaScript para enviarlos al servidor)
       // $carrito = json_decode($_POST['carrito'], true); // Suponiendo que envías el carrito como JSON

        // Inserta los datos del carrito en la base de datos
        // ... Código para insertar en la base de datos ...

        // Genera el PDF del comprobante
        // ... Código para generar el PDF ...

        // Redirecciona o muestra una vista de confirmación
        // ... Puedes redireccionar o mostrar una vista de confirmación ...

    //}
    public function mostrar_carrito() {
        // Cargar la vista del carrito, aquí se muestra el contenido del carrito.
        $data['productos'] = $this->carrito_model->obtener_productos();
        
        $this->load->view('user/vistas/arriba');
        $this->load->view('tech', $data);
        $this->load->view('user/vistas/arriba');
    }

    public function procesar_compra() {
        // Obtener los datos del carrito desde el almacenamiento local (LocalStorage)
        $carrito = json_decode($_POST['carrito'], true); // Suponiendo que envías el carrito como JSON

        // Insertar los datos del carrito en la base de datos
        // Recorrer el carrito y realizar la inserción en la tabla Detalle_Ventas
        foreach ($carrito as $item) {
            $detalle_data = array(
                'ID_Venta' => $id_venta, // Obtén el ID de la venta como se explicó antes
                'ID_Producto' => $item['id_producto'],
                'Precio_Unitario' => $item['precio'],
                'Cantidad' => $item['cantidad']
            );
            $this->producto_model->insertar_detalle_venta($detalle_data);

            // Actualizar la cantidad en stock del producto en el modelo
            $this->producto_model->actualizar_cantidad_stock($item['id_producto'], $item['cantidad']);
        }

        // Redireccionar o mostrar una vista de confirmación
        // Redirecciona o muestra una vista de confirmación de la compra exitosa.
    }
}
