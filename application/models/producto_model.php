<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class producto_model extends CI_model{

    public function listar_compra(){
        return $this->db->get('productos')->result();
    } 
    public function obtenerProductosRepetidos() {
    $query = $this->db->query('SELECT producto, precio, categoria, imagen, GROUP_CONCAT(descripcion) as descripcion, SUM(cantidad) AS cantidad_total FROM productos GROUP BY producto HAVING COUNT(*) > 1');
    return $query->result();
}   

public function obtenerProductosNoRepetidos() {
    $query = $this->db->query('SELECT producto, precio, categoria, imagen, descripcion, cantidad FROM productos WHERE producto NOT IN (SELECT producto FROM productos GROUP BY producto HAVING COUNT(*) > 1)');
    return $query->result();
}

    
    
    public function guardarcompra($data) {
        $nom1bre_archivo = $_FILES['imagen']['name'];
        $ruta_temporal = $_FILES['imagen']['tmp_name'];
        $compra_data = array(
            'codigo' => $data['codigo'],
            'date' => $data['date'],
            'categoria' => $data['categoria'],
            'cantidad' => $data['cantidad'],
            'precio' => $data['precio'],
            'producto' => $data['producto'],
            'descripcion' => $data['descripcion'],
            "imagen" => $nom1bre_archivo
            // Agregar más campos de la base de datos según tus necesidades
        );
        $ruta_destino = "./assets/archivos/" . $nom1bre_archivo;
        move_uploaded_file($ruta_temporal, $ruta_destino);
    
        // Insertar datos de compra en la tabla de la base de datos
        $this->db->insert('productos', $compra_data);

        // Aquí puedes realizar otras operaciones relacionadas con la base de datos, como guardar información sobre la imagen si es necesario

        return true; // Opcional: Devuelve true si la compra se guardó correctamente
    }
}