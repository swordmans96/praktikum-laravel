<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i=1; $i <=10; $i++ ){
            DB::table('transactions')->insert([
               'user_id'  => $faker->numberBetween(1,5),
               'court_id' => $faker->numberBetween(1,5),
               'name' => $faker->name,
               'address' => $faker->address,
               'date'    => $faker->date,
               'starttime' => $faker->time,
               'endtime'    =>$faker->time,
               'total'      =>$faker->randomNumber(5, true),
               'grandtotal' =>$faker->randomNumber(5, true),
               'paytotal'   =>$faker->randomNumber(5, true)
            ]);
        }
    }
}
