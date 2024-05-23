<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('table')->get();
        return view('reservations.index', compact('reservations'));
    }


    public function create()
    {
        $tables = Table::all();
        return view('reservations.create', compact('tables'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'table_id' => 'required|exists:tables,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'date' => 'required|date|after_or_equal:today',
            'hour' => 'required|date_format:H:i',
        ]);

        // Verificar si la mesa está disponible en el momento solicitado
        $table_id = $request->input('table_id');
        $date = $request->input('date');
        $hour = $request->input('hour');

        $existingReservation = Reservation::where('table_id', $table_id)
            ->where('date', $date)
            ->where('hour', $hour)
            ->exists();

        if ($existingReservation) {
            return back()->withErrors(['hour' => 'La mesa ya está reservada para esa fecha y hora.'])->withInput();
        }

        Reservation::create($request->all());
        return redirect()->route('reservations.index');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $tables = Table::all();
        return view('reservations.edit', compact('reservation', 'tables'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'table_id' => 'required|exists:tables,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'date' => 'required|date|after_or_equal:today',
            'hour' => 'required|date_format:H:i',
        ]);

        // Verificar si la mesa está disponible en el momento solicitado, excluyendo la actual reserva
        $table_id = $request->input('table_id');
        $date = $request->input('date');
        $hour = $request->input('hour');

        $existingReservation = Reservation::where('table_id', $table_id)
            ->where('date', $date)
            ->where('hour', $hour)
            ->where('id', '!=', $reservation->id)
            ->exists();

        if ($existingReservation) {
            return back()->withErrors(['hour' => 'La mesa ya está reservada para esa fecha y hora.'])->withInput();
        }

        $reservation->update($request->all());
        return redirect()->route('reservations.index');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
