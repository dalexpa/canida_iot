<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Reserva</title>
</head>
<body>
    <h1>Detalles de la Reserva</h1>
    <p>ID: {{ $reservation->id }}</p>
    <p>Mesa: {{ $reservation->table->name }}</p>
    <p>Nombre del Cliente: {{ $reservation->customer_name }}</p>
    <p>Email del Cliente: {{ $reservation->customer_email }}</p>
    <p>Teléfono del Cliente: {{ $reservation->customer_phone }}</p>
    <p>Fecha: {{ $reservation->date }}</p>
    <p>Hora: {{ $reservation->hour }}</p>
    <!-- Otros detalles de la reserva -->
    <button><a href="/reservations">Volver a la página principal</a></button>

</body>
</html>
