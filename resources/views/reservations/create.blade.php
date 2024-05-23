<!DOCTYPE html>
<html>
<head>
    <title>Nueva Reserva</title>
</head>
<body>
    <h1>Nueva Reserva</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <label for="table_id">Mesa:</label>
        <select name="table_id" id="table_id">
            @foreach($tables as $table)
                <option value="{{ $table->id }}">{{ $table->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="customer_name">Nombre del Cliente:</label>
        <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name') }}">
        <br>
        <label for="customer_email">Email del Cliente:</label>
        <input type="email" name="customer_email" id="customer_email" value="{{ old('customer_email') }}">
        <br>
        <label for="customer_phone">Teléfono del Cliente:</label>
        <input type="text" name="customer_phone" id="customer_phone" value="{{ old('customer_phone') }}">
        <br>
        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" value="{{ old('date') }}">
        <br>
        <label for="hour">Hora:</label>
        <input type="time" name="hour" id="hour" value="{{ old('hour') }}">
        <br>
        <button type="submit">Reservar</button>
        <button><a href="/reservations">Volver a la página principal</a></button>
    </form>
</body>
</html>
