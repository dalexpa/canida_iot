<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="../css/app.css" rel="stylesheet">        

    <title>Nueva Reserva</title>
</head>
<body>
    <style>
        body{
            
        }
    </style>

<header id="header" class="header  align-items-center">
            <div class="container  justify-content-between">
                <a href="" class="logo d-flex align-items-center ">
                    <h1>Restaurante</h1>
                </a>

                
            </div>
        </header>
    
    <form action="{{ route('reservations.store') }}" method="POST" id="form_reserva" class="row">
    
    <div class="container">
    
    <h1 class="text-center">Reserva Restaurante</h1>
        
        <div class="container">
            <div class="row">
                <div class="col">
                <label for="table_id">Mesa:</label>
        <select name="table_id" id="table_id">
            @foreach($tables as $table)
                <option value="{{ $table->id }}">{{ $table->name }}</option>
            @endforeach
        </select>
                </div>
                <div class="col">

                </div>
            </div>
            <div class = "row">
                <div class="col">
                <label for="">Nombre del cliente</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la persona que reserva" name="customer_name" id="customer_name" value="{{ old('customer_name') }}">

                </div>
                <div class="col">
                <label for="">Correo electrónico</label>
                <input type="email" class="form-control" placeholder="Ingrese correo electrónico" name="customer_email" id="customer_email" value="{{ old('customer_email') }}">

                </div>
            </div>
            <div class = "row">
                <div class="col">
                <label for="">Número de contacto</label>
                <input type="text" class="form-control" placeholder="Ingrese el número de contacto" name="customer_name" id="customer_name" value="{{ old('customer_phone') }}">

                </div>
                <div class="col">
                <label for="">Fecha Reserva</label>
                <input type="date" class="form-control" placeholder="Ingrese fecha de reserva" name="customer_email" id="date" value="{{ old('date') }}">

                </div>
            </div>
            <div class = "row">
                <div class="col">
                <label for="">Hora de Reserva</label>
                <input type="time" class="form-control" placeholder="Hora de reserva" name="customer_name" id="date" value="{{ old('hour') }}">

                </div>
                <div class="col">

                </div>
                
            </div>
            <div class="row">
                <div class="col">
                
                    <button type="submit" class="btn btn-primary btn-lg">Reservar</button>
                    <button><a href="../welcome.blade.php">Volver a la página principal</a></button>
                
                </div>
            </div>
        </div>
            
            
           
            
            
        
        
        
        

        
        
        
        
        
    </form>
    
</body>
</html>
