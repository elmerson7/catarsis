<?php
/**
 * Plugin Name: Catarsis
 * Plugin URI:  https://tusitio.com
 * Description: Plugin para agregar funcionalidades administrativas.
 * Version:     1.0.0
 * Author:      Tu Nombre
 * Author URI:  https://tusitio.com
 * License:     GPL-2.0+
 * Text Domain: catarsis
 */

// Evitar acceso directo
if (!defined('ABSPATH')) exit;

// Cargar la clase de administración
require_once plugin_dir_path(__FILE__) . 'includes/admin/class-catarsis-admin.php';

// Inicializar el plugin en el admin
function run_catarsis_admin() {
    $plugin_admin = new Catarsis_Admin();
}
add_action('plugins_loaded', 'run_catarsis_admin');
