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
        
        //Ketik masing-masing
        
        $data = [] ;
            for ($i = 0; $i < 50; $i++) {
            
            $data[] =
            ['id' => $i + 1, 'name' => $faker->lastName(),'score' => $faker->numberBetween(10, 100)];}
        DB::table('student')->insert($data);
    }
}
