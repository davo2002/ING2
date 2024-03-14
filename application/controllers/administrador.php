<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador extends CI_Controller {
    function __construct(){
        parent::__construct();

        //condicion para mostrar el apartado administrador
        if(!$this->session->admins) {

            redirect(base_url().'login');
        }

		$this->load->model('producto_model');
		$this->load->model('Compra_Model');
		$this->load->model('Empresa_Model');
        $this->load->model("login_model");
        $this->load->library('form_validation');

    }
    
    public function aggproductos (){
        $this->producto_model->guardarcompra($_POST);  
        $config['upload_path'] = './assets/archivos/';
        $config['allowed_types'] = 'jpg|jpeg|png|mp4|mov|avi'; // Permitir archivos de imagen (jpg, jpeg, png) y archivos de video (mp4, mov, avi)
        $config['file_name'] = 'subida';
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('imagen')) {
            //$error = array('error' => $this->upload->display_errors());
            //echo 'error';
            $this->session->set_userdata('error_image', true);
            redirect(base_url() . 'compras');
        } else {
            $resultado = $this->Todo_Model->guardarcompra($this->input->post(), $this->upload->data());
            if ($resultado) {
                redirect(base_url() . 'compras'); 
            }
        
            if ($resultado) {
                echo 'Se guardó';
            }
        }
        

        echo "<script>alert('¡Pedido procesado exitosamente!');</script>";
    
        // Redirigir después de un pequeño retraso
        echo "<script>setTimeout(function(){ window.location.href = 'compras'; }, 200);</script>";
    }  
    public function administrador() {
        // Cargar la vista
        $this->load->view('admin/vistas/arriba');
        $this->load->view('admin/index');
        $this->load->view('admin/vistas/abajo');
    } public function admins() {
        // Cargar la vista 
        $data['admins'] = $this->Empresa_Model->listar_admins();
        $this->load->view('admin/vistas/arriba');
        $this->load->view('admin/admins',$data);
        $this->load->view('admin/vistas/abajo');
    } public function usuarios() {
        // Cargar la vista 
        $data['usuarios'] = $this->Empresa_Model->listar_usuarios();
        $this->load->view('admin/vistas/arriba');
        $this->load->view('admin/usuarios',$data);
        $this->load->view('admin/vistas/abajo');
    }  public function compras() {
        $data['productos'] = $this->producto_model->listar_compra();
        
        // Cargar la vista
        $this->load->view('admin/vistas/arriba');
        $this->load->view('admin/ventas',$data);
        $this->load->view('admin/vistas/abajo');
    }public function comprar() {
        // Cargar la vista
        $this->load->view('admin/vistas/arriba');
        $this->load->view('admin/comprar');
        $this->load->view('admin/vistas/abajo');
    }public function ventas() {
        $data['ventas'] = $this->Compra_Model->listar_compra();
        
        // Cargar la vista
        $this->load->view('admin/vistas/arriba');
        $this->load->view('admin/compras', $data);
        $this->load->view('admin/vistas/abajo');
    }
    
}