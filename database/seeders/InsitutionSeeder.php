<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\Institution;

class InsitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('institutions')->insert([
        //     'name' => 'name',
        //     'address' => 'address 123',
        //     'country' => 'country',
        //     'city' => 'city',
        //     'phone' => '1234567891',
        //     'email' => 'email@email.com'
        // ]);
        Institution::create([
            'name' => 'name',
            'address' => 'address 123',
            'country' => 'country',
            'city' => 'city',
            'phone' => '1234567891',
            'email' => 'email@email.com'
        ]);
    }
}
