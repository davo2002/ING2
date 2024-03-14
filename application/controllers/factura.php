<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class factura extends CI_Controller {
    public function __construct() {
        parent::__construct(); if(!$this->session->admins){
        
            redirect(base_url().'login/admin');
        }
        
		$this->load->model('producto_model');
        $this->load->model("login_model");
        $this->load->library("fpdf");
        $this->load->model("Empresa_Model"); // Agrega la carga del modelo Empresa_model
    }
   
    public function aggproductos() {
    
       
        $id = $this->input->post('codigo');
        $fecha = $this->input->post('date');
        $cantidad = $this->input->post('cantidad');
        $precio = $this->input->post('precio');
        $producto = $this->input->post('producto');
        $imagen = $this->input->post('imagen');
		$this->load->model('producto_model');


		$data['codigo'] = $id;
		$data['precio'] = $precio;
		$data['fecha'] = $fecha;
		$data['cantidad'] = $cantidad;
		$data['cpp'] = $cpp;
		$data['transferencia'] = $transferencia;
		$data['efectivo'] = $efectivo;
		$data['producto'] = $producto;
		$data['imagen'] = $imagen;

		$data["nombre_empresa"] = $this->Empresa_Model->obtener_nombre_empresa();
		$data["direccion_empresa"] = $this->Empresa_Model->obtener_direccion();
		$data["ciudad"] = $this->Empresa_Model->obtener_ciudad();
		$data["nit"] = $this->Empresa_Model->obtener_nit();
		$data["telefono"] = $this->Empresa_Model->obtener_telefono();
		$data["correo"] = $this->Empresa_Model->obtener_correo();

		$this->load->view("factura/invoice", $data);
		$this->producto_model->guardarcompra($_POST);
		
		//$id = $this->input->post('codigo');
		//$fecha = $this->input->post('date');
		//$cantidad = $this->input->post('cantidad');
		//$cpp = $this->input->post('cpp');
		//$transferencia = $this->input->post('transferencia');
		//$precio = $this->input->post('precio');
		//$efectivo = $this->input->post('efectivo');
	
		//$producto = $this->input->post('producto');
		//$imagen = $this->input->post('imagen');
		
		//$data['codigo'] = $id;
		//$data['precio'] = $precio;
		//$data['fecha'] = $fecha;
		//$data['cantidad'] = $cantidad;
		//$data['cpp'] = $cpp;
		//$data['transferencia'] = $transferencia;
		//$data['efectivo'] = $efectivo;
		//$data['producto'] = $producto;
		//$data['imagen'] = $imagen;
	
		

		//$data["nombre_empresa"] = $this->Empresa_Model->obtener_nombre_empresa();
		//$data["direccion_empresa"] = $this->Empresa_Model->obtener_direccion();
		//$data["ciudad"] = $this->Empresa_Model->obtener_ciudad();
		//$data["nit"] = $this->Empresa_Model->obtener_nit();
		//$data["telefono"] = $this->Empresa_Model->obtener_telefono();
		//$data["correo"] = $this->Empresa_Model->obtener_correo();

		//$this->load->view("admin/factura/invoice", $data);
		//$this->compra_model->guardarcompra($_POST);  
		   $config['upload_path'] = './assets/archivos/';
		$config['allowed_types'] = 'jpg|jpeg|png|mp4|mov|avi'; // Permitir archivos de imagen (jpg, jpeg, png) y archivos de video (mp4, mov, avi)
		$config['file_name'] = 'subida';
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('imagen')) {
			//$error = array('error' => $this->upload->display_errors());
			//echo 'error';
			$this->session->set_userdata('error_image', true);
		} else {
			$resultado = $this->compra_model->guardarcompra($this->input->post(), $this->upload->data());
			if ($resultado) {
			}
		
			if ($resultado) {
				echo 'Se guardó';
			}
		}
    }
}
