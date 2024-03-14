<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Controller {
    function __construct(){
        parent::__construct();

        //condicion para mostrar el apartado administrador
        if(!$this->session->usuario) {

            redirect(base_url().'login');
        }

		$this->load->model('producto_model');
        $this->load->model("login_model");
        $this->load->library("fpdf");

    }public function checkout() {
		$this->load->model('producto_model');
        $data['productos'] = $this->producto_model->listar_compra();
        // Cargar la vista
        $this->load->view('user/vistas/arriba2');
        $this->load->view('user/checkout',$data);
        $this->load->view('user/vistas/abajo');
    }
}
