@extends('layouts.app')

@section('content')

 
    <div class = "container">
        
    <!--
        <img class="img-fluid" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=947&q=80" />
-->

        <div class="imagen-fondo">
            <div class="texto-superpuesto">
                <h1 class= "grices titulo">Bienvenido al </h1>
                <h1 class= "blancos titulo">Sitio Web para</h1><br>
                <h1 class= "grices titulo">  Docentes</h1>

                <p class="parrafo"> Esta Web fue desarrollada pensando en una herramienta digital que
                    permita a los docentes registrar datos y calificaciones de sus estudiantes.
                </p>
            </div>
        </div>






    </div>

       
    
@endsection


<style>
    body {
        background: url("https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1183&q=80") no-repeat center center fixed;
        background-size: cover;
    }
    
    .imagen-fondo {
    background: url("https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1183&q=80") no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    width: 100%;
    position: relative;
    }

    .texto-superpuesto {
    position: absolute;
    top: 40%;
    left: 75%;
    height: 40vh;
    width: 70%;
    transform: translate(-50%, -50%);
    color: black;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.3);
    padding: 2rem;
    border-radius: 1rem;
    /**box-shadow: 0 0 1rem rgba(0, 0, 0, 0.3);**/
    }
    .grices{
        color: #204f79;
        display: inline;
    }
    .blancos{
        color: white;
        display: inline;
    }
    .parrafo{
        font-size: 30px;
        color: #4e555b;
        max-width: 800px;
       /**  -webkit-text-stroke-width: 0.1px;
        -webkit-text-stroke-color:white;*/
        
    }
    .titulo{
        font-size: 50px;
    }

</style>