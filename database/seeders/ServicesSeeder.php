<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service')->insert([
            'name' => 'Quality Properties',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-house',
        ]);

        DB::table('service')->insert([
            'name' => 'Top Rated Agent',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-house-2',
        ]);

        DB::table('service')->insert([
            'name' => 'Property for Sale',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-building',
        ]);

        DB::table('service')->insert([
            'name' => 'House for Sale',
            'description' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'picture' => 'flaticon-house-3',
        ]);
    }
}
