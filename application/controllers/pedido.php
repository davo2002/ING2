<?php
// PedidoController.php

class pedido extends CI_Controller {
    
    public function procesarPedido() {
        // Obtener datos del formulario
        $codigo = $this->input->post('codigo');
        $note = $this->input->post('note');
        $productos = $this->input->post('productos'); 
        $cedula = $this->input->post('cedula');
        // Obtener otros datos del usuario y del carrito
        
        // Cargar el modelo
        $this->load->model('PedidoModel');
        
        // Llamar al método del modelo para guardar el pedido
        $this->PedidoModel->guardarPedido($codigo, $cedula,$note, $productos/*, otros datos */);
        
        echo "<script>alert('¡Pedido procesado exitosamente!');</script>";
    
        // Redirigir después de un pequeño retraso
        echo "<script>setTimeout(function(){ window.location.href = 'tech'; }, 200);</script>";
    }
}
?>
