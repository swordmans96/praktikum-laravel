<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i=1; $i <=5; $i++ ){
            DB::table('courts')->insert([
               'court_type_id' => $faker->numberBetween(1,2),
               'name' => 'Lapangan '.$i,
               'price' => $faker->randomNumber(5, true)
            ]);
        }
    }
}
