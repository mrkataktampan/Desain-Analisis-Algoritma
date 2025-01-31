<?php

namespace Database\Seeders;

use App\Models\Motorcycle;
use Illuminate\Database\Seeder;

class MotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Motorcycle::create([
            'name' => 'EvoMoto X1',
            'description' => 'Motor pintar dengan fitur SmartLocate dan NavRide Navigator.',
            'smart_locate_code' => 'EVO12345',
            'eco_friendly' => true,
            'nav_ride_status' => 'active',
        ]);

        Motorcycle::create([
            'name' => 'EvoMoto Eco',
            'description' => 'Motor ramah lingkungan dengan efisiensi bahan bakar tinggi.',
            'smart_locate_code' => 'EVO67890',
            'eco_friendly' => true,
            'nav_ride_status' => 'inactive',
        ]);
    }
}
