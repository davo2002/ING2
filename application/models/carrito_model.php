<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito_model extends CI_model{
    public function obtener_productos() {
        // Consulta para obtener productos disponibles desde la base de datos
        $query = $this->db->get('productos');
        return $query->result();
    }

    public function guardar_compra($carrito) {
        // Realizar las operaciones necesarias para guardar la compra en la base de datos
        // Insertar detalles de la compra en la tabla Detalle_Ventas
        // Actualizar la cantidad en stock de los productos
        
        // Ejemplo: Insertar en la tabla Detalle_Ventas
        foreach ($carrito as $item) {
            $data = array(
                'ID_Producto' => $item['id_producto'],
                'Cantidad' => $item['cantidad'],
                'Precio_Unitario' => $item['precio']
                // Otras columnas necesarias
            );
            $this->db->insert('detalle_venta', $data);
        }
        
        // Ejemplo: Actualizar la cantidad en stock de los productos
        // $this->db->set('Cantidad_Stock', 'Cantidad_Stock - ' . $item['cantidad'], false);
        // $this->db->where('ID', $item['id_producto']);
        // $this->db->update('Productos');
    }
}