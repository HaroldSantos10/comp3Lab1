@extends('layouts.app')

@section('content')

<br>

<div class = "form-container">
    <h5>Datos del estudiante "{{ $estudiante->name}}"</h5>

    <img src="https://w7.pngwing.com/pngs/750/588/png-transparent-computer-icons-square-academic-cap-graduation-ceremony-others-angle-graduation-ceremony-logo.png" width="80" height="80" class="d-inline-block align-top" >
    <br>

    <b>Nombre:</b> {{ $estudiante->name }} <br>
    <b>Edad:</b>  {{ $estudiante->age}} años<br>
    <b>Calificación:</b>  {{ $estudiante->nota}} puntos<br>

</div>





<style>
    
    .form-container {
        max-width: 400px; 
        margin: 0 auto; 
        padding: 20px; 
        border: 1px solid #ddd; 
        border-radius: 5px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        background-color: #fff; 
    }
    

    .form-container h2 {
        font-size: 24px; 
        margin-bottom: 20px; 
        text-align: center; 
    }
    

    .form-container label, 
    .form-container input[type="text"], 
    .form-container input[type="password"] {
        display: block; 
        width: 100%; 
        margin-bottom: 10px; 
    }
    

</style>

@endsection