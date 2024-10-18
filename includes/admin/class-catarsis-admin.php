<?php
class Catarsis_Admin {
    public function __construct() {
        // Inicialización del admin
        add_action('admin_menu', [$this, 'add_admin_menu']);
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
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

    // Funcion para ercolar cdns css y js
    public function enqueue_admin_scripts() {
        // Enqueue Bootstrap CSS
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2');

        // Enqueue DataTables CSS
        wp_enqueue_style('datatables-css', 'https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css', array(), '1.10.21');

        // Enqueue Select2 CSS
        wp_enqueue_style('select2-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', array(), '4.1.0-rc.0');

        // Enqueue jQuery (WordPress ya tiene jQuery encolado por defecto, pero puedes hacerlo explícitamente si quieres)
        wp_enqueue_script('jquery');

        // Enqueue Bootstrap JS
        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);

        // Enqueue DataTables JS
        wp_enqueue_script('datatables-js', 'https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js', array('jquery'), '1.10.21', true);

        // Enqueue Select2 JS
        wp_enqueue_script('select2-js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array('jquery'), '4.1.0-rc.0', true);

        // Script adicional para inicializar DataTables si es necesario
        wp_add_inline_script('datatables-js', '
            jQuery(document).ready(function($) {
                $(".wp-list-table").DataTable();
                $("#psicologo, #edad, #motivo").select2();
            });
        ');
    }
}
