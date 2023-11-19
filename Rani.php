<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();

        $data = [];

        for ($i = 0; $i < 60; $i++) {
            $data[] = [
                'name'  => $faker->name,
                'score' => rand(70, 100),
            ];
        }

        DB::table('student')->insert($data);
    }
}
