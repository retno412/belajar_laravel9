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
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        $data = [];
                for ($i = 6; $i < 50; $i++){
                    $data [] = 
                    ['id' => $i + 1, 'name' => $faker->name(), 'score' => $faker->numberBetween(10,99)];
                }
                DB::table('student')->insert($data);
                // ['id' => 6, 'name' => 'fany', 'score' => 90],
                // ['id' => 2 , 'name' => 'laila', 'score' => 95],
    }
}