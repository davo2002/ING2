<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model{
    
    //validar el correo del administrador
    public function veri($correo){

        $this->db->select("*");
        $this->db->from('admins');
         $this->db->where('correo', $correo);
         $resultado = $this->db->get();
        return $resultado->first_row();
    }

    //validar el crreo del cliente
    public function ver($correo){

        $this->db->select("*");
        $this->db->from('usuario');
        $this->db->where('correo', $correo);
        $resultado = $this->db->get();
        return $resultado->first_row();
    } public function guardarc($datos){
        $datosguardar = array(
    
            "nombre" => $datos["nombre"],
            "snombre" => $datos["snombre"],
            "apellido" => $datos['apellido'],
            "sapellido" => $datos["sapellido"],
            "telefono" => $datos["telefono"],
            "correo" => $datos['correo'],
            "contraseña" => $datos["contraseña"],
            "pais" => $datos["pais"],
            "direccion" => $datos["direccion"],
            "ciudad" => $datos["ciudad"],
            "cedula" => $datos['cedula'],
            "codigo_postal" => $datos['codigo_postal'],
            "telefono" => $datos['telefono'], 
        );
        return $this->db->insert('usuario', $datosguardar);
    }
}