<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_model extends CI_Model {
    public function obtener_nombre_empresa() {
        $this->db->select('nombre');
        $this->db->from('empresa');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row('nombre');
    }public function obtener_direccion() {
        $this->db->select('direccion');
        $this->db->from('empresa');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row('direccion');
    }public function obtener_ciudad() {
        $this->db->select('ciudad');
        $this->db->from('empresa');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row('ciudad');
    }public function obtener_nit() {
        $this->db->select('nit');
        $this->db->from('empresa');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row('nit');
    }public function obtener_telefono() {
        $this->db->select('telefono');
        $this->db->from('empresa');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row('telefono');
    }public function obtener_correo() {
        $this->db->select('correo');
        $this->db->from('empresa');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row('correo');
    }public function listar_usuarios(){
        return $this->db->get('usuario')->result();
    }public function listar_admins(){
        return $this->db->get('admins')->result();
    }
}
