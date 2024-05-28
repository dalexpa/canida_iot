<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="">

    <title>Reservas</title>
</head>
<body>
<header id="header" class="header  align-items-center">
            <div class="container  center-content-between">
                <a href="" class="logo d-flex align-items-center ">
                   
                </a>
                <h1 class="text-center">Restaurante</h1>
                
            </div>
        </header>
    <div class="container">
    <h1>Reservas</h1>
   
    <a href="{{ route('reservations.create') }}"><button type="button" class="btn btn-primary">Nueva Reserva</button></a>
    @if($reservations->isEmpty())
        <p>No hay reservas disponibles.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mesa</th>
                    <th scope="col">Nombre del Cliente</th>
                    <th scope="col">Email del Cliente</th>
                    <th scope="col">Teléfono del Cliente</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th class="text-center" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->table->name }}</td>
                    <td>{{ $reservation->customer_name }}</td>
                    <td>{{ $reservation->customer_email }}</td>
                    <td>{{ $reservation->customer_phone }}</td>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->hour }}</td>
                    <td>
                        
                        <a href="{{ route('reservations.show', $reservation) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
                        
                        <a href="{{ route('reservations.edit', $reservation) }}"><button type="button" class="btn btn-info">Modificar</button></a>
                        <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                           
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </div>
</body>
</html>
