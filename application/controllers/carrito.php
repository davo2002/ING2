<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class carrito extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('carrito_model');
    }

    public function mostrar_carrito() {
        // Cargar productos desde el modelo y pasarlos a la vista
        $data['productos'] = $this->carrito_model->obtener_productos();
        $this->load->view('tech', $data);
    }

    public function procesar_compra() {
        // Obtener los datos del carrito desde el formulario
        $carrito = $this->input->post('carrito');

        // Procesar los datos del carrito y guardarlos en la base de datos
        $this->carrito_model->guardar_compra($carrito);

        // Redireccionar o mostrar una vista de confirmación
        redirect('tech');
    }
}