<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['table_id', 'customer_name', 'customer_email', 'customer_phone', 'date', 'hour'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
    public function show(Reservation $reservation)
    {
    return view('reservations.show', compact('reservation'));
    }
}
