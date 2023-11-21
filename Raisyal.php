<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //isi  data
        $data = [
            ['id' => 1, 'name' => 'raisyal', 'score' => 100],
        ];
        // for ($i = 1; $i < 100; $i++){
            // $data [] = ['id' => $i + 1, 'name' => $faker->name(), 'score' => $faker->numberBetween(10, 100)];
        // }
        DB::table('table_student')->insert($data);
    }
}
