<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  //Tadi disini nya eror setelah di perbaiki ternyata tetap sama kayak gini dan setelah diperbaiki sudah berhasil kayak gini lagi
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
        $faker = Faker::create();
        //Ketik masing masing
        $data = [
            ['id' => 1, 'name' => 'Ai', 'score' => 89],
            ['id' => 2, 'name' => 'Nur', 'score' => 99],
            ['id' => 3, 'name' => 'Aiman', 'score' => 100],
        ];
        $data = [];
        for ($i = 0; $i < 47; $i++) {
            $data[] = [
                'id' => $i + 4,
                'name' => $faker->name(),
                'score' => $faker->numberBetween(50, 100),
            ];
        }
        DB::table('student')->insert($data);
    }
}
