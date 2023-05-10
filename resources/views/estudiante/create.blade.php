
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


<style>
     body {
        background: url("https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1183&q=80") no-repeat center center fixed;
        background-size: cover;
    }

    
</style>