<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;


class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crear o asegurar la existencia de dos mesas
        $table1 = Table::firstOrCreate(
            ['name' => 'Mesa 1'],
            ['seats' => 4]
        );
        $table2 = Table::firstOrCreate(
            ['name' => 'Mesa 2'],
            ['seats' => 4]
        );

        // Crear una reservación
        Reservation::create([
            'table_id' => $table1->id,
            'customer_name' => 'John Doe',
            'customer_email' => 'john.doe@gmail.com',
            'customer_phone' => '1234567890',
            'date' => Carbon::today()->toDateString(),
            'hour' => Carbon::now()->format('H:i'),
        ]);
    }
}
