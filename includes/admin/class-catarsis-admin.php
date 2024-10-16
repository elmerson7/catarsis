<?php
class Catarsis_Admin {
    public function __construct() {
        // Inicialización del admin
        add_action('admin_menu', [$this, 'add_admin_menu']);
    }

    // Añadir el menú al panel de administración
    public function add_admin_menu() {
        add_menu_page(
            'Informes',           // Título de la página
            'Informes',           // Nombre del menú
            'manage_options',      // Capacidad necesaria
            'catarsis_informes',   // Slug del menú
            [$this, 'display_informes_page'],  // Callback para mostrar la página
            'dashicons-chart-line', // Icono del menú (opcional)
            2                      // Posición del menú
        );
    }

    // Mostrar la página de informes
    public function display_informes_page() {
        include plugin_dir_path(__FILE__) . '../../templates/admin-informes.php';
    }
}
