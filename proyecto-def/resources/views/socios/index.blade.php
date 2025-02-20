@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Socios</h2>

    <!-- Mostrar mensajes de error si ocurren -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Cédula</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Estado del Reglamento</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($socios as $socio)
            <tr>
                <td>{{ $socio->idSocios }}</td>
                <td>{{ $socio->NombreCompleto }}</td>
                <td>{{ $socio->Cedula }}</td>
                <td>{{ $socio->Direccion }}</td>
                <td>{{ $socio->Telefono }}</td>
                <td>{{ $socio->Email }}</td>
                <td>{{ $socio->FechaNacimiento }}</td>
                <td>{{ $socio->EstadoReglamento }}</td>
                <td>{{ $socio->FechaRegistro }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
