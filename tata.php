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
     * @return void
     */
    public function run()
    {
        $data = [];
        $faker = Faker\Factory::create();

        $data = [];
            for ($i = 3; $i < 55; $i++) {
                $data[] = [
                    'id' => $i + 1,
                    'name'  => $faker->name,
                    'score' => rand(58, 100),
                ];
            }
        DB::table('student')->insert($data);
    }
}