@extends('layouts.app')

@section('content')

@php
 $nombreVista = 'Editar Registro de Estudiante'
@endphp

<br>

<form action="{{ url('/estudiante/'. $estudiante->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('estudiante.form')
   
</form>

@endsection