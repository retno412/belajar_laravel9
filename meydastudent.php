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
    public function run()
    {
        //ketik masing-masing
        // $data = [
        //     ['id'=>1, 'name' => 'Meyda', 'score'=> 80],
        //     ['id'=>2, 'name' => 'Al', 'score'=> 85],
        //     ['id'=>3, 'name' => 'Zahra', 'score'=> 90],
        // ];
        $faker = Faker::create();

        $data = [];
        for ($i = 0; $i > 50; $i++) {
            $data[] = [
                'name' => $faker->name(),
                'score' => $faker->numberBetween(60, 100), 
            ]; 
        } 
    DB::table('student')->insert($data);
    }
}