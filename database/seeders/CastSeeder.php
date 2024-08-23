<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cast;

class CastSeeder extends Seeder
{
    public function run()
    {
        Cast::create([
            'name' => 'John Doe',
            'umur' => 30,
            'bio' => 'An experienced actor with a passion for drama.'
        ]);

        Cast::create([
            'name' => 'Jane Smith',
            'umur' => 28,
            'bio' => 'Rising star known for her versatile roles.'
        ]);

        // Add more test data as needed
    }
}