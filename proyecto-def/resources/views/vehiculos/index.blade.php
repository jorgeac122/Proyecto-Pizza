@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lista de Vehículos</h2>
    
    <!-- Tabla para mostrar los vehículos y su socio relacionado -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Vehículo</th>
                <th>Placa</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Año</th>
                <th>Capacidad de Pasajeros</th>
                <th>Nombre del Socio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->idVehiculos }}</td>
                    <td>{{ $vehiculo->Placa }}</td>
                    <td>{{ $vehiculo->Modelo }}</td>
                    <td>{{ $vehiculo->Estado }}</td>
                    <td>{{ $vehiculo->Año }}</td>
                    <td>{{ $vehiculo->CapacidadPasajeros }}</td>
                    <td>{{ $vehiculo->socio->NombreCompleto ?? 'No asignado' }}</td> <!-- Mostrar el nombre del socio -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
