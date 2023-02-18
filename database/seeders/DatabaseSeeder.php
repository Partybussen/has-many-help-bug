<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Booking;
use App\Customer;
use App\Departure;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $customer = Customer::create();

        $departure = Departure::create([
            'organiser_id' => $customer->id,
        ]);

        Booking::create([
            'customer_id' => $customer->id,
            'departure_id' => $departure->id,
        ]);
    }
}
