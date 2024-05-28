<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/app.css">
    <title>Detalles de la Reserva</title>
</head>
<body>

        <div class="container">
  
    <h1>Detalles de la Reserva</h1>
    <table border="3">
        <tr>
            <th>ID</th>
            <td>{{ $reservation->id }}</td>
        </tr>
        <tr>
            <th>Mesa</th>
            <td>{{ $reservation->table->name }}</td>
        </tr>
        <tr>
            <th>Nombre del Cliente</th>
            <td>{{ $reservation->customer_name }}</td>
        </tr>
        <tr>
            <th>Email del Cliente</th>
            <td>{{ $reservation->customer_email }}</td>
        </tr>
        <tr>
            <th>Teléfono del Cliente</th>
            <td>{{ $reservation->customer_phone }}</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>{{ $reservation->date }}</td>
        </tr>
        <tr>
            <th>Hora</th>
            <td>{{ $reservation->hour }}</td>
        </tr>
        
    </table>
    <a href="/reservations">Volver a la página principal</a>

    </div>
</body>
</html>
