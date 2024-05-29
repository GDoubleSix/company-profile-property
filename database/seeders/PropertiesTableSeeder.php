<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('property')->insert(
            [
                'name' => '5232 California Fake, Ave 208C',
                'description' => 'Rumah bagus murah di kota',
                'address' => 'California, USA',
                'price' => '1000000',
                'picture' => '/images/img_1.jpg',
                'num_of_bed' => 2,
                'num_of_bath' => 2
            ]
        );

        DB::table('property')->insert(
            [
                'name' => '5232 California Fake, Ave 218C',
                'description' => 'Rumah bagus murah di kota',
                'address' => 'California, USA',
                'price' => 1100000,
                'picture' => '/images/img_2.jpg',
                'num_of_bed' => 2,
                'num_of_bath' => 2
            ]
        );

        DB::table('property')->insert(
            [
                'name' => '5232 California Fake, Ave 228C',
                'description' => 'Rumah bagus murah di kota',
                'address' => 'California, USA',
                'price' => 1200000,
                'picture' => '/images/img_3.jpg',
                'num_of_bed' => 2,
                'num_of_bath' => 2
            ]
        );
    }
}
