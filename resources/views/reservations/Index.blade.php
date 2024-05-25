<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Reservas</title>
</head>
<body>
    <h1>Reservas</h1>
    <a href="{{ route('reservations.create') }}">Nueva Reserva</a>
    @if($reservations->isEmpty())
        <p>No hay reservas disponibles.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mesa</th>
                    <th>Nombre del Cliente</th>
                    <th>Email del Cliente</th>
                    <th>Teléfono del Cliente</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acciones</th>
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
                        <a href="{{ route('reservations.show', $reservation) }}">Ver</a>
                        <a href="{{ route('reservations.edit', $reservation) }}">Editar</a>
                        <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
