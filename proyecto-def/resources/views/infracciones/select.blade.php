@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Seleccionar Socio</h2>
    
    <!-- Select de Socios -->
    <div class="form-group">
        <label for="socio-select">Selecciona un Socio:</label>
        <select id="socio-select" class="form-control">
            <option value="">Seleccione un socio</option>
            @foreach($socios as $socio)
                <option value="{{ $socio->idSocios }}">{{ $socio->NombreCompleto }}</option>
            @endforeach
        </select>
    </div>

    <!-- Tabla de Infracciones -->
    <div class="mt-4">
        <h4>Infracciones del Socio</h4>
        <table class="table table-bordered" id="infracciones-table">
            <thead>
                <tr>
                    <th>ID Infracción</th>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán las infracciones dinámicamente -->
            </tbody>
        </table>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        console.log("jQuery está funcionando correctamente.");
        // Capturar el evento cuando se selecciona un socio
        $('#socio-select').change(function() {
            var socioId = $(this).val(); // Obtener el id del socio seleccionado
            
            if (socioId) {
                // Realizar la petición AJAX para obtener las infracciones del socio
                $.ajax({
                    url: '/infracciones/' + socioId,
                    type: 'GET',
                    success: function(response) {
                        // Limpiar la tabla antes de cargar nuevas infracciones
                        $('#infracciones-table tbody').empty();

                        // Verificar si hay infracciones
                        if (response.length > 0) {
                            // Iterar sobre las infracciones y agregarlas a la tabla
                            $.each(response, function(index, infraccion) {
                                $('#infracciones-table tbody').append(
                                    '<tr>' +
                                    '<td>' + infraccion.idInfracciones + '</td>' +
                                    '<td>' + infraccion.Fecha + '</td>' +
                                    '<td>' + infraccion.Descripcion + '</td>' +
                                    '<td>' + infraccion.Estado + '</td>' +
                                    '</tr>'
                                );
                            });
                        } else {
                            // Mostrar un mensaje si no hay infracciones
                            $('#infracciones-table tbody').append(
                                '<tr><td colspan="4" class="text-center">No hay infracciones para este socio.</td></tr>'
                            );
                        }
                    }
                });
            } else {
                // Si no se selecciona ningún socio, limpiar la tabla
                $('#infracciones-table tbody').empty();
            }
        });
    });
</script>
@endsection
