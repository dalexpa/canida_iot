<!DOCTYPE html>
<html>
<head>
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
