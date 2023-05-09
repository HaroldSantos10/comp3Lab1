
@extends('layouts.app')

@section('content')

@php
 $nombreVista = 'Nuevo Registro de Estudiante'
@endphp

<br>

<form action="{{ url('/estudiante') }}" method="POST">
    @csrf
    @include('estudiante.form')
   
</form>





@endsection