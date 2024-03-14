<?php
// PedidoModel.php

class PedidoModel extends CI_Model {
    
    public function guardarPedido($codigo, $cedula,$note, $productos) {
        // Insertar el pedido en la base de datos
        
        // Suponiendo que tienes una tabla 'pedidos' en tu base de datos
        $data = array(
            'codigo' => $codigo,
            'cedula' => $cedula,
            'note' => $note
            // Otros campos del pedido
        );
        
        // Insertar datos en la tabla 'pedidos'
        $this->db->insert('vender', $data);
        // Insertar productos relacionados con el pedido en otra tabla
        //foreach ($productos as $producto) {
            //$productoData = array(
                //'codigo' => $codigo,
                //'producto' => $producto['producto'],
                //'cantidad' => $producto['cantidad'],
                // Otros campos del producto si los hay
            //);
            
            // Insertar datos del producto en la tabla 'productos_pedido'
            //$this->db->insert('productos_pedido', $productoData);
        //}
        // Insertar productos relacionados con el pedido en otra tabla (si es necesario)
        // Puedes iterar sobre los productos y guardarlos uno a uno
        
        // Suponiendo que tienes una tabla 'productos_pedido' relacionada con la tabla 'pedidos'
        // foreach ($productos as $producto) {
        //     $this->db->insert('productos_pedido', $producto);
        // }
    }
}
?>
