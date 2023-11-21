<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Retno', 'score' => '80'],
            ['id' => 2, 'name' => 'Ariyanti', 'score' => '85'],
            ['id' => 3, 'name' => 'Nurningtias', 'score' => '90'],
            ['id' => 4, 'name' => 'andika', 'score' => '76'],
            ['id' => 5, 'name' => 'dimas', 'score' => '98'],
            ['id' => 6, 'name' => 'Muhammad', 'score' => '77'],
            ['id' => 7, 'name' => 'Ahmad', 'score' => '60'],
            ['id' => 8, 'name' => 'abdul', 'score' => '40'],
            ['id' => 9, 'name' => 'Rangga', 'score' => '56'],
            ['id' => 10, 'name' => 'Arya', 'score' => '98'],
            ['id' => 11, 'name' => 'Adelia', 'score' => '45'],
            ['id' => 12, 'name' => 'Anisa', 'score' => '34'],
            ['id' => 13, 'name' => 'Ayu', 'score' => '65'],
            ['id' => 14, 'name' => 'Bella', 'score' => '52'],
            ['id' => 15, 'name' => 'Citra', 'score' => '66'],
            ['id' => 16, 'name' => 'Dea', 'score' => '87'],
            ['id' => 17, 'name' => 'Dewa', 'score' => '85'],
            ['id' => 18, 'name' => 'Dewi', 'score' => '43'],
            ['id' => 19, 'name' => 'Dina', 'score' => '47'],
            ['id' => 20, 'name' => 'Dinda', 'score' => '73'],
            ['id' => 21, 'name' => 'Bayu', 'score' => '58'],
            ['id' => 22, 'name' => 'Bima', 'score' => '56'],
            ['id' => 23, 'name' => 'Candra', 'score' => '88'],
            ['id' => 24, 'name' => 'Dimas', 'score' => '80'],
            ['id' => 25, 'name' => 'Fadhil', 'score' => '32'],
            ['id' => 26, 'name' => 'Gilang', 'score' => '36'],
            ['id' => 27, 'name' => 'Hanif', 'score' => '76'],
            ['id' => 28, 'name' => 'Ilham', 'score' => '67'],
            ['id' => 29, 'name' => 'Irfan', 'score' => '87'],
            ['id' => 30, 'name' => 'Iqbal', 'score' => '97'],
            ['id' => 31, 'name' => 'Kevin', 'score' => '64'],
            ['id' => 32, 'name' => 'Lazuardi', 'score' => '10'],
            ['id' => 33, 'name' => 'Naufal', 'score' => '45'],
            ['id' => 34, 'name' => 'Feby', 'score' => '65'],
            ['id' => 35, 'name' => 'Fitri', 'score' => '77'],
            ['id' => 36, 'name' => 'Gita', 'score' => '81'],
            ['id' => 37, 'name' => 'Hana', 'score' => '85'],
            ['id' => 38, 'name' => 'Indah', 'score' => '58'],
            ['id' => 39, 'name' => 'Jasmine', 'score' => '66'],
            ['id' => 40, 'name' => 'Kartika', 'score' => '68'],
            ['id' => 41, 'name' => 'Kirana', 'score' => '63'],
            ['id' => 42, 'name' => 'Laila', 'score' => '84'],
            ['id' => 43, 'name' => 'Lintang', 'score' => '50'],
            ['id' => 44, 'name' => 'Maya', 'score' => '23'],
            ['id' => 45, 'name' => 'Nabila', 'score' => '53'],
            ['id' => 46, 'name' => 'Nadia', 'score' => '89'],
            ['id' => 47, 'name' => 'Rahma', 'score' => '62'],
            ['id' => 48, 'name' => 'Sarah', 'score' => '60'],
            ['id' => 49, 'name' => 'Siska', 'score' => '71'],
            ['id' => 50, 'name' => 'Utami', 'score' => '70'],
            
            
            
            
            
        ];
        DB::table('student')->insert($data);
    }
}
