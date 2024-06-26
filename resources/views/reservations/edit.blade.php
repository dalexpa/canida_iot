<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Editar Reserva</title>
</head>
<body>
    <style>
        a{
            text-decoration: none;
            list-style: none;
        }
    </style>
    <h1 class="text-center">Editar Reserva</h1>
    <div class="container">
    <form class ="form-control grid gap-3" action="{{ route('reservations.update', $reservation) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="table_id">Mesa:</label>
        <select name="table_id" id="table_id">
            @foreach($tables as $table)
                <option value="{{ $table->id }}" {{ $table->id == $reservation->table_id ? 'selected' : '' }}>{{ $table->name }}</option>
            @endforeach
        </select> <br>
        <label for="table_seats">Número de personas personas:</label>
        <select name="table_seats" id="table_seats">
            @foreach($tables as $table)
                 <option value="{{ $table->seats }}" {{ $table->seats == $reservation->table_seats ? 'selected' : '' }}>{{ $table->seats }}</option>
            @endforeach
        </select>
        <div class="row">
            <div class="col">
                <label for="customer_name">Nombre del Cliente:</label>
                <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $reservation->customer_name) }}">
            </div>
        
            <div class="col">
                <label for="customer_email">Email del Cliente:</label>
                <input type="email" name="customer_email" id="customer_email" value="{{ old('customer_email', $reservation->customer_email) }}">
            </div>
        
            <div class="col">
                <label for="customer_phone">Teléfono del Cliente:</label>
                <input type="text" name="customer_phone" id="customer_phone" value="{{ old('customer_phone', $reservation->customer_phone) }}">
            </div>
        </div>
 
        <div class="row">
            <div class="col">
                <label for="date">Fecha:</label>
                <input type="date" name="date" id="date" value="{{ old('date', $reservation->date) }}">
            </div>
            <div class="col">
            <label for="hour">Hora:</label>
            <input type="time" name="hour" id="hour" value="{{ old('hour', $reservation->hour) }}">
            </div>
        </div>
       
       
        <div class="row">
            <div class="col">
        <button class = "btn btn-success" type="submit">Actualizar</button>
        <button class=" btn btn-light"><a href="/reservations">Volver a la página principal</a></button>
        </div>
        </div>
       
        
    </form>
    </div>
</body>
</html>
