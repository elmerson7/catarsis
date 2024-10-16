<div class="wrap">
    <h1>Configuraciones de Catarsis</h1>
    <form method="post" action="options.php">
        <?php
        // Aquí irían tus configuraciones de opciones.
        settings_fields('catarsis_options_group');
        do_settings_sections('catarsis');
        submit_button();
        ?>
    </form>
</div>
