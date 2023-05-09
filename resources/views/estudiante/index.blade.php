
@extends('layouts.app')

@section('content')

    <br>
    <h4>Listado de estudiantes</h4>

    <br>
    <a class="btn btn-secondary"  href="{{ url('/estudiante/create') }}">
        <i class="bi bi-plus-square-fill"></i>
        Nueva Estudiante
    </a>
    <br>
    <br>
    
    <table class="table table-formal">
        <thead>
            <tr>
                <th scope = "col">#</th>
                <th scope = "col">Nombre</th>
                <th scope = "col">Edad</th>
                <th scope = "col">Calificación</th>
                <th scope = "col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
                <td >{{ $estudiante->id }}</td>
                <td >{{ $estudiante->name }}</td>
                <td >{{ $estudiante->age }}</td>
                <td >{{ $estudiante->nota}}</td>
                <td >
                    <form method="POST" action="{{ url('/estudiante/'. $estudiante->id) }}">
                    <a class= "btn btn-outline-secondary" href="{{ url('/estudiante/'. $estudiante->id ) }}">
                        <i class="bi bi-info-circle-fill">Mostrar</i>
                    </a>
                    @csrf
                    &nbsp;
                    <a class="btn btn-outline-secondary" href="{{ url('/estudiante/'. $estudiante->id . '/edit') }}">
                        <i class="bi bi-pencil-fill"></i>
                        Editar
                    </a>
                    {{ method_field('DELETE') }}
                    &nbsp;
                    
                    <input class="btn btn-outline-secondary" type="submit" value="Eliminar" onclick="return confirm('Desea eliminar el registro?')">
                        
                    </input>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection