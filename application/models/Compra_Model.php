<?php
class Compra_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function listar_compra(){
        return $this->db->get('vender')->result();
    } 
}