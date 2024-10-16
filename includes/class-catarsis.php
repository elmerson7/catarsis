<?php
class Catarsis {
    public function __construct() {
        // Inicialización del plugin
    }

    public function run() {
        // Definir hooks
        $this->define_hooks();
    }

    private function define_hooks() {
        // Hook para cargar scripts en el frontend
        add_action('wp_enqueue_scripts', [$this, 'enqueue_public_assets']);
        
        // Hook para cargar scripts en el admin
        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
        
        // Hook para ejecutar código al activar el plugin
        register_activation_hook(__FILE__, [$this, 'activate']);
        
        // Hook para ejecutar código al desactivar el plugin
        register_deactivation_hook(__FILE__, [$this, 'deactivate']);
    }

    public function enqueue_public_assets() {
        wp_enqueue_style('catarsis-public-css', plugin_dir_url(__FILE__) . '../assets/css/public.css');
        wp_enqueue_script('catarsis-public-js', plugin_dir_url(__FILE__) . '../assets/js/public.js', ['jquery'], null, true);
    }

    public function enqueue_admin_assets() {
        wp_enqueue_style('catarsis-admin-css', plugin_dir_url(__FILE__) . '../assets/css/admin.css');
        wp_enqueue_script('catarsis-admin-js', plugin_dir_url(__FILE__) . '../assets/js/admin.js', ['jquery'], null, true);
    }

    public function activate() {
        // Código para ejecutar al activar el plugin (crear tablas, etc.)
    }

    public function deactivate() {
        // Código para ejecutar al desactivar el plugin (limpieza temporal)
    }
}
