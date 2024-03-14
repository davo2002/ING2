<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller{  
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
    }
    public function login(){
		$this->load->model("login_model");
		$this->load->view('login/index');
		$this->session->set_userdata('error',false);
	}
	//verificar el tipo de sesion con la que esta intentando ingresar
	public function veri(){
		$this->load->model("login_model");
		$resultado = $this->login_model->veri($_POST['correo']);
		$resultad = $this->login_model->ver($_POST['correo']);

		//condicion de validacion de administradr, si lo es que inicie como administrador
		if ($resultado->password == $this->input->post('password')){
			$this->session->set_userdata('admins',$resultado);
			redirect(base_url().'administrador');
		} if($resultad->password == $this->input->post('contraseña')){
			$this->session->set_userdata('usuario',$resultad);
			redirect(base_url().'checkout');

		}
		
		
		//si no es ninguno de los 2 que vuelva a redireccionar al login
		else{
			$this->session->set_userdata('error',true);
			redirect(base_url().'login');
		}
	}
	
	//cerrar session como administrador
	public function cerrar(){
		$this->session->unset_userdata('admins');
		redirect(base_url().'login');
	}public function cerrarc(){
		$this->session->unset_userdata('usuario');
		redirect(base_url().'tech');
	}public function seginup() {
        // Obtener los datos del carrito desde el formulario
        $this->load->view("login/seginup");
    } public function aggclientes (){    
		$this->login_model->guardarc($_POST);  
		redirect(base_url().'login');
	} 
}