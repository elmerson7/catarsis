<?php
class Catarsis_Public {
    public function __construct() {
        // Inicialización para el lado público
    }

    public function display_public_content() {
        // Mostrar contenido en el frontend
        include plugin_dir_path(__FILE__) . '../../templates/public-template.php';
    }
}
