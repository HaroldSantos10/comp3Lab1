    <div class= "form-container" >
        
        <h5 class="text-center letra-head">{{ $nombreVista }}</h5>
   
        <label class="letra-form" for = "">Nombre</label> 
        <input type="text" name="name" id="name" value="{{ isset($estudiante)?$estudiante->name:'' }}" />
        @error('name')
            <div class= "error-message">{{ $message }} </div>
        @enderror

        <label class="letra-form" for="">Edad</label> 
        <input type="number" name="age" id="age" value="{{ isset($estudiante)?$estudiante->age:'' }}" />
        @error('age')
            <div class= "error-message">{{ $message }} </div>
        @enderror
        
        <label class="letra-form" for = "">Calificación</label> 
        <input type="text" name="nota" id="nota" value="{{ isset($estudiante)?$estudiante->nota:'' }}">
        @error('nota')
            <div class= "error-message">{{ $message }} </div>
        @enderror
        

        <div class="mb-3">
            <br>
            <button class="btn btn-secondary text-center" type="submit">Guardar</button>
        </div>


        
    </div>

    <style>
        .error-message{
            color:red
        }
             
    
    </style>

    <style>
    
    .form-container {
        max-width: 400px; 
        position: absolute;
        top: 20%;
        left: 40%;
        margin: 0 auto; 
        padding: 20px; 
        border: 1px solid #ddd; 
        border-radius: 5px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        background-color: rgba(255, 255, 255, 0.5); 
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
        color: #204f79;

    }
    
    .letra-head{
        color: #204f79;
        font-size: 25px;
    }
    .letra-form{
        color: #204f79;
        font-size: 15px;
        font-weight: bold;
    }


    </style>



