<?php

namespace Database\Seeders;

require_once 'vendor/autoload.php';

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        //ketik masing-masing
        $data = [];
        for ($i = 4; $i<=500; $i++){
            array_push($data, ['id' => $i, 'name' => $faker->name(), 'score' => $faker->numberBetween(60, 100)]);
        }


        
        // ['id' => 1, 'name' => 'Fendi', 'score' => 75],
        // ['id' => 2, 'name' => 'Dafa', 'score' => 80],
        // ['id' => 3, 'name' => 'Hanifah', 'score' => 90],
    
        DB::table('student')->insert($data);
    }
}
