<div class="wrap">
    <h1>Zona de Informes</h1>
    
    <div class="container-filtros border border-dark rounded mb-2">
        <h3 class="text-center">Filtros</h3>
        <form class="container mt-4" method="POST" action="tu_archivo.php">
            <div class="form-row">
                <!-- Select para Psicólogo -->
                <div class="form-group col-md-4">
                    <label for="psicologo">Selecciona Psicólogo</label>
                    <select class="form-control" id="psicologo" name="psicologo">
                        <option value="">-- Selecciona --</option>
                        <option value="psicologo1">Marta Panizo</option>
                        <option value="psicologo2">Psicólogo 2</option>
                        <option value="psicologo3">Psicólogo 3</option>
                    </select>
                </div>

                <!-- Select para Edades -->
                <div class="form-group col-md-4">
                    <label for="edad">Selecciona Edad</label>
                    <select class="form-control" id="edad" name="edad">
                        <option value="">-- Selecciona --</option>
                        <option value="18-25">18-25 años</option>
                        <option value="26-35">26-35 años</option>
                        <option value="36-45">36-45 años</option>
                        <option value="46+">46 años o más</option>
                    </select>
                </div>

                <!-- Select para Motivo de Consulta -->
                <div class="form-group col-md-4">
                    <label for="motivo">Motivo de Consulta</label>
                    <select class="form-control" id="motivo" name="motivo">
                        <option value="">-- Selecciona --</option>
                        <option value="terapia-individual">Terapia Individual</option>
                        <option value="terapia-pareja">Terapia de Pareja</option>
                        <option value="terapia-familiar">Terapia Familiar</option>
                        <option value="terapia-infanto-juvenil">Terapia Infanto-Juvenil</option>
                        <option value="terapia-sexual">Terapia Sexual</option>
                        <option value="terapia-transcultural">Terapia Transcultural</option>
                        <option value="terapia-EMDR">Terapia EMDR</option>
                        <option value="asesoria-crianza">Asesorías de crianza respetuosa (0 a 6 años)</option>
                        <option value="nutricion-integrativa">Nutrición Integrativa y Psiconutrición</option>
                    </select>
                </div>
            </div>

            <!-- Botón de Consultar -->
            <div class="form-group mt-3">
                <button type="button" class="btn btn-primary btn-block">Consultar</button>
            </div>
        </form>
    </div>

    <table class="wp-list-table table table-hover widefat fixed striped">
        <thead>
            <tr>
                <th>Columna 1</th>
                <th>Columna 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dato 1</td>
                <td>Dato 2</td>
            </tr>
            <tr>
                <td>Dato 3</td>
                <td>Dato 455</td>
            </tr>
        </tbody>
    </table>
</div>
