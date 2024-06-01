<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agents')->insert([
            'name' => 'Muqi Gewa',
            'type' => 'Real Estate Agent',
            'profil' => '/images/person_1-min.jpg',
            'instagram_account' => 'muqigw',
            'twitter_account' => 'muqigwe',
            'facebook_account' => 'muqi gewa',
            'linkedin_account' => 'muqi gewa tritanoto'
        ]);

        DB::table('agents')->insert([
            'name' => 'Darna',
            'type' => 'Real Estate Agent',
            'profil' => '/images/person_3-min.jpg',
            'instagram_account' => 'darwin',
            'twitter_account' => 'darwin',
            'facebook_account' => 'darna winata',
            'linkedin_account' => 'darna winata simanjuntak'
        ]);

        DB::table('agents')->insert([
            'name' => 'Muammar',
            'type' => 'Real Estate Agent',
            'profil' => '/images/person_4-min.jpg',
            'instagram_account' => 'Ammarhsb',
            'twitter_account' => 'MuammarHsb',
            'facebook_account' => 'Muammar Hasibuan',
            'linkedin_account' => 'Muammar Hasibuan'
        ]);
    }
}
