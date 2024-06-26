<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="../css/app.css" rel="stylesheet">        

    <title>Nueva Reserva</title>
</head>
<body>

<header id="header" class="header align-items-center">
    <div class="container justify-content-between">
        <a href="" class="logo d-flex align-items-center"></a>
        <h1>Sistema de Reservas</h1>
    </div>
</header>

<form action="{{ route('reservations.store') }}" method="POST" id="form_reserva" class="row">
    @csrf  <!-- Incluye el token CSRF -->

    <div class="container">
        <h1 class="text-center">Reserva Restaurante</h1>

        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="table_id">Mesa:</label>
                    <select name="table_id" id="table_id" class="form-control">
                        @foreach($tables as $table)
                            <option value="{{ $table->id }}">{{ $table->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="table_seats">Personas:</label>
                    <select name="table_seats" id="table_seats" class="form-control">
                        @foreach($tables as $table)
                            <option value="{{ $table->seats }}">{{ $table->seats }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="customer_name">Nombre del cliente</label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre de la persona que reserva" name="customer_name" id="customer_name" value="{{ old('customer_name') }}">
                </div>
                <div class="col">
                    <label for="customer_email">Correo electrónico</label>
                    <input type="email" class="form-control" placeholder="Ingrese correo electrónico" name="customer_email" id="customer_email" value="{{ old('customer_email') }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="customer_phone">Número de contacto</label>
                    <input type="text" class="form-control" placeholder="Ingrese el número de contacto" name="customer_phone" id="customer_phone" value="{{ old('customer_phone') }}">
                </div>
                <div class="col">
                    <label for="date">Fecha Reserva</label>
                    <input type="date" class="form-control" placeholder="Ingrese fecha de reserva" name="date" id="date" value="{{ old('date') }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="hour">Hora de Reserva</label>
                    <input type="time" class="form-control" placeholder="Hora de reserva" name="hour" id="hour" value="{{ old('hour') }}">
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg">Reservar</button>
                    <a href="{{ route('reservations.index') }}" class="btn btn-info">Volver a la página principal</a>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>
