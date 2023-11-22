<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[];
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++){
            $data[] =[
                'id' => $i + 1,
                'name' => $faker->name(),
                'score' => $faker->numberBetween(10, 50)
            ]; 
        }
        DB::table('student')->insert($data);
    }
}
